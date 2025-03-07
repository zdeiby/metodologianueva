<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // Importa la clase DB desde el espacio de nombres correcto

class m_cards extends Model
{
    use HasFactory;

    public function __construct()
    {
        parent::__construct();
    }
    public function m_leerintegrantes($folio)
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select('SELECT ih.*, ii.estado as estado2 ,
                CASE 
                    WHEN fe.estado = 1 AND inte.estado = 1 AND fn.estado = 1 AND lg.estado = 1 THEN 1
                    ELSE 0
                END as validacion, 
                CASE 
                    WHEN sis.cuenta_con_sisben = 1  THEN "SÍ"
                    WHEN sis.cuenta_con_sisben = 2  THEN "NO"
                    ELSE "SIN DATO"
                END as cuenta_con_sisben,
                sis.ruta_sisben

                 FROM t1_integranteshogar ih
           left join t1_saludemocionalqt ii on ih.idintegrante = ii.idintegrante
            LEFT JOIN 
                t1_legalqt fe ON ih.idintegrante = fe.idintegrante
            LEFT JOIN 
                t1_intelectualqt inte ON ih.idintegrante = inte.idintegrante
            LEFT JOIN 
                t1_financieroqt fn ON ih.idintegrante = fn.idintegrante
            LEFT JOIN 
                t1_enfamiliaqt lg ON ih.idintegrante = lg.idintegrante
                LEFT JOIN 
                t1_sisben sis ON ih.idintegrante = sis.idintegrante
            where ih.folio  ="'.$folio.'";       
                    ' );

        return $resultado;
    }



    public function m_veredadrepjefe($folio)
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select('SELECT 
     CASE WHEN EXISTS (SELECT 1 FROM t1_integranteshogar WHERE edad >= 18 AND folio  ="'.$folio.'") THEN 1 ELSE 0 END AS edad_mayor_igual_18,
    CASE WHEN EXISTS (SELECT 1 FROM t1_integranteshogar WHERE jefedelhogar = 1 AND folio ="'.$folio.'") THEN 1 ELSE 0 END AS es_jefe_hogar,
    CASE WHEN EXISTS (SELECT 1 FROM t1_integranteshogar WHERE representante = 1 AND folio ="'.$folio.'") THEN 1 ELSE 0 END AS es_representante
;');

        return $resultado;
    }

    public function m_verestados($folio)
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select('SELECT 
                 CASE 
                    WHEN fe.estado = 1 AND inte.estado = 1 AND fn.estado = 1 AND lg.estado = 1 THEN 1
                    ELSE 0
                END as validacion
            FROM 
                t1_integranteshogar ih
            LEFT JOIN 
                t1_integrantesfisicoyemocional fe ON ih.idintegrante = fe.idintegrante
            LEFT JOIN 
                t1_integrantesintelectual inte ON ih.idintegrante = inte.idintegrante
            LEFT JOIN 
                t1_integrantesfinanciero fn ON ih.idintegrante = fn.idintegrante
            LEFT JOIN 
                t1_integranteslegal lg ON ih.idintegrante = lg.idintegrante
            WHERE 
                ih.folio ="'.$folio.'";       
                    ' );

        return $resultado;
    }

}
