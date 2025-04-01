<?php

namespace App\Models\ffes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_caracterizacion_hogar_p1 extends Model
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
        return DB::table($this->table)->insert([
            'folio' => $datos['folio'],
            'idintegrante' => $datos['idintegrante'],
            'respuestas' => $datos['respuestas'],
            'documento_profesional' => $datos['documento_profesional'],
            'estado' => 1,
            'sincro' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
    
    // Método para actualizar respuesta existente
    public function m_actualizarCaracterizacionHogar($datos)
    {
        return DB::table($this->table)
            ->where('folio', $datos['folio'])
            ->where('idintegrante', $datos['idintegrante'])
            ->update([
                'respuestas' => $datos['respuestas'],
                'documento_profesional' => $datos['documento_profesional'],
                'estado' => 1,
                'sincro' => 0,
                'updated_at' => now()
            ]);
    }
}
