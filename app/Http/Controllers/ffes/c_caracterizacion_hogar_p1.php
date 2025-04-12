<?php

namespace App\Http\Controllers\ffes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;
use App\Models\ffes\m_caracterizacion_hogar_p1;
use Illuminate\Support\Facades\Crypt;

class c_caracterizacion_hogar_p1 extends Controller
{
    public function fc_caracterizacion_hogar_p1($folio, $idintegrante)
    {
        try {
            // Desencriptar el folio si es necesario
            $hashids = new Hashids('', 10);
            $decodedFolio = $hashids->decode($folio)[0];
            $decodedidintegrante = $hashids->decode($idintegrante)[0];
            $folioDesencriptado = $decodedFolio;
            try {
                $folioDesencriptado = $folioDesencriptado;
            } catch (\Exception $e) {
                // Si hay error en la desencriptación, usar el valor original
                $folioDesencriptado = $folioDesencriptado;
            }
            
            // Obtener datos del integrante
            $datosIntegrante = DB::table('t1_integranteshogar')
                ->where('folio', $folioDesencriptado)
                ->where('idintegrante', $decodedidintegrante)
                ->first();
                
            if (!$datosIntegrante) {
                return redirect()->route('caracterizacion_integrantes', [
                    'folio' => $decodedFolio,
                    'idintegrante' => $decodedidintegrante
                ])->with('error', 'No se encontró ningún integrante con el folio especificado: ' . $folioDesencriptado);
            }
            
            // Obtener datos de caracterización de hogar si existen
            $modelo = new m_caracterizacion_hogar_p1();
            $caracterizacionHogar = $modelo->m_obtenerCaracterizacionHogar($folioDesencriptado, $decodedidintegrante);
            
            // Obtener las respuestas si existen
            $respuestas = null;
            if ($caracterizacionHogar && isset($caracterizacionHogar->situacionesriesgo_hogar_p1)) {
                $respuestas = json_decode($caracterizacionHogar->situacionesriesgo_hogar_p1, true);
            }
            
            // Verificar si existe respuesta para la pregunta 2 (consulta directa)
            $pregunta2Respondida = false;
            $respuestaPregunta2 = DB::table('t1_caracterizacion_hogar_ffes')
                ->where('folio', $folioDesencriptado)
                ->where('idintegrante', $decodedidintegrante)
                ->first();
            
            if ($respuestaPregunta2 && $respuestaPregunta2->nino_medidas_restablecimiento_p2 != null 
                && $respuestaPregunta2->nino_medidas_restablecimiento_p2 != '[]' 
                && $respuestaPregunta2->nino_medidas_restablecimiento_p2 != '""' 
                && $respuestaPregunta2->nino_medidas_restablecimiento_p2 != '') {
                // Verificar que el JSON realmente tenga contenido
                $jsonData = json_decode($respuestaPregunta2->nino_medidas_restablecimiento_p2, true);
                if ($jsonData && !empty($jsonData)) {
                    $pregunta2Respondida = true;
                }
            }
            
            // Verificar si existe respuesta para la pregunta 3
            $pregunta3Respondida = false;
            $respuestaPregunta3 = DB::table('t1_caracterizacion_hogar_ffes')
                ->where('folio', $folioDesencriptado)
                ->where('idintegrante', $decodedidintegrante)
                ->first();
            
            if ($respuestaPregunta3 && $respuestaPregunta3->salud_mental_p3 != null 
                && $respuestaPregunta3->salud_mental_p3 != '[]' 
                && $respuestaPregunta3->salud_mental_p3 != '""' 
                && $respuestaPregunta3->salud_mental_p3 != '') {
                // Verificar que el JSON realmente tenga contenido
                $jsonData = json_decode($respuestaPregunta3->salud_mental_p3, true);
                if ($jsonData && !empty($jsonData)) {
                    $pregunta3Respondida = true;
                }
            }
            
            // Verificar si existe respuesta para la pregunta 4
            $pregunta4Respondida = false;
            $respuestaPregunta4 = DB::table('t1_caracterizacion_hogar_ffes')
                ->where('folio', $folioDesencriptado)
                ->where('idintegrante', $decodedidintegrante)
                ->first();
            
            if ($respuestaPregunta4 && $respuestaPregunta4->hace_parte_instancia_participacion_p4 != null 
                && $respuestaPregunta4->hace_parte_instancia_participacion_p4 != '[]' 
                && $respuestaPregunta4->hace_parte_instancia_participacion_p4 != '""' 
                && $respuestaPregunta4->hace_parte_instancia_participacion_p4 != '') {
                // Verificar que el JSON realmente tenga contenido
                $jsonData = json_decode($respuestaPregunta4->hace_parte_instancia_participacion_p4, true);
                if ($jsonData && !empty($jsonData)) {
                    $pregunta4Respondida = true;
                }
            }
            
            // Verificar si la pregunta 1 está respondida
            $pregunta1Respondida = false;
            if ($caracterizacionHogar && isset($caracterizacionHogar->situacionesriesgo_hogar_p1) 
                && $caracterizacionHogar->situacionesriesgo_hogar_p1 != null 
                && $caracterizacionHogar->situacionesriesgo_hogar_p1 != '[]' 
                && $caracterizacionHogar->situacionesriesgo_hogar_p1 != '""' 
                && $caracterizacionHogar->situacionesriesgo_hogar_p1 != '') {
                // Verificar que el JSON realmente tenga contenido
                $jsonData = json_decode($caracterizacionHogar->situacionesriesgo_hogar_p1, true);
                if ($jsonData && !empty($jsonData)) {
                    $pregunta1Respondida = true;
                }
            }
            
            // Lógica de visibilidad de pestañas (progresiva)
            $mostrarPregunta2 = $pregunta1Respondida;
            $mostrarPregunta3 = $pregunta2Respondida;
            $mostrarPregunta4 = $pregunta3Respondida;
            
            return view('ffes.v_caracterizacion_hogar_p1', [
                'folio' => $decodedFolio,
                'foliourl'=>$folio,
                'idintegranteurl'=>$idintegrante,
                'idintegrante' => $decodedidintegrante,
                'datosIntegrante' => $datosIntegrante,
                'respuestas' => $respuestas,
                'pregunta1Respondida' => $pregunta1Respondida,
                'pregunta2Respondida' => $pregunta2Respondida,
                'pregunta3Respondida' => $pregunta3Respondida,
                'pregunta4Respondida' => $pregunta4Respondida,
                'mostrarPregunta2' => $mostrarPregunta2,
                'mostrarPregunta3' => $mostrarPregunta3,
                'mostrarPregunta4' => $mostrarPregunta4
            ]);
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al cargar la información: ' . $e->getMessage());
        }
    }
    
