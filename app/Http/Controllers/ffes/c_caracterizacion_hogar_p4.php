<?php

namespace App\Http\Controllers\ffes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;
use App\Models\ffes\m_caracterizacion_hogar_p4;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class c_caracterizacion_hogar_p4 extends Controller
{
    public function fc_caracterizacion_hogar_p4($folio, $idintegrante)
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
            $modelo = new m_caracterizacion_hogar_p4();
            $caracterizacionHogar = $modelo->m_obtenerCaracterizacionHogar($folioDesencriptado, $idintegrante);
            
            // Obtener las respuestas si existen
            $respuestas = null;
            if ($caracterizacionHogar && isset($caracterizacionHogar->hace_parte_instancia_participacion_p4)) {
                $respuestas = json_decode($caracterizacionHogar->hace_parte_instancia_participacion_p4, true);
            }
            
            // Verificar si existe respuesta para la pregunta 1
            $pregunta1Respondida = false;
            $respuestaPregunta1 = DB::table('t1_caracterizacion_hogar_ffes')
                ->where('folio', $folioDesencriptado)
                ->where('idintegrante', $idintegrante)
                ->first();
            
            if ($respuestaPregunta1 && isset($respuestaPregunta1->situacionesriesgo_hogar_p1) 
                && $respuestaPregunta1->situacionesriesgo_hogar_p1 != null 
                && $respuestaPregunta1->situacionesriesgo_hogar_p1 != '[]' 
                && $respuestaPregunta1->situacionesriesgo_hogar_p1 != '""' 
                && $respuestaPregunta1->situacionesriesgo_hogar_p1 != '') {
                // Verificar que el JSON realmente tenga contenido
                $jsonData = json_decode($respuestaPregunta1->situacionesriesgo_hogar_p1, true);
                if ($jsonData && !empty($jsonData)) {
                    $pregunta1Respondida = true;
                }
            }
            
            // Verificar si existe respuesta para la pregunta 2
            $pregunta2Respondida = false;
            $respuestaPregunta2 = DB::table('t1_caracterizacion_hogar_ffes')
                ->where('folio', $folioDesencriptado)
                ->where('idintegrante', $idintegrante)
                ->first();
            
            if ($respuestaPregunta2 && isset($respuestaPregunta2->nino_medidas_restablecimiento_p2) 
                && $respuestaPregunta2->nino_medidas_restablecimiento_p2 != null 
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
                ->where('idintegrante', $idintegrante)
                ->first();
            
            if ($respuestaPregunta3 && isset($respuestaPregunta3->salud_mental_p3) 
                && $respuestaPregunta3->salud_mental_p3 != null 
                && $respuestaPregunta3->salud_mental_p3 != '[]' 
                && $respuestaPregunta3->salud_mental_p3 != '""' 
                && $respuestaPregunta3->salud_mental_p3 != '') {
                // Verificar que el JSON realmente tenga contenido
                $jsonData = json_decode($respuestaPregunta3->salud_mental_p3, true);
                if ($jsonData && !empty($jsonData)) {
                    $pregunta3Respondida = true;
                }
            }
            
            // Redireccionar a la pregunta 3 si no se ha respondido
            if (!$pregunta3Respondida) {
                return redirect()->route('caracterizacion_hogar_p3', [
                    'folio' => $folio,
                    'idintegrante' => $idintegrante
                ])->with('warning', 'Primero debe completar la pregunta 3 antes de avanzar a la pregunta 4.');
            }
            
            // Lógica de visibilidad de pestañas (progresiva)
            $mostrarPregunta1 = true; // Siempre se puede volver a la pregunta 1
            $mostrarPregunta2 = true; // En la página 4, siempre puedes volver a la 2
            $mostrarPregunta3 = true; // En la página 4, siempre puedes volver a la 3
            
            return view('ffes.v_caracterizacion_hogar_p4', [
                'folio' => $folioDesencriptado,
                'idintegrante' => $idintegrante,
                'datosIntegrante' => $datosIntegrante,
                'respuestas' => $respuestas,
                'pregunta1Respondida' => $pregunta1Respondida,
                'pregunta2Respondida' => $pregunta2Respondida,
                'pregunta3Respondida' => $pregunta3Respondida,
                'mostrarPregunta1' => $mostrarPregunta1,
                'mostrarPregunta2' => $mostrarPregunta2,
                'mostrarPregunta3' => $mostrarPregunta3
            ]);
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al cargar la información: ' . $e->getMessage());
        }
    }
    
    public function fc_guardar_caracterizacion_hogar_p4(Request $request)
    {
        try {
            $folio = $request->input('folio');
            $idintegrante = $request->input('idintegrante');
            $documento_profesional = $request->input('documento_profesional');
            
            Log::info('Guardando caracterización hogar P4', [
                'folio' => $folio,
                'idintegrante' => $idintegrante,
                'request' => $request->all()
            ]);
            
            // Verificar si se seleccionó "Ninguna de las anteriores"
            $ningunaSeleccionada = $request->has('situacionJ');
            
            // Mapeo de letras a IDs
            $mapeoInstancias = [
                'A' => '57', // Grupos juveniles, organizaciones infantiles...
                'B' => '58', // Grupos culturales
                'C' => '59', // Grupos deportivos
                'D' => '60', // Juntas de Accion Comunal o alguno de sus comités
                'E' => '61', // Consejo Municipal de Juventud y/o plataforma municipal de juventud
                'F' => '62', // Consejos y mesas de participación de Niños, Niñas y adolescentes (Unidad de Niñez)
                'G' => '63', // Semilleros de participación ciudadana, presupuesto participativo
                'H' => '64', // Personerías y gobiernos escolares
                'I' => '65', // Voluntariados
                'J' => '35'  // Ninguna de las anteriores
            ];
            
            // Inicializar el array de respuestas en el formato esperado
            $respuestasData = [];
            
            if ($ningunaSeleccionada) {
                // Si se seleccionó "Ninguna de las anteriores"
                
                // Agregar "Ninguna de las anteriores" con valor "SI"
                $respuestasData[] = [
                    'id' => (string)$mapeoInstancias['J'],
                    'valor' => 'SI',
                    'idintegrante' => []
                ];
                
                // Agregar todas las demás instancias con valor "NO"
                foreach (['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'] as $instancia) {
                    $respuestasData[] = [
                        'id' => (string)$mapeoInstancias[$instancia],
                        'valor' => 'NO',
                        'idintegrante' => []
                    ];
                }
            } else {
                // Procesar instancias normales (A-I) y sus integrantes
                $integrantes = $request->input('integrantes', []);
                
                // Agregar "Ninguna de las anteriores" con valor "NO"
                $respuestasData[] = [
                    'id' => (string)$mapeoInstancias['J'],
                    'valor' => 'NO',
                    'idintegrante' => []
                ];
                
                // Para cada instancia, crear un objeto en el formato esperado
                foreach (['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'] as $instancia) {
                    if (isset($integrantes[$instancia]) && !empty($integrantes[$instancia])) {
                        // Si está seleccionada, valor "SI" y agregar integrantes
                        $respuestasData[] = [
                            'id' => (string)$mapeoInstancias[$instancia],
                            'valor' => 'SI',
                            'idintegrante' => $integrantes[$instancia]
                        ];
                    } else {
                        // Si no está seleccionada, valor "NO" y sin integrantes
                        $respuestasData[] = [
                            'id' => (string)$mapeoInstancias[$instancia],
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
                'hace_parte_instancia_participacion_p4' => json_encode($respuestasData),
                'documento_profesional' => $documento_profesional
            ];
            
            Log::info('Datos preparados para guardar en P4', [
                'datos' => $datos
            ]);
            
            // Guardar en la base de datos
            $modelo = new m_caracterizacion_hogar_p4();
            
            // Verificar si ya existe un registro para actualizar o crear uno nuevo
            $caracterizacionExistente = $modelo->m_obtenerCaracterizacionHogar($folio, $idintegrante);
            
            if ($caracterizacionExistente) {
                // Actualizar solo las columnas específicas de la pregunta 4
                $resultado = $modelo->m_actualizarColumnasPregunta4($datos);
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
            Log::error('Error al guardar caracterización hogar P4', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }
    
    // Método para obtener integrantes menores de 18 años
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
                ->select('idintegrante', 'nombre1', 'nombre2', 'apellido1', 'apellido2', 'edad')
                ->where('folio', $folioDesencriptado)
                ->where('edad', '<', 18)
                ->where('estado', 1)
                ->get();
                
            if ($integrantes->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => 'No se encontraron integrantes menores de 18 años para el folio especificado'
                ]);
            }
            
            return response()->json([
                'success' => true,
                'integrantes' => $integrantes
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener integrantes menores: ' . $e->getMessage()
            ], 500);
        }
    }
}
