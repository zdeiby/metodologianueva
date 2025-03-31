<?php

namespace App\Models\ffes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_triaje_p1_p2 extends Model
{
    use HasFactory;

    protected $table = 't1_triaje_p1_p2';
    
    public function __construct()
    {
        parent::__construct();
    }
    
    // Método para obtener respuestas existentes
    public function m_obtenerRespuestas($folio, $idintegrante)
    {
        $resultado = DB::table($this->table)
            ->where('folio', $folio)
            ->where('idintegrante', $idintegrante)
            ->first();
            
        return $resultado;
    }
}