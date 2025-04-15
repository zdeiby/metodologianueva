<?php

namespace App\Models\ffes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_caracterizacion_hogar_p1 extends Model
{
    use HasFactory;

    protected $table = 't1_caracterizacion_hogar_ffes';
    public $incrementing = false;
    protected $primaryKey = ['folio', 'idintegrante'];
    public $timestamps = true;
    
    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('folio', '=', $this->getAttribute('folio'))
            ->where('idintegrante', '=', $this->getAttribute('idintegrante'));
        return $query;
    }
    
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
    
    // Método para eliminar respuesta existente
    public function m_eliminarCaracterizacionHogar($folio, $idintegrante)
    {
        return DB::table($this->table)
            ->where('folio', $folio)
            ->where('idintegrante', $idintegrante)
            ->delete();
    }
    
    // Método para guardar respuesta
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
            // Solo guardar los campos de la pregunta 1
            'situacionesriesgo_hogar_p1' => $datos['situacionesriesgo_hogar_p1'],
            // Campos JSON de otras preguntas como arrays vacíos
            'nino_medidas_restablecimiento_p2' => '[]',
            'cuales_medidas_restablecimiento_p2_1' => '[]',
            'salud_mental_p3' => '[]',
            'cualdiagnostico_salud_mental_p3_1' => '[]',
            'acedio_servicios_salud_mental_p3_2' => '[]',
            'hace_parte_instancia_participacion_p4' => '[]'
        ];
        
        return DB::table($this->table)->insert($insertData);
    }
    
    // Método para actualizar respuesta existente
    public function m_actualizarCaracterizacionHogar($datos)
    {
        $updateData = [
            'documento_profesional' => $datos['documento_profesional'],
            'estado' => 1,
            'sincro' => 0,
            'updated_at' => now()
        ];
        
        // Añadir solo los campos que vienen en los datos
        if (isset($datos['situacionesriesgo_hogar_p1'])) {
            $updateData['situacionesriesgo_hogar_p1'] = $datos['situacionesriesgo_hogar_p1'];
        }
        
        return DB::table($this->table)
            ->where('folio', $datos['folio'])
            ->where('idintegrante', $datos['idintegrante'])
            ->update($updateData);
    }
}
