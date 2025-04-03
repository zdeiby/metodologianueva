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
            if ($caracterizacionHogar && isset($caracterizacionHogar->nino_medidas_restablecimiento_p2)) {
                $respuestas = json_decode($caracterizacionHogar->nino_medidas_restablecimiento_p2, true);
            }
            
            return view('ffes.v_caracterizacion_hogar_p2', [
                'folio' => $folioDesencriptado,
                'idintegrante' => $idintegrante,
                'datosIntegrante' => $datosIntegrante,
                'respuestas' => $respuestas
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
            
            // Determinar el valor y los integrantes según la respuesta seleccionada
            if ($respuesta == 1) {
                // Opción A: SI
                $integrantes = $request->input('integrantes', []);
                
                $respuestasData[] = [
                    'id' => "1",
                    'valor' => "SI",
                    'idintegrante' => $integrantes
                ];
            } else if ($respuesta == 41) {
                // Opción B: NO, PERO LO REQUIERE
                $integrantes = $request->input('integrantes', []);
                
                $respuestasData[] = [
                    'id' => "41",
                    'valor' => "NO, PERO LO REQUIERE",
                    'idintegrante' => $integrantes
                ];
            } else if ($respuesta == 36) {
                // Opción C: NO, NO LO HA REQUERIDO
                $respuestasData[] = [
                    'id' => "36",
                    'valor' => "NO, NO LO HA REQUERIDO",
                    'idintegrante' => []
                ];
            }
            
            // Guardar en la base de datos
            $modelo = new m_caracterizacion_hogar_p2();
            
            // Verificar si ya existe un registro para actualizar
            $caracterizacionExistente = $modelo->m_obtenerCaracterizacionHogar($folio, $idintegrante);
            
            // Preparar los datos para guardar (SOLO la columna nino_medidas_restablecimiento_p2)
            $datos = [
                'folio' => $folio,
                'idintegrante' => $idintegrante,
                'nino_medidas_restablecimiento_p2' => json_encode($respuestasData),
                'documento_profesional' => $documento_profesional
            ];
            
            // Actualizar o crear registro
            if ($caracterizacionExistente) {
                // Actualizar SOLO la columna específica sin afectar otras columnas
                $resultado = DB::table('t1_caracterizacion_hogar_ffes')
                    ->where('folio', $folio)
                    ->where('idintegrante', $idintegrante)
                    ->update([
                        'nino_medidas_restablecimiento_p2' => json_encode($respuestasData),
                        'documento_profesional' => $documento_profesional,
                        'updated_at' => now()
                    ]);
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
