<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // Importa la clase DB desde el espacio de nombres correcto

class m_integrantes extends Model
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
                END as validacion
                 FROM t1_integranteshogar ih
           left join t1_integrantesidentitario ii on ih.idintegrante = ii.idintegrante
            LEFT JOIN 
                t1_integrantesfisicoyemocional fe ON ih.idintegrante = fe.idintegrante
            LEFT JOIN 
                t1_integrantesintelectual inte ON ih.idintegrante = inte.idintegrante
            LEFT JOIN 
                t1_integrantesfinanciero fn ON ih.idintegrante = fn.idintegrante
            LEFT JOIN 
                t1_integranteslegal lg ON ih.idintegrante = lg.idintegrante
            where ih.folio  ="'.$folio.'";       
                    ' );

        return $resultado;
    }

    public function m_leerintegrantes_ffes($folio)
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $folio = "90006273";

        $resultado = DB::select("
            SELECT 
                ih.idintegrante,
                ih.folio,
                ih.nombre1,
                ih.nombre2,
                ih.apellido1,
                ih.apellido2,
                ih.documento,
                ih.edad,
                ih.jefedelhogar,
                ih.representante,
                ih.avatar,
                ih.sexo,
                ih.estado AS estado,
                es.estado AS estado2,
                MAX(ci.estado) AS estado_ci,
                MAX(es.estado) AS estado_es,
                MAX(pi.estado) AS estado_pi,
                CASE 
                    WHEN MAX(ci.estado) = 1 AND MAX(es.estado) = 1 AND MAX(pi.estado) = 1 THEN 1
                    ELSE 0
                END AS validacion
            FROM dbmetodologia.t1_integranteshogar ih
            LEFT JOIN dbmetodologia.t1_caracterizacionIntegrante_conoce_instituciones_ffes ci 
                ON ci.idintegrante = ih.idintegrante AND ci.folio = ih.folio
            LEFT JOIN dbmetodologia.t1_caracterizacionIntegrante_estrategia_ffes es 
                ON es.idintegrante = ih.idintegrante AND es.folio = ih.folio
            LEFT JOIN dbmetodologia.t1_caracterizacionIntegrante_primeraInfancia_ffes pi 
                ON pi.idintegrante = ih.idintegrante AND pi.folio = ih.folio
            WHERE ih.folio = ? AND ih.edad <= 18
            GROUP BY 
                ih.idintegrante,
                ih.folio,
                ih.nombre1,
                ih.nombre2,
                ih.apellido1,
                ih.apellido2,
                ih.documento,
                ih.edad,
                ih.jefedelhogar,
                ih.representante,
                ih.avatar,
                ih.sexo,
                ih.estado,
                es.estado;
        ", [$folio]);
        

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
