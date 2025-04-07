<?php

namespace App\Http\Controllers\ffes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ffes\m_caracterizacion_hogar_p3;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class c_caracterizacion_hogar_p3 extends Controller
{
    // Método principal para cargar la vista
    public function fc_caracterizacion_hogar_p3($folio, $idintegrante)
    {
        try {
            // Intentar desencriptar el folio
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
            $modelo = new m_caracterizacion_hogar_p3();
            $caracterizacionHogar = $modelo->m_obtenerCaracterizacionHogar($folioDesencriptado, $idintegrante);
            
            // Obtener las respuestas si existen
            $respuestas = null;
            if ($caracterizacionHogar && isset($caracterizacionHogar->salud_mental_p3)) {
                $respuestas = json_decode($caracterizacionHogar->salud_mental_p3, true);
            }

            // Obtener los diagnósticos si existen
            $diagnosticos = null;
            if ($caracterizacionHogar && isset($caracterizacionHogar->cualdiagnostico_salud_mental_p3_1)) {
                $diagnosticos = json_decode($caracterizacionHogar->cualdiagnostico_salud_mental_p3_1, true);
            }
            
            // Obtener respuestas de la pregunta 3.2 si existen
            $respuestaP3_2 = null;
            if ($caracterizacionHogar && isset($caracterizacionHogar->acedio_servicios_salud_mental_p3_2)) {
                $respuestaP3_2 = json_decode($caracterizacionHogar->acedio_servicios_salud_mental_p3_2, true);
            }
            
            // Verificar si existe respuesta para la pregunta 2
            $pregunta2Respondida = false;
            $respuestaPregunta2 = DB::table('t1_caracterizacion_hogar_ffes')
                ->where('folio', $folioDesencriptado)
                ->where('idintegrante', $idintegrante)
                ->whereNotNull('nino_medidas_restablecimiento_p2')
                ->first();
            
            if ($respuestaPregunta2 && $respuestaPregunta2->nino_medidas_restablecimiento_p2 != null) {
                $pregunta2Respondida = true;
            }
            
            return view('ffes.v_caracterizacion_hogar_p3', [
                'folio' => $folioDesencriptado,
                'idintegrante' => $idintegrante,
                'datosIntegrante' => $datosIntegrante,
                'respuestas' => $respuestas,
                'diagnosticos' => $diagnosticos,
                'respuestaP3_2' => $respuestaP3_2,
                'pregunta2Respondida' => $pregunta2Respondida
            ]);
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al cargar la información: ' . $e->getMessage());
        }
    }
    
    // Método para guardar la caracterización
    public function fc_guardar_caracterizacion_hogar_p3(Request $request)
    {
        try {
            // Obtener datos del formulario
            $folio = $request->input('folio');
            $idintegrante = $request->input('idintegrante');
            $respuesta = $request->input('respuesta');
            
            // Log para depuración
            Log::info('Datos recibidos:', [
                'folio' => $folio,
                'idintegrante' => $idintegrante,
                'respuesta' => $respuesta,
                'respuesta3_2' => $request->input('respuesta3_2'),
                'integrantes3_2' => $request->input('integrantes3_2'),
                'completo' => $request->all()
            ]);
            
            // Validar datos requeridos
            if (empty($folio) || empty($idintegrante) || $respuesta === null) {
                return response()->json([
                    'success' => false,
                    'message' => 'Faltan datos requeridos'
                ]);
            }
            
            // Preparar el array para guardar las respuestas
            $respuestasData = [];
            
            if ($respuesta == '1') {
                // Si la respuesta es SI
                $integrantes = $request->input('integrantes', []);
                
                // Validar que se hayan seleccionado integrantes
                if (empty($integrantes)) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Si la respuesta es SI, debe seleccionar al menos un integrante'
                    ]);
                }
                
                $respuestasData = [
                    [
                        'id' => '1',
                        'valor' => 'SI',
                        'idintegrante' => $integrantes
                    ],
                    [
                        'id' => '0',
                        'valor' => 'NO',
                        'idintegrante' => []
                    ]
                ];
                
                // Si la respuesta es SI, procesar los diagnósticos (pregunta 3.1)
                $diagnosticosData = [];
                $diagnosticosRequest = $request->input('diagnosticos', []);
                
