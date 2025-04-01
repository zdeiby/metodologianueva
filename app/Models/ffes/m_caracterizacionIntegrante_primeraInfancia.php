<?php

namespace App\Models\ffes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_caracterizacionIntegrante_primeraInfancia extends Model
{
    use HasFactory;

    protected $table = 't1_caracterizacionIntegrante_primeraInfancia';
    
   /*  public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    } */
    
    // Método para obtener respuesta existente
    public function m_obtenerServicioPrimeraInfancia($folio, $idintegrante)
    {
        $resultado = DB::table($this->table)
            ->where('folio', $folio)
            ->where('idintegrante', $idintegrante)
            ->first();
            
        return $resultado;
    }
    
    // Método para eliminar respuesta existente
    public function m_eliminarServicioPrimeraInfancia($folio, $idintegrante)
    {
        return DB::table($this->table)
            ->where('folio', $folio)
            ->where('idintegrante', $idintegrante)
            ->delete();
    }
    
    // Método para guardar respuesta
    public function m_guardarServicioPrimeraInfancia($datos)
    {
        return DB::table($this->table)->insert([
            'folio' => $datos['folio'],
            'idintegrante' => $datos['idintegrante'],
            'servicio_primera_infancia' => $datos['servicio_primera_infancia'],
            'documento_profesional' => $datos['documento_profesional'],
            'estado' => 1,
            'sincro' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
    
    // Método para actualizar respuesta existente
    public function m_actualizarServicioPrimeraInfancia($datos)
    {
        return DB::table($this->table)
            ->where('folio', $datos['folio'])
            ->where('idintegrante', $datos['idintegrante'])
            ->update([
                'servicio_primera_infancia' => $datos['servicio_primera_infancia'],
                'documento_profesional' => $datos['documento_profesional'],
                'estado' => 1,
                'sincro' => 0,
                'updated_at' => now()
            ]);
    }
}
