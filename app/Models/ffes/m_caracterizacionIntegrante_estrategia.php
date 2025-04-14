<?php

namespace App\Models\ffes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_caracterizacionIntegrante_estrategia extends Model
{
    use HasFactory;

    protected $table = 't1_caracterizacionIntegrante_estrategia_ffes';
    
    public $incrementing = false;
    protected $primaryKey = ['folio', 'idintegrante', 'estrategia_implementa_reducir_estres'];
    
    public function __construct()
    {
        parent::__construct();
    }
    
    // Método para obtener respuestas existentes
    public function m_obtenerEstrategias($folio, $idintegrante)
    {
        $estrategias = DB::table($this->table)
            ->where('folio', $folio)
            ->where('idintegrante', $idintegrante)
            ->get();
            
        return $estrategias;
    }
    
    // Método para eliminar todas las estrategias existentes de un integrante
    public function m_eliminarEstrategias($folio, $idintegrante)
    {
        return DB::table($this->table)
            ->where('folio', $folio)
            ->where('idintegrante', $idintegrante)
            ->delete();
    }
    
    // Método para guardar una estrategia individual
    public function m_guardarEstrategia($datos)
    {
        try {
            return DB::table($this->table)->insert([
                'folio' => $datos['folio'],
                'idintegrante' => $datos['idintegrante'],
                'estrategia_implementa_reducir_estres' => $datos['estrategia_implementa_reducir_estres'],
                'otro_cual_estrategia' => $datos['otro_cual_estrategia'] ?? null,
                'documento_profesional' => $datos['documento_profesional'],
                'estado' => 1,
                'sincro' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        } catch (\Exception $e) {
            // Si hay un error de llave duplicada, intentamos actualizar
            if (str_contains($e->getMessage(), 'Duplicate entry')) {
                return DB::table($this->table)
                    ->where('folio', $datos['folio'])
                    ->where('idintegrante', $datos['idintegrante'])
                    ->where('estrategia_implementa_reducir_estres', $datos['estrategia_implementa_reducir_estres'])
                    ->update([
                        'otro_cual_estrategia' => $datos['otro_cual_estrategia'] ?? null,
                        'documento_profesional' => $datos['documento_profesional'],
                        'estado' => 1,
                        'sincro' => 0,
                        'updated_at' => now()
                    ]);
            }
            throw $e;
        }
    }
}
