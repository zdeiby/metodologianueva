<?php

namespace App\Http\Controllers\ffes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;
use App\Models\ffes\m_caracterizacion_hogar_p2;
use Illuminate\Support\Facades\Crypt;

class c_caracterizacion_hogar_p2 extends Controller
{
    public function fc_caracterizacion_hogar_p2($folio, $idintegrante)
    {
        try {
            // Desencriptar el folio si es necesario
            $folioDesencriptado = $folio;
            try {
                $folioDesencriptado = Crypt::decrypt($folio);
            } catch (\Exception $e) {
                // Si hay error en la desencriptación, usar el valor original
                $folioDesencriptado = $folio;
            }
            
            // Obtener datos del integrante
            $datosIntegrante = DB::table('t1_integranteshogar')
                ->where('folio', $folioDesencriptado)
                ->where('idintegrante', $idintegrante)
                ->first();
                
            if (!$datosIntegrante) {
                return redirect()->route('caracterizacion_integrantes', [
                    'folio' => $folio,
                    'idintegrante' => $idintegrante
                ])->with('error', 'No se encontró ningún integrante con el folio especificado: ' . $folioDesencriptado);
            }
            
            // Obtener datos de caracterización de hogar si existen
            $modelo = new m_caracterizacion_hogar_p2();
            $caracterizacionHogar = $modelo->m_obtenerCaracterizacionHogar($folioDesencriptado, $idintegrante);
            
            // Obtener las respuestas si existen
            $respuestas = null;
            $respuestas_2_1 = null;
            
            if ($caracterizacionHogar && isset($caracterizacionHogar->nino_medidas_restablecimiento_p2)) {
                $respuestas = json_decode($caracterizacionHogar->nino_medidas_restablecimiento_p2, true);
            }
            
            // Obtener respuestas para la pregunta 2.1 si existen
            if ($caracterizacionHogar && isset($caracterizacionHogar->cuales_medidas_restablecimiento_p2_1)) {
                $respuestas_2_1 = json_decode($caracterizacionHogar->cuales_medidas_restablecimiento_p2_1, true);
            }
            
            return view('ffes.v_caracterizacion_hogar_p2', [
                'folio' => $folioDesencriptado,
                'idintegrante' => $idintegrante,
                'datosIntegrante' => $datosIntegrante,
                'respuestas' => $respuestas,
                'respuestas_2_1' => $respuestas_2_1
            ]);
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al cargar la información: ' . $e->getMessage());
        }
    }
    
    public function fc_guardar_caracterizacion_hogar_p2(Request $request)
    {
        try {
            $folio = $request->input('folio');
            $idintegrante = $request->input('idintegrante');
            $documento_profesional = $request->input('documento_profesional');
            
            // Obtener la respuesta seleccionada
            $respuesta = $request->input('respuesta');
            
            // Inicializar array de respuestas en el nuevo formato
            $respuestasData = [];
            
            // Guardar todas las opciones con SI/NO
            $opcionesP2 = [
                ['id' => "1", 'texto' => "SI"],
                ['id' => "41", 'texto' => "NO, PERO LO REQUIERE"],
                ['id' => "36", 'texto' => "NO, NO LO HA REQUERIDO"]
            ];
            
            // Obtener integrantes para la opción seleccionada
            $integrantes = [];
            if ($respuesta == 1 || $respuesta == 41) {
                $integrantes = $request->input('integrantes', []);
            }
            
            // Guardar todas las opciones, indicando cuál fue seleccionada
            foreach ($opcionesP2 as $opcion) {
                if ($opcion['id'] == $respuesta) {
                    // Esta opción fue seleccionada
                    $respuestasData[] = [
                        'id' => $opcion['id'],
                        'valor' => "SI",
                        'idintegrante' => $integrantes
                    ];
                } else {
                    // Esta opción NO fue seleccionada
                    $respuestasData[] = [
                        'id' => $opcion['id'],
                        'valor' => "NO",
                        'idintegrante' => []
                    ];
                }
            }
            
            // Preparar los datos para la pregunta 2.1
            $respuestas2_1Data = [];
            
            // Definir las opciones disponibles para la pregunta 2.1
            $opcionesP2_1 = [
                ['id' => '37', 'label' => 'A. Medio institucional estramural'],
                ['id' => '38', 'label' => 'B. Intervencion de apoyo psicologico especializado'],
                ['id' => '42', 'label' => 'C. Ubicación en medio familiar con cuidados personales o custodia'],
                ['id' => '39', 'label' => 'D. Sistema de responsabildad penal extramural']
            ];
            
            // Procesar las medidas cuando la respuesta es SI
            if ($respuesta == 1) {
                // Obtener las medidas enviadas desde el frontend
                $medidas = $request->input('medidas', []);
                
                // Validar que haya al menos una medida seleccionada
                $hayMedidasSI = false;
                foreach ($medidas as $medida) {
                    if (isset($medida['valor']) && $medida['valor'] === 'SI') {
                        $hayMedidasSI = true;
                        break;
                    }
                }
                
                if (!$hayMedidasSI) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Si la respuesta a la pregunta 2 es SI, debe seleccionar al menos una medida en la pregunta 2.1'
                    ]);
                }
                
