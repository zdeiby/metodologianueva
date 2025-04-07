<?php

namespace App\Http\Controllers\ffes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ffes\m_caracterizacion_hogar_p3;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

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
            // Validar la petición
            $request->validate([
                'folio' => 'required',
                'idintegrante' => 'required',
            ]);
            
            // Obtener los datos del formulario
            $folio = $request->input('folio');
            $idintegrante = $request->input('idintegrante');
            $respuesta = $request->input('respuesta');
            
            // Validar que se haya seleccionado una respuesta
            if ($respuesta === null) {
                return response()->json([
                    'success' => false,
                    'message' => 'Debe seleccionar una respuesta'
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
            }
            
            // Convertir a JSON el array de respuestas
            $respuestasJson = json_encode($respuestasData);
            
            // Guardar en la base de datos
            $modelo = new m_caracterizacion_hogar_p3();
            
            // Verificar si ya existe un registro para actualizar
            $documento_profesional = auth()->user()->documento ?? '0';
            
            $modelo->m_guardarCaracterizacionHogar([
                'folio' => $folio,
                'idintegrante' => $idintegrante,
                'documento_profesional' => $documento_profesional,
                'salud_mental_p3' => $respuestasJson
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