                if (!empty($diagnosticosRequest)) {
                    // Usar los diagnósticos enviados desde el frontend
                    $diagnosticosData = $diagnosticosRequest;
                    
                    // Verificar que cada diagnóstico tenga el formato correcto
                    foreach ($diagnosticosData as &$diagnostico) {
                        // Asegurarse de que cada diagnóstico tenga id, valor e idintegrante
                        if (!isset($diagnostico['id'])) {
                            $diagnostico['id'] = '0';
                        }
                        
                        if (!isset($diagnostico['valor'])) {
                            $diagnostico['valor'] = 'NO';
                        }
                        
                        if (!isset($diagnostico['idintegrante']) || !is_array($diagnostico['idintegrante'])) {
                            $diagnostico['idintegrante'] = [];
                        }
                        
                        // Si el valor es SI pero no hay integrantes, convertir a NO
                        if ($diagnostico['valor'] === 'SI' && empty($diagnostico['idintegrante'])) {
                            $diagnostico['valor'] = 'NO';
                        }
                        
                        // Asegurarse de que solo los integrantes seleccionados en la pregunta 3 estén presentes
                        if ($diagnostico['valor'] === 'SI' && !empty($diagnostico['idintegrante'])) {
                            $diagnostico['idintegrante'] = array_values(array_intersect($diagnostico['idintegrante'], $integrantes));
                        }
                    }
                } else {
                    // Si no se envió diagnósticos pero la respuesta es SI, establecer todos como NO
                    $diagnosticosIds = ['43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56'];
                    foreach ($diagnosticosIds as $id) {
                        $diagnosticosData[] = [
                            'id' => $id,
                            'valor' => 'NO',
                            'idintegrante' => []
                        ];
                    }
                }
                
                // Convertir a JSON los diagnósticos
                $diagnosticosJson = json_encode($diagnosticosData);
                
                // Log para depuración
                Log::info('Diagnósticos a guardar:', [
                    'data' => $diagnosticosData,
                    'json' => $diagnosticosJson
                ]);
                
                // Procesar la pregunta 3.2
                $respuesta3_2Data = [];
                $respuesta3_2Request = $request->input('respuesta3_2', []);
                
                // Log para depuración de la entrada de la pregunta 3.2
                Log::info('Datos de respuesta3_2 recibidos:', [
                    'respuesta3_2' => $respuesta3_2Request
                ]);
                
                if (!empty($respuesta3_2Request)) {
                    // Usar los datos enviados desde el frontend
                    $respuesta3_2Data = $respuesta3_2Request;
                    
                    // Verificar que los datos tengan el formato correcto
                    foreach ($respuesta3_2Data as &$resp) {
                        if (!isset($resp['id'])) {
                            $resp['id'] = '0';
                        }
                        
                        if (!isset($resp['valor'])) {
                            $resp['valor'] = 'NO';
                        }
                        
                        if (!isset($resp['idintegrante']) || !is_array($resp['idintegrante'])) {
                            $resp['idintegrante'] = [];
                        }
                        
                        // Asegurarse de que solo los integrantes seleccionados en la pregunta 3 estén presentes
                        if ($resp['valor'] === 'SI' && !empty($resp['idintegrante'])) {
                            $resp['idintegrante'] = array_values(array_intersect($resp['idintegrante'], $integrantes));
                        }
                    }
                } else {
                    // Procesar la pregunta 3.2 como se hacía anteriormente
                    $respuesta3_2 = $request->input('respuesta3_2');
                    
                    if ($respuesta3_2 == '1') {
                        // Si la respuesta es SI, obtener los integrantes seleccionados
                        $integrantes3_2 = $request->input('integrantes3_2', []);
                        
                        // Validar que se hayan seleccionado integrantes
                        if (empty($integrantes3_2)) {
                            return response()->json([
                                'success' => false,
                                'message' => 'Si la respuesta en la pregunta 3.2 es SI, debe seleccionar al menos un integrante'
                            ]);
                        }
                        
                        $respuesta3_2Data = [
                            [
                                'id' => '1',
                                'valor' => 'SI',
                                'idintegrante' => $integrantes3_2
                            ],
                            [
                                'id' => '0',
                                'valor' => 'NO',
                                'idintegrante' => []
                            ]
                        ];
                    } else if ($respuesta3_2 == '0') {
                        // Si la respuesta es NO
                        $respuesta3_2Data = [
                            [
                                'id' => '1',
                                'valor' => 'NO',
                                'idintegrante' => []
                            ],
                            [
                                'id' => '0',
                                'valor' => 'SI',
                                'idintegrante' => []
                            ]
                        ];
                    } else {
                        // Si no se seleccionó respuesta (no debería ocurrir por la validación en el frontend)
                        $respuesta3_2Data = [
                            [
                                'id' => '1',
                                'valor' => 'NO',
                                'idintegrante' => []
                            ],
                            [
                                'id' => '0',
                                'valor' => 'SI',
                                'idintegrante' => []
                            ]
                        ];
                    }
                }
                
