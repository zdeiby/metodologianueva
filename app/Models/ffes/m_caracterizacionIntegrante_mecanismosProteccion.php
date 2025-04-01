<?php

namespace App\Models\ffes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_caracterizacionIntegrante_mecanismosProteccion extends Model
{
    use HasFactory;

    protected $table = 't1_caracterizacionIntegrante_conoce_instituciones';
    
    // Método para obtener respuesta existente
    public function m_obtenerConoceInstitucion($folio, $idintegrante)
    {
        $resultado = DB::table($this->table)
            ->where('folio', $folio)
            ->where('idintegrante', $idintegrante)
            ->first();
            
        return $resultado;
    }
    
    // Método para eliminar respuesta existente
    public function m_eliminarConoceInstitucion($folio, $idintegrante)
    {
        return DB::table($this->table)
            ->where('folio', $folio)
            ->where('idintegrante', $idintegrante)
            ->delete();
    }
    
    // Método para guardar respuesta
    public function m_guardarConoceInstitucion($datos)
    {
        return DB::table($this->table)->insert([
            'folio' => $datos['folio'],
            'idintegrante' => $datos['idintegrante'],
            'conoce_institucion_mecanismo' => $datos['conoce_institucion_mecanismo'],
            'documento_profesional' => $datos['documento_profesional'],
            'estado' => 1,
            'sincro' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
    
    // Método para actualizar respuesta existente
    public function m_actualizarConoceInstitucion($datos)
    {
        return DB::table($this->table)
            ->where('folio', $datos['folio'])
            ->where('idintegrante', $datos['idintegrante'])
            ->update([
                'conoce_institucion_mecanismo' => $datos['conoce_institucion_mecanismo'],
                'documento_profesional' => $datos['documento_profesional'],
                'estado' => 1,
                'sincro' => 0,
                'updated_at' => now()
            ]);
    }
}