                // Guardar las medidas en el formato requerido
                $respuestas2_1Data = $medidas;
            } else {
                // Si la respuesta no es SI, establecer todas las medidas como NO
                foreach ($opcionesP2_1 as $opcion) {
                    $respuestas2_1Data[] = [
                        'id' => $opcion['id'],
                        'valor' => "NO",
                        'idintegrante' => []
                    ];
                }
            }
            
            // Guardar en la base de datos
            $modelo = new m_caracterizacion_hogar_p2();
            
            // Verificar si ya existe un registro para actualizar
            $caracterizacionExistente = $modelo->m_obtenerCaracterizacionHogar($folio, $idintegrante);
            
            // Actualizar o crear registro
            if ($caracterizacionExistente) {
                // Actualizar SOLO las columnas específicas sin afectar otras columnas
                $resultado = DB::table('t1_caracterizacion_hogar_ffes')
                    ->where('folio', $folio)
                    ->where('idintegrante', $idintegrante)
                    ->update([
                        'nino_medidas_restablecimiento_p2' => json_encode($respuestasData),
                        'cuales_medidas_restablecimiento_p2_1' => json_encode($respuestas2_1Data),
                        'documento_profesional' => $documento_profesional,
                        'updated_at' => now()
                    ]);
            } else {
                // Crear nuevo registro
                $datos = [
                    'folio' => $folio,
                    'idintegrante' => $idintegrante,
                    'nino_medidas_restablecimiento_p2' => json_encode($respuestasData),
                    'cuales_medidas_restablecimiento_p2_1' => json_encode($respuestas2_1Data),
                    'documento_profesional' => $documento_profesional
                ];
                $resultado = $modelo->m_guardarCaracterizacionHogar($datos);
            }
            
            if ($resultado) {
                return response()->json([
                    'success' => true,
                    'message' => 'Datos guardados correctamente'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No se pudieron guardar los datos'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al guardar los datos: ' . $e->getMessage()
            ]);
        }
    }
    
    public function fc_obtener_integrantes_menores($folio)
    {
        try {
            // Desencriptar el folio si es necesario
            $folioDesencriptado = $folio;
            try {
                $folioDesencriptado = Crypt::decrypt($folio);
            } catch (\Exception $e) {
                // Si hay error en la desencriptación, usar el valor original
                $folioDesencriptado = $folio;
            }
            
            // Obtener integrantes menores de 18 años (0-17 años)
            $integrantes = DB::table('t1_integranteshogar')
                ->where('folio', $folioDesencriptado)
                ->where(function($query) {
                    $query->whereRaw("CAST(REPLACE(edad, 'años', '') AS UNSIGNED) < 18")
                          ->orWhereRaw("CAST(edad AS UNSIGNED) < 18");
                })
                ->select('idintegrante', 'nombre1', 'nombre2', 'apellido1', 'apellido2', 'edad')
                ->get();
                
            return response()->json([
                'success' => true,
                'integrantes' => $integrantes
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener los integrantes: ' . $e->getMessage()
            ]);
        }
    }
}