    public function fc_guardar_caracterizacion_hogar_p1(Request $request)
    {
        try {
            $folio = $request->input('folio');
            $idintegrante = $request->input('idintegrante');
            $documento_profesional = $request->input('documento_profesional');
            
            // Verificar si se seleccionó "Ninguna de las anteriores"
            $ningunaSeleccionada = $request->has('situacionK');
            
            // Mapeo de letras a IDs
            $mapeoSituaciones = [
                'A' => 25, // Abandono y falta de padres
                'B' => 26, // Acoso escolar o bullying
                'C' => 27, // Reclutamiento forzado y utilización en conflicto armado
                'D' => 28, // Ciber acoso
                'E' => 29, // Amenazas o presión grupal
                'F' => 30, // Tráfico y comercialización de sustancias
                'G' => 31, // Matrimonio infantil
                'H' => 32, // Conducta suicida o riesgo de suicidio infantil
                'I' => 33, // Otras conductas delictivas como hurto por fuera del hogar, extorción, intento de homicidio
                'J' => 34, // Barrera culturales y lingüisticas (población indigena)
                'K' => 35  // Ninguna de las anteriores
            ];
            
            // Inicializar el array de respuestas en el nuevo formato
            $respuestasData = [];
            
            if ($ningunaSeleccionada) {
                // Si se seleccionó "Ninguna de las anteriores"
                
                // Agregar "Ninguna de las anteriores" con valor "SI"
                $respuestasData[] = [
                    'id' => (string)$mapeoSituaciones['K'],
                    'valor' => 'SI',
                    'idintegrante' => []
                ];
                
                // Agregar todas las demás situaciones con valor "NO"
                foreach (['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'] as $situacion) {
                    $respuestasData[] = [
                        'id' => (string)$mapeoSituaciones[$situacion],
                        'valor' => 'NO',
                        'idintegrante' => []
                    ];
                }
            } else {
                // Procesar situaciones normales (A-J) y sus integrantes
                $integrantes = $request->input('integrantes', []);
                
                // Agregar "Ninguna de las anteriores" con valor "NO"
                $respuestasData[] = [
                    'id' => (string)$mapeoSituaciones['K'],
                    'valor' => 'NO',
                    'idintegrante' => []
                ];
                
                // Para cada situación, crear un objeto en el formato esperado
                foreach (['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'] as $situacion) {
                    if (isset($integrantes[$situacion]) && !empty($integrantes[$situacion])) {
                        // Si está seleccionada, valor "SI" y agregar integrantes
                        $respuestasData[] = [
                            'id' => (string)$mapeoSituaciones[$situacion],
                            'valor' => 'SI',
                            'idintegrante' => $integrantes[$situacion]
                        ];
                    } else {
                        // Si no está seleccionada, valor "NO" y sin integrantes
                        $respuestasData[] = [
                            'id' => (string)$mapeoSituaciones[$situacion],
                            'valor' => 'NO',
                            'idintegrante' => []
                        ];
                    }
                }
            }
            
            // Preparar los datos para guardar
            $datos = [
                'folio' => $folio,
                'idintegrante' => $idintegrante,
                'situacionesriesgo_hogar_p1' => json_encode($respuestasData),
                'documento_profesional' => $documento_profesional
            ];
            
            // Guardar en la base de datos
            $modelo = new m_caracterizacion_hogar_p1();
            
            // Verificar si ya existe un registro para actualizar o crear uno nuevo
            $caracterizacionExistente = $modelo->m_obtenerCaracterizacionHogar($folio, $idintegrante);
            
            if ($caracterizacionExistente) {
                // Actualizar registro existente
                $resultado = $modelo->m_actualizarCaracterizacionHogar($datos);
            } else {
                // Crear nuevo registro
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
                    'message' => 'Error al guardar los datos'
                ]);
            }
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
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
            
            // Obtener integrantes menores de 18 años
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
