<?php

namespace App\Http\Controllers\ffes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;
use App\Models\ffes\m_caracterizacionIntegrante_primeraInfancia;

class c_caracterizacionIntegrantes_primerInfancia extends Controller
{
    // Método para mostrar la vista de servicios de primera infancia
    public function fc_primeraInfancia(Request $request, $folio, $idintegrante)
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
        
        // Obtener servicio de primera infancia existente si lo hay
        $modelo = new m_caracterizacionIntegrante_primeraInfancia();
        $servicioExistente = $modelo->m_obtenerServicioPrimeraInfancia($folioDesencriptado, $idintegranteDesencriptado);
        
        // Obtener las opciones de servicios de primera infancia (IDs 19-24)
        $serviciosPrimeraInfancia = DB::table('t_bancopreguntas_ffes')
            ->whereBetween('id', [19, 24])
            ->get();
        
        // Guardar folio e idintegrante en la sesión
        session(['folio_actual' => $folioDesencriptado]);
        session(['idintegrante_actual' => $idintegranteDesencriptado]);
        
        return view('ffes.v_caracterizacionIntegrantes_primeraInfancia', [
            'folio' => $folioDesencriptado,
            'folioEncriptado' => $hashids->encode($folioDesencriptado),
            'idintegrante' => $idintegranteDesencriptado,
            'idintegranteEncriptado' => $hashids->encode($idintegranteDesencriptado),
            'datosIntegrante' => $datosIntegrante,
            'servicioSeleccionado' => $servicioExistente ? $servicioExistente->servicio_primera_infancia : null,
            'serviciosPrimeraInfancia' => $serviciosPrimeraInfancia
        ]);
    }
    
    // Método para guardar el servicio de primera infancia
    public function fc_guardar_primeraInfancia(Request $request)
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
        
        // Obtener servicio seleccionado
        $servicio_primera_infancia = $request->input('servicio_primera_infancia');
        
        // Verificar que ningún dato esencial sea nulo
        if (empty($folio) || empty($idintegrante) || empty($servicio_primera_infancia)) {
            return response()->json([
                'success' => false, 
                'message' => 'Error: Datos incompletos. Por favor seleccione un servicio.'
            ], 400);
        }
        
        try {
            // Eliminar respuesta existente
            $modelo = new m_caracterizacionIntegrante_primeraInfancia();
            $modelo->m_eliminarServicioPrimeraInfancia($folio, $idintegrante);
            
            // Datos a guardar
            $datos = [
                'folio' => $folio,
                'idintegrante' => $idintegrante,
                'servicio_primera_infancia' => $servicio_primera_infancia,
                'documento_profesional' => $documento_profesional
            ];
            
            // Guardar en la base de datos
            $resultado = $modelo->m_guardarServicioPrimeraInfancia($datos);
            
            if ($resultado) {
                return response()->json(['success' => true, 'message' => 'Datos guardados correctamente']);
            } else {
                return response()->json(['success' => false, 'message' => 'Error al guardar los datos'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error: ' . $e->getMessage()], 500);
        }
    }
}