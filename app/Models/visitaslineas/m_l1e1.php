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
        $resultado = DB::select('SELECT * FROM t_bancopreguntas;           
        ' );

        return $resultado;
    }

      public function m_leerrespuestasffes()
    {
        $resultado = DB::select('SELECT * FROM t_bancopreguntas_ffes;           
        ' );

        return $resultado;
    }

    public function m_leerbarrios()
    {
        $resultado = DB::select('SELECT * FROM t_barrios;           
        ' );

        return $resultado;
    }

    public function m_leercomunas()
    {
        $resultado = DB::select('SELECT * FROM t_comunas;           
        ' );

        return $resultado;
    }

    public function m_leerpaises()
    {
        $resultado = DB::select('SELECT * FROM t_paises order by(pais);           
        ' );

        return $resultado;
    }

    public function m_leerintegrantes($folio)
    {
        $resultado = DB::select('SELECT * FROM t1_integranteshogar where folio='.$folio.' order by(nombre1);           
        ' );

        return $resultado;
    }

    public function m_verbarrios($comuna)
    {
        $resultado = DB::select('SELECT * FROM t_barrios where comuna='.$comuna.' ;           
        ' );

        return $resultado;
    }
}
