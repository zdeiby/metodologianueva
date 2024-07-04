<?php

namespace App\Models\visitaslineas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // Importa la clase DB desde el espacio de nombres correcto

class m_l1e1 extends Model
{
    use HasFactory;

    public function __construct()
    {
        parent::__construct();
    }
    public function m_leerrespuestas()
    {
        $resultado = DB::select('SELECT * FROM dbmetodologia.t_bancopreguntas;           
        ' );

        return $resultado;
    }

    public function m_leerbarrios()
    {
        $resultado = DB::select('SELECT * FROM dbmetodologia.t_barrios;           
        ' );

        return $resultado;
    }

    public function m_leercomunas()
    {
        $resultado = DB::select('SELECT * FROM dbmetodologia.t_comunas;           
        ' );

        return $resultado;
    }

    public function m_leerpaises()
    {
        $resultado = DB::select('SELECT * FROM dbmetodologia.t_paises;           
        ' );

        return $resultado;
    }
}
