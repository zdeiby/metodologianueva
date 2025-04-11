<?php

namespace App\Http\Controllers\ffes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;
use App\Models\ffes\m_caracterizacionIntegrante_mecanismosProteccion;

class c_caracterizacionIntegrantes_mecanismosProteccion extends Controller
{
    // Método para mostrar la vista de mecanismos de protección
    public function fc_mecanismosProteccion(Request $request, $folio, $idintegrante)
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
        
        if (!$folioDesencriptado || !$idintegranteDesencriptado) {
            return redirect()->route('caracterizacion_integrantes', [
                'folio' => $folio,
                'idintegrante' => $idintegrante
            ])->with('error', 'Parámetros inválidos');
        }
        
        // Obtener datos del integrante
        $datosIntegrante = DB::table('t1_integranteshogar')
            ->where('folio', $folioDesencriptado)
            ->where('idintegrante', (string)$idintegranteDesencriptado)
            ->first();
            
        if (!$datosIntegrante) {
            \Log::info("No se encontró el integrante con folio: {$folioDesencriptado} e idintegrante: {$idintegranteDesencriptado}");
            
            // Intentar buscar solo por folio para ver si el problema es con el idintegrante
            $integrantesConEseFolio = DB::table('t1_integranteshogar')
                ->where('folio', $folioDesencriptado)
                ->get();
                
            if ($integrantesConEseFolio->count() > 0) {
                // Si hay integrantes con ese folio, tomar el primero
                $datosIntegrante = $integrantesConEseFolio->first();
                \Log::info("Se encontró un integrante alternativo con folio: {$folioDesencriptado} e idintegrante: {$datosIntegrante->idintegrante}");
            } else {
                return redirect()->route('caracterizacion_integrantes', [
                    'folio' => $folio,
                    'idintegrante' => $idintegrante
                ])->with('error', 'No se encontró ningún integrante con el folio especificado: ' . $folioDesencriptado);
            }
        }
        
        // Eliminamos la validación de edad para permitir el acceso a todos los integrantes,
        // la validación del formulario se manejará en la vista
        
        // Obtener respuesta existente si la hay
        $modelo = new m_caracterizacionIntegrante_mecanismosProteccion();
        $respuestaExistente = $modelo->m_obtenerConoceInstitucion($folioDesencriptado, $idintegranteDesencriptado);
        
        // Obtener las opciones de conocimiento de instituciones (IDs 0 y 1)
        $opcionesConocimiento = DB::table('t_bancopreguntas_ffes')
            ->where('id', 0)
            ->orWhere('id', 1)
            ->get();
        
        // Guardar folio e idintegrante en la sesión
        session(['folio_actual' => $folioDesencriptado]);
        session(['idintegrante_actual' => $idintegranteDesencriptado]);
        
        return view('ffes.v_caracterizacionIntegrantes_mecanismosProteccion', [
            'folio' => $folioDesencriptado,
            'folioEncriptado' => $hashids->encode($folioDesencriptado),
            'idintegrante' => $idintegranteDesencriptado,
            'idintegranteEncriptado' => $hashids->encode($idintegranteDesencriptado),
            'datosIntegrante' => $datosIntegrante,
            'servicioSeleccionado' => $respuestaExistente ? $respuestaExistente->conoce_institucion_mecanismo : null,
            'serviciosPrimeraInfancia' => $opcionesConocimiento
        ]);
    }
    
    // Método para guardar la respuesta sobre conocimiento de instituciones
    public function fc_guardar_mecanismosProteccion(Request $request)
    {
        if (!session('nombre')) {
            return response()->json(['success' => false, 'message' => 'Sesión no válida'], 401);
        }
        
        // Obtener folio e idintegrante de la solicitud
        $folio = $request->input('folio');
        $idintegrante = $request->input('idintegrante');
        
        // Si están vacíos, intentar obtenerlos de la sesión
        if (empty($folio)) {
            $folio = session('folio_actual');
        }
        
        if (empty($idintegrante)) {
            $idintegrante = session('idintegrante_actual');
        }
        
        // Usar la cédula de la sesión como documento_profesional
        $documento_profesional = session('cedula');
        if (empty($documento_profesional)) {
            $documento_profesional = 0; // Valor predeterminado si no hay cédula en la sesión
        }
        
        // Obtener respuesta seleccionada
        $conoce_institucion_mecanismo = $request->input('conoce_institucion_mecanismo');
        
        // Verificar que ningún dato esencial sea nulo
        if (empty($folio) || empty($idintegrante) || $conoce_institucion_mecanismo === null) {
            return response()->json([
                'success' => false, 
                'message' => 'Error: Datos incompletos. Por favor seleccione una opción.'
            ], 400);
        }

        try {
            // Verificar si existe un registro
            $modelo = new m_caracterizacionIntegrante_mecanismosProteccion();
            $registroExistente = $modelo->m_obtenerConoceInstitucion($folio, $idintegrante);
            
            if ($registroExistente) {
                // Actualizar respuesta existente
                $modelo->m_actualizarConoceInstitucion([
                    'folio' => $folio,
                    'idintegrante' => $idintegrante,
                    'conoce_institucion_mecanismo' => $conoce_institucion_mecanismo,
                    'documento_profesional' => $documento_profesional
                ]);
                $mensaje = 'Datos actualizados correctamente';
            } else {
                // Crear un nuevo registro
                $modelo->m_guardarConoceInstitucion([
                    'folio' => $folio,
                    'idintegrante' => $idintegrante,
                    'conoce_institucion_mecanismo' => $conoce_institucion_mecanismo,
                    'documento_profesional' => $documento_profesional
                ]);
                $mensaje = 'Datos guardados correctamente';
            }
            
            return response()->json(['success' => true, 'message' => $mensaje]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error: ' . $e->getMessage()], 500);
        }
    }
}