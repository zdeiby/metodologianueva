<?php

namespace App\Http\Controllers\ffes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;
use App\Models\ffes\m_triaje_p1_p2;

class c_triaje_p1_p2 extends Controller
{
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
            
        // Obtener respuestas existentes si las hay
        $modelo = new m_triaje_p1_p2();
        $respuestasExistentes = $modelo->m_obtenerRespuestas($folioDesencriptado, $idintegranteDesencriptado);
        
        return view('ffes.v_triaje_p1_p2', [
            'folio' => $folioDesencriptado,
            'folioEncriptado' => $hashids->encode($folioDesencriptado),
            'idintegrante' => $idintegranteDesencriptado,
            'idintegranteEncriptado' => $hashids->encode($idintegranteDesencriptado),
            'datosIntegrante' => $datosIntegrante,
            'respuestas' => $respuestasExistentes
        ]);
    }
    
    public function fc_guardar_triaje_p1_p2(Request $request)
    {
        $now = Carbon::now();
        
        // Obtener datos del formulario
        $folio = $request->input('folio');
        $idintegrante = $request->input('idintegrante');
        $usuario = $request->input('usuario');
        
        // Obtener valores de los checkboxes (1 si está marcado, 0 si no)
        $hogarAcogida = $request->has('hogar_acogida') ? 1 : 0;
        $cuidadoraNna = $request->has('cuidadora_nna') ? 1 : 0;
        
        // Datos a insertar o actualizar
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
        
        // Usar updateOrInsert para guardar o actualizar el registro
        DB::table('t1_triaje_p1_p2')->updateOrInsert(
            [
                'folio' => $folio,
                'idintegrante' => $idintegrante,
            ],
            $data
        );
        
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