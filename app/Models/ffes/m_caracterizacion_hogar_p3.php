<?php

namespace App\Models\ffes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_caracterizacion_hogar_p3 extends Model
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
        // Buscar registro existente
        $registro = DB::table($this->table)
            ->where('folio', $datos['folio'])
            ->where('idintegrante', $datos['idintegrante'])
            ->first();
        
        $updateData = [
            'salud_mental_p3' => $datos['salud_mental_p3'] ?? null,
            'cualdiagnostico_salud_mental_p3_1' => $datos['cualdiagnostico_salud_mental_p3_1'] ?? null,
            'acedio_servicios_salud_mental_p3_2' => $datos['acedio_servicios_salud_mental_p3_2'] ?? null,
            'updated_at' => now()
        ];
        
        // Si el registro existe, actualizarlo
        if ($registro) {
            return DB::table($this->table)
                ->where('folio', $datos['folio'])
                ->where('idintegrante', $datos['idintegrante'])
                ->update($updateData);
        } 
        // Si no existe, crear uno nuevo
        else {
            $insertData = [
                'folio' => $datos['folio'],
                'idintegrante' => $datos['idintegrante'],
                'documento_profesional' => $datos['documento_profesional'],
                'salud_mental_p3' => $datos['salud_mental_p3'] ?? null,
                'cualdiagnostico_salud_mental_p3_1' => $datos['cualdiagnostico_salud_mental_p3_1'] ?? null,
                'acedio_servicios_salud_mental_p3_2' => $datos['acedio_servicios_salud_mental_p3_2'] ?? null,
                'estado' => 1,
                'sincro' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ];
            
            return DB::table($this->table)->insert($insertData);
        }
    }
    
    // Método para obtener integrantes menores
    public function m_obtenerIntegrantesMenores($folio)
    {
        return DB::table('t1_integranteshogar')
            ->where('folio', $folio)
            ->where('edad', '<', 18)
            ->get();
    }
}
