<?php

namespace App\Models\ffes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class m_caracterizacion_hogar_p4 extends Model
{
    use HasFactory;

    protected $table = 't1_caracterizacion_hogar_ffes';
    
    // Método para obtener respuesta existente
    public function m_obtenerCaracterizacionHogar($folio, $idintegrante)
    {
        // Buscar registro existente
        $resultado = DB::table($this->table)
            ->where('folio', $folio)
            ->where('idintegrante', $idintegrante)
            ->first();
            
        return $resultado;
    }
    
    // Método para guardar respuesta (nuevo registro)
    public function m_guardarCaracterizacionHogar($datos)
    {
        $insertData = [
            'folio' => $datos['folio'],
            'idintegrante' => $datos['idintegrante'],
            'documento_profesional' => $datos['documento_profesional'],
            'estado' => 1,
            'sincro' => 0,
            'created_at' => now(),
            'updated_at' => now(),
            // Valores predeterminados para todas las columnas JSON
            'situacionesriesgo_hogar_p1' => isset($datos['situacionesriesgo_hogar_p1']) ? $datos['situacionesriesgo_hogar_p1'] : json_encode([]),
            'nino_medidas_restablecimiento_p2' => isset($datos['nino_medidas_restablecimiento_p2']) ? $datos['nino_medidas_restablecimiento_p2'] : json_encode([]),
            'cuales_medidas_restablecimiento_p2_1' => isset($datos['cuales_medidas_restablecimiento_p2_1']) ? $datos['cuales_medidas_restablecimiento_p2_1'] : json_encode([]),
            'salud_mental_p3' => isset($datos['salud_mental_p3']) ? $datos['salud_mental_p3'] : json_encode([]),
            'cualdiagnostico_salud_mental_p3_1' => isset($datos['cualdiagnostico_salud_mental_p3_1']) ? $datos['cualdiagnostico_salud_mental_p3_1'] : json_encode([]),
            'acedio_servicios_salud_mental_p3_2' => isset($datos['acedio_servicios_salud_mental_p3_2']) ? $datos['acedio_servicios_salud_mental_p3_2'] : json_encode([]),
            'hace_parte_instancia_participacion_p4' => isset($datos['hace_parte_instancia_participacion_p4']) ? $datos['hace_parte_instancia_participacion_p4'] : json_encode([])
        ];
        
        Log::info('Insertando nuevo registro en ' . $this->table, [
            'folio' => $datos['folio'],
            'idintegrante' => $datos['idintegrante']
        ]);

        return DB::table($this->table)->insert($insertData);
    }
    
    // Método para actualizar solo la columna de la pregunta 4
    public function m_actualizarColumnasPregunta4($datos)
    {
        $updateData = [
            'documento_profesional' => $datos['documento_profesional'],
            'hace_parte_instancia_participacion_p4' => $datos['hace_parte_instancia_participacion_p4'],
            'estado' => 1,
            'sincro' => 0,
            'updated_at' => now()
        ];
        
        Log::info('Actualizando columnas específicas P4 en ' . $this->table, [
            'folio' => $datos['folio'],
            'idintegrante' => $datos['idintegrante']
        ]);

        return DB::table($this->table)
            ->where('folio', $datos['folio'])
            ->where('idintegrante', $datos['idintegrante'])
            ->update($updateData);
    }
    
    // Método para actualizar respuesta existente (todas las columnas)
    public function m_actualizarCaracterizacionHogar($datos)
    {
        Log::info('Actualizando registro en ' . $this->table, [
            'folio' => $datos['folio'],
            'idintegrante' => $datos['idintegrante']
        ]);
        
        // Para evitar problemas con otros formularios, usamos el método específico
        return $this->m_actualizarColumnasPregunta4($datos);
    }
}
