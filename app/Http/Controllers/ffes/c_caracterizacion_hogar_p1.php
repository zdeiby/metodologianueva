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
            $modelo = new m_caracterizacion_hogar_p1();
            $caracterizacionHogar = $modelo->m_obtenerCaracterizacionHogar($folioDesencriptado, $idintegrante);
            
            // Obtener las respuestas si existen
            $respuestas = null;
            if ($caracterizacionHogar && isset($caracterizacionHogar->respuestas)) {
                $respuestas = json_decode($caracterizacionHogar->respuestas, true);
            }
            
            return view('ffes.v_caracterizacion_hogar_p1', [
                'folio' => $folioDesencriptado,
                'idintegrante' => $idintegrante,
                'datosIntegrante' => $datosIntegrante,
                'respuestas' => $respuestas
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
            
            // Obtener datos de las situaciones seleccionadas
            $situaciones = [];
            $integrantes = [];
            
            if ($ningunaSeleccionada) {
                // Si se seleccionó "Ninguna de las anteriores", solo guardar esa opción
                $situaciones = ['K'];
                // No hay integrantes afectados cuando se selecciona "Ninguna de las anteriores"
            } else {
                // Procesar situaciones normales (A-J) y sus integrantes
                $integrantes = $request->input('integrantes', []);
                
                // Determinar qué situaciones fueron seleccionadas basado en los integrantes
                foreach (['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'] as $situacion) {
                    if (isset($integrantes[$situacion]) && !empty($integrantes[$situacion])) {
                        $situaciones[] = $situacion;
                    }
                }
            }
            
            // Estructura de respuestas en formato para JSON
            $respuestasData = [
                'pregunta1' => [
                    'situaciones' => $situaciones,
                    'integrantes' => $integrantes
                ]
            ];
            
            // Preparar los datos para guardar
            $datos = [
                'folio' => $folio,
                'idintegrante' => $idintegrante,
                'respuestas' => json_encode($respuestasData),
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
