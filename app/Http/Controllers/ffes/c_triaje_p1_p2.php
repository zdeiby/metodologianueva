<?php

namespace App\Http\Controllers\ffes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Hashids\Hashids;
use App\Models\ffes\m_triaje_p1_p2;

class c_triaje_p1_p2 extends Controller
{
    public function __construct()
    {
        // Ya no necesitamos verificar la estructura de la tabla
        // porque usaremos una tabla separada para los integrantes cuidados
    }
    
    public function fc_triaje_p1_p2(Request $request, $folio, $idintegrante)
    {
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
        
        $hashids = new Hashids('', 10);
        
        // Intentar decodificar el folio
        $decodedFolio = $hashids->decode($folio);
        // Si la decodificación devuelve un array vacío, asumimos que es un valor sin encriptar
        $folioDesencriptado = !empty($decodedFolio) ? $decodedFolio[0] : $folio;
        
        // Intentar decodificar el idintegrante
        $decodedIdIntegrante = $hashids->decode($idintegrante);
        // Si la decodificación devuelve un array vacío, asumimos que es un valor sin encriptar
        $idintegranteDesencriptado = !empty($decodedIdIntegrante) ? $decodedIdIntegrante[0] : $idintegrante;
        
        // Obtener datos del integrante
        $datosIntegrante = DB::table('t1_integranteshogar')
            ->where('folio', $folioDesencriptado)
            ->where('idintegrante', $idintegranteDesencriptado)
            ->first();
            
        if (!$datosIntegrante) {
            // Si no se encuentra el integrante, mostrar un mensaje de error
            return redirect()->route('index')->with('error', 'No se encontró el integrante especificado.');
        }
        
        // Obtener todos los integrantes del hogar
        $integrantesHogar = DB::table('t1_integranteshogar')
            ->where('folio', $folioDesencriptado)
            ->get();
            
        // Obtener respuestas existentes si las hay
        $modelo = new m_triaje_p1_p2();
        $respuestasExistentes = $modelo->m_obtenerRespuestas($folioDesencriptado, $idintegranteDesencriptado);
        
        // Obtener integrantes cuidados por este integrante
        $integrantesCuidados = DB::table('t1_triaje_integrantes_cuidador_nino')
            ->where('folio', $folioDesencriptado)
            ->where('idintegrante_cuidador', $idintegranteDesencriptado)
            ->pluck('idintegrante')
            ->toArray();
        
        return view('ffes.v_triaje_p1_p2', [
            'folio' => $folioDesencriptado,
            'folioEncriptado' => $hashids->encode($folioDesencriptado),
            'idintegrante' => $idintegranteDesencriptado,
            'idintegranteEncriptado' => $hashids->encode($idintegranteDesencriptado),
            'datosIntegrante' => $datosIntegrante,
            'integrantesHogar' => $integrantesHogar,
            'respuestas' => $respuestasExistentes,
            'integrantesCuidados' => $integrantesCuidados
        ]);
    }
    
