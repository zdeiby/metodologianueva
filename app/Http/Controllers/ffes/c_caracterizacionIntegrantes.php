<?php

namespace App\Http\Controllers\ffes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;
use App\Models\ffes\m_caracterizacionIntegrante_estrategia;

class c_caracterizacionIntegrantes extends Controller
{
    // Método para mostrar la vista de caracterización de integrantes
    public function fc_caracterizacionIntegrantes(Request $request, $folio, $idintegrante)
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
            ->where('idintegrante', (string)$idintegranteDesencriptado)
            ->first();
            
        // Si no se encuentra, intentar con una consulta más flexible
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
                // Si no se encuentra el integrante, mostrar un mensaje de error
                return redirect()->route('index')->with('error', 'No se encontró ningún integrante con el folio especificado: ' . $folioDesencriptado);
            }
        }
        
        // Obtener estrategias existentes si las hay
        $modelo = new m_caracterizacionIntegrante_estrategia();
        $estrategiasExistentes = $modelo->m_obtenerEstrategias($folioDesencriptado, $idintegranteDesencriptado);
        
        // Verificar si existen respuestas de primera infancia
        $existePrimeraInfancia = DB::table('t1_caracterizacionIntegrante_primeraInfancia_ffes')
            ->where('folio', $folioDesencriptado)
            ->where('idintegrante', $idintegranteDesencriptado)
            ->exists();
            
        // Verificar si existen respuestas de mecanismos de protección
        $existeMecanismosProteccion = DB::table('t1_caracterizacionIntegrante_conoce_instituciones_ffes')
            ->where('folio', $folioDesencriptado)
            ->where('idintegrante', $idintegranteDesencriptado)
            ->exists();
        
        // Preparar array de estrategias seleccionadas
        $estrategiasSeleccionadas = [];
        $otroEspecificar = '';
        
        // Recorrer las estrategias existentes y agregarlas al array
        foreach ($estrategiasExistentes as $estrategia) {
            $estrategiasSeleccionadas[] = $estrategia->estrategia_implementa_reducir_estres;
            
            // Si es la estrategia "Otro", guardar el texto especificado
            if ($estrategia->estrategia_implementa_reducir_estres == 16 && !empty($estrategia->otro_cual_estrategia)) {
                $otroEspecificar = $estrategia->otro_cual_estrategia;
            }
        }
        
        // Guardar folio e idintegrante en la sesión
        session(['folio_actual' => $folioDesencriptado]);
        session(['idintegrante_actual' => $idintegranteDesencriptado]);
        
        return view('ffes.v_caracterizacionIntegrantes', [
            'folio' => $folioDesencriptado,
            'folioEncriptado' => $hashids->encode($folioDesencriptado),
            'idintegrante' => $idintegranteDesencriptado,
            'idintegranteEncriptado' => $hashids->encode($idintegranteDesencriptado),
            'datosIntegrante' => $datosIntegrante,
            'estrategiasSeleccionadas' => $estrategiasSeleccionadas,
            'otroEspecificar' => $otroEspecificar,
            'existePrimeraInfancia' => $existePrimeraInfancia,
            'existeMecanismosProteccion' => $existeMecanismosProteccion
        ]);
    }
    
    // Método para guardar las estrategias
    public function fc_guardar_estrategias(Request $request)
    {
        if (!session('nombre')) {
            return response()->json(['error' => 'Sesión no válida'], 401);
        }
        
        // Obtener folio e idintegrante de la sesión (guardados en el método fc_caracterizacionIntegrantes)
        $folio = session('folio_actual');
        $idintegrante = session('idintegrante_actual');
        
        // Si no están en la sesión, intentar obtenerlos del formulario
        if (empty($folio)) {
            $folio = $request->input('folio');
        }
        
        if (empty($idintegrante)) {
            $idintegrante = $request->input('idintegrante');
        }
        
        // Si aún están vacíos, intentar extraerlos de la URL de referencia
        if (empty($folio) || empty($idintegrante)) {
            $referer = $request->headers->get('referer');
            if ($referer) {
                $parts = explode('/', $referer);
                if (count($parts) >= 2) {
                    // Los dos últimos segmentos de la URL deberían ser folio e idintegrante
                    $folioUrl = $parts[count($parts) - 2];
                    $idintegranteUrl = $parts[count($parts) - 1];
                    
                    $hashids = new Hashids('', 10);
                    
                    // Intentar decodificar el folio
                    $decodedFolio = $hashids->decode($folioUrl);
                    // Si la decodificación devuelve un array vacío, asumimos que es un valor sin encriptar
                    if (empty($folio)) {
                        $folio = !empty($decodedFolio) ? $decodedFolio[0] : $folioUrl;
                    }
                    
                    // Intentar decodificar el idintegrante
                    $decodedIdIntegrante = $hashids->decode($idintegranteUrl);
                    // Si la decodificación devuelve un array vacío, asumimos que es un valor sin encriptar
                    if (empty($idintegrante)) {
                        $idintegrante = !empty($decodedIdIntegrante) ? $decodedIdIntegrante[0] : $idintegranteUrl;
                    }
                }
            }
        }
        
        // Usar la cédula de la sesión como documento_profesional
        $documento_profesional = session('cedula');
        if (empty($documento_profesional)) {
            $documento_profesional = 0; // Valor predeterminado si no hay cédula en la sesión
        }
        
        // Obtener estrategias seleccionadas
        $estrategiasSeleccionadas = $request->input('estrategias', []);
        $otroEspecificar = $request->input('otro_especificar', '');
        
        // Verificar si "Otro" está seleccionado pero no se especificó el texto
        if (in_array('16', $estrategiasSeleccionadas) && empty($otroEspecificar)) {
            return response()->json([
                'success' => false,
                'message' => 'Error: Debe especificar el texto para la opción "Otro"'
            ], 400);
        }
        
        // Si se seleccionó "No implementa ninguna", ignorar otras selecciones
        if (in_array('17', $estrategiasSeleccionadas)) {
            $estrategiasSeleccionadas = ['17']; // Solo mantener "No implementa ninguna"
            $otroEspecificar = ''; // Limpiar el campo de otro especificar
        }
        
        // Eliminar todas las estrategias existentes para este integrante
        $modelo = new m_caracterizacionIntegrante_estrategia();
        $modelo->m_eliminarEstrategias($folio, $idintegrante);
        
        // Guardar cada estrategia seleccionada como un registro individual
        $resultadoOk = true;
        foreach ($estrategiasSeleccionadas as $estrategia) {
            // Preparar datos para guardar
            $datos = [
                'folio' => $folio,
                'idintegrante' => $idintegrante,
                'estrategia_implementa_reducir_estres' => $estrategia,
                'otro_cual_estrategia' => ($estrategia == 16) ? $otroEspecificar : null, // Solo guardar el texto si es la opción "Otro"
                'documento_profesional' => $documento_profesional
            ];
            
            // Guardar en la base de datos
            $resultado = $modelo->m_guardarEstrategia($datos);
            if (!$resultado) {
                $resultadoOk = false;
            }
        }
        
        if ($resultadoOk) {
            return response()->json(['success' => true, 'message' => 'Datos guardados correctamente']);
        } else {
            return response()->json(['success' => false, 'message' => 'Error al guardar los datos'], 500);
        }
    }
}