                // Convertir a JSON la respuesta 3.2
                $respuesta3_2Json = json_encode($respuesta3_2Data);
                
                // Log para depuración de la pregunta 3.2
                Log::info('Respuesta 3.2 a guardar:', [
                    'data' => $respuesta3_2Data,
                    'json' => $respuesta3_2Json
                ]);
            } else {
                // Si la respuesta es NO
                $respuestasData = [
                    [
                        'id' => '1',
                        'valor' => 'NO',
                        'idintegrante' => []
                    ],
                    [
                        'id' => '0',
                        'valor' => 'SI',
                        'idintegrante' => []
                    ]
                ];
                
                // Si la respuesta es NO, establecer todos los diagnósticos como NO
                $diagnosticosIds = ['43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56'];
                $diagnosticosData = [];
                
                foreach ($diagnosticosIds as $id) {
                    $diagnosticosData[] = [
                        'id' => $id,
                        'valor' => 'NO',
                        'idintegrante' => []
                    ];
                }
                
                // Convertir a JSON los diagnósticos
                $diagnosticosJson = json_encode($diagnosticosData);
                
                // Para la pregunta 3.2, establecer como NO cuando la pregunta 3 es NO
                $respuesta3_2Data = [
                    [
                        'id' => '1',
                        'valor' => 'NO',
                        'idintegrante' => []
                    ],
                    [
                        'id' => '0',
                        'valor' => 'SI',
                        'idintegrante' => []
                    ]
                ];
                $respuesta3_2Json = json_encode($respuesta3_2Data);
            }
            
            // Convertir a JSON el array de respuestas
            $respuestasJson = json_encode($respuestasData);
            
            // Guardar en la base de datos
            $modelo = new m_caracterizacion_hogar_p3();
            
            // Verificar si ya existe un registro para actualizar
            $documento_profesional = auth()->user()->documento ?? '0';
            
            // Guardar en la base de datos manteniendo los valores existentes para otras columnas
            $resultado = $modelo->m_guardarCaracterizacionHogar([
                'folio' => $folio,
                'idintegrante' => $idintegrante,
                'documento_profesional' => $documento_profesional,
                'salud_mental_p3' => $respuestasJson,
                'cualdiagnostico_salud_mental_p3_1' => $diagnosticosJson,
                'acedio_servicios_salud_mental_p3_2' => $respuesta3_2Json
            ]);
            
            // Log para depuración
            Log::info('Resultado guardado:', [
                'folio' => $folio,
                'salud_mental_p3' => $respuestasJson,
                'cualdiagnostico_salud_mental_p3_1' => $diagnosticosJson,
                'acedio_servicios_salud_mental_p3_2' => $respuesta3_2Json,
                'resultado' => $resultado
            ]);
            
            return response()->json([
                'success' => true,
                'message' => 'Caracterización guardada exitosamente'
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al guardar la caracterización: ' . $e->getMessage()
            ]);
        }
    }
    
    // Método para obtener integrantes menores
    public function fc_obtener_integrantes_menores($folio)
    {
        try {
            $modelo = new m_caracterizacion_hogar_p3();
            $integrantesMenores = $modelo->m_obtenerIntegrantesMenores($folio);
            
            if ($integrantesMenores->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => 'No se encontraron integrantes menores de edad'
                ]);
            }
            
            return response()->json([
                'success' => true,
                'integrantes' => $integrantesMenores
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener los integrantes: ' . $e->getMessage()
            ]);
        }
    }
}