    public function fc_guardar_triaje_p1_p2(Request $request)
    {
        if (!session('nombre')) {
            return response()->json(['error' => 'Sesión no válida'], 401);
        }
        
        $now = Carbon::now();
        
        // Obtener datos del formulario
        $folio = $request->input('folio');
        $idintegrante = $request->input('idintegrante');
        $usuario = $request->input('usuario');
        
        // Obtener valores de los checkboxes (1 si está marcado, 0 si no)
        $hogarAcogida = $request->has('hogar_acogida') ? 1 : 0;
        $cuidadoraNna = $request->has('cuidadora_nna') ? 1 : 0;
        
        // Datos a insertar o actualizar para la tabla principal
        $data = [
            'folio' => $folio,
            'idintegrante' => $idintegrante,
            'hogar_acogida' => $hogarAcogida,
            'cuidadora_nna' => $cuidadoraNna,
            'estado' => 1, // 1 cuando guarda
            'sincro' => 0, // 0 siempre cuando guarda
            'updated_at' => $now
        ];
        
        // Verificar si el registro existe
        $exists = DB::table('t1_triaje_p1_p2')
            ->where('folio', $folio)
            ->where('idintegrante', $idintegrante)
            ->exists();
            
        if (!$exists) {
            // Si no existe, agregar created_at
            $data['created_at'] = $now;
        }
        
        // Usar updateOrInsert para guardar o actualizar el registro principal
        DB::table('t1_triaje_p1_p2')->updateOrInsert(
            [
                'folio' => $folio,
                'idintegrante' => $idintegrante,
            ],
            $data
        );
        
        // Procesar los integrantes cuidados
        if ($cuidadoraNna == 1) {
            // Si es cuidadora, procesar los integrantes seleccionados
            $integrantesSeleccionados = $request->input('integrantes_cuidados', []);
            
            // Obtener los integrantes que actualmente están registrados
            $integrantesActuales = DB::table('t1_triaje_integrantes_cuidador_nino')
                ->where('folio', $folio)
                ->where('idintegrante_cuidador', $idintegrante)
                ->pluck('idintegrante')
                ->toArray();
                
            // Identificar integrantes que ya no están seleccionados (desmarcados)
            $integrantesDesmarcados = array_diff($integrantesActuales, $integrantesSeleccionados);
            
            // Eliminar completamente los registros de integrantes desmarcados
            if (!empty($integrantesDesmarcados)) {
                DB::table('t1_triaje_integrantes_cuidador_nino')
                    ->where('folio', $folio)
                    ->where('idintegrante_cuidador', $idintegrante)
                    ->whereIn('idintegrante', $integrantesDesmarcados)
                    ->delete();
            }
            
            // Luego, para cada integrante seleccionado, crear o actualizar el registro
            foreach ($integrantesSeleccionados as $integranteCuidado) {
                // Verificar si ya existe un registro para este par de integrantes
                $existeRelacion = DB::table('t1_triaje_integrantes_cuidador_nino')
                    ->where('folio', $folio)
                    ->where('idintegrante', $integranteCuidado)
                    ->where('idintegrante_cuidador', $idintegrante)
                    ->exists();
                
                if (!$existeRelacion) {
                    // Si no existe, crear un nuevo registro
                    DB::table('t1_triaje_integrantes_cuidador_nino')->insert([
                        'folio' => $folio,
                        'idintegrante' => $integranteCuidado,
                        'idintegrante_cuidador' => $idintegrante,
                        'estado' => 1,
                        'sincro' => 0,
                        'created_at' => $now,
                        'updated_at' => $now
                    ]);
                }
            }
        } else {
            // Si no es cuidadora, eliminar todos los registros
            DB::table('t1_triaje_integrantes_cuidador_nino')
                ->where('folio', $folio)
                ->where('idintegrante_cuidador', $idintegrante)
                ->delete();
        }
        
        // También registramos el paso como completado en t1_pasosvisita
        $linea = 300; // Asumimos que es la línea para triaje
        $paso = 30010; // Identificador para este paso específico
        
        $dataPaso = [
            'folio' => $folio,
            'linea' => $linea,
            'paso' => $paso,
            'usuario' => $usuario,
            'estado' => 1,
            'sincro' => 0,
            'updated_at' => $now
        ];
        
        // Verificar si el registro de paso existe
        $existsPaso = DB::table('t1_pasosvisita')
            ->where('folio', $folio)
            ->where('linea', $linea)
            ->where('paso', $paso)
            ->exists();
            
        if (!$existsPaso) {
            // Si no existe, agregar created_at
            $dataPaso['created_at'] = $now;
        }
        
        // Guardar o actualizar el registro de paso
        DB::table('t1_pasosvisita')->updateOrInsert(
            [
                'folio' => $folio,
                'linea' => $linea,
                'paso' => $paso,
            ],
            $dataPaso
        );
        
        return response()->json(['message' => 'Datos guardados correctamente']);
    }
}