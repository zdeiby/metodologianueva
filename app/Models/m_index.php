<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // Importa la clase DB desde el espacio de nombres correcto

class m_index extends Model
{
    use HasFactory;

    public function __construct()
    {
        parent::__construct();
    }
    public function m_leerprincipalhogar()
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select('
             SELECT 
        ph.folio, 
        ph.idintegrantetitular, 
        inte.nombre1, 
        inte.nombre2, 
        inte.apellido1, 
        inte.apellido2, 
        inte.documento, 
        inte.celular,
        inte.telefono, 
        barr.barriovereda as barrio, 
        com.comuna as comuna,
        hgeo.direccion as direccion,
        csm.casillamatriz,
        COALESCE(
        CASE 
            WHEN hvrdas.estado = 1 THEN CONCAT(tvrn.descripcion, " finalizada")
            WHEN hvrdas.estado = 0 THEN CONCAT(tvrn.descripcion, " abierta")
            ELSE "Triaje" 
        END, 
        "visita 100"
                ) AS ultimo_idestacion
            FROM 
                t1_principalhogar ph
            JOIN 
                t1_integranteshogar inte 
                ON ph.idintegrantetitular = inte.idintegrante
            LEFT JOIN 
                t1_hogardatosgeograficos hgeo 
                ON ph.folio = hgeo.folio
            LEFT JOIN   
                t_barrios barr 
                ON hgeo.barrio = barr.codigo
            LEFT JOIN 
                t_comunas com 
                ON hgeo.comuna = com.codigo
            LEFT JOIN (
                SELECT 
                    folio, 
                    MAX(linea) as max_linea,
                    MAX(estado) as estado -- Asumiendo que quieres el máximo estado; ajusta según sea necesario
                FROM 
                    t1_visitasrealizadas
                GROUP BY 
                    folio
            ) AS ultima_visita
            ON ph.folio = ultima_visita.folio
            LEFT JOIN 
                t1_visitasrealizadas hvrdas 
                ON ph.folio = hvrdas.folio AND hvrdas.linea = ultima_visita.max_linea
            LEFT JOIN 
                t_visitasrealizadasnombres tvrn
                ON hvrdas.linea = tvrn.linea
            LEFT JOIN 
				t1_casillamatriz csm ON ph.folio = csm.folio 
                ;       
        ' );

        return $resultado;
    }


     public function m_leerprincipalintegrantes()
     {
         // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
         $resultado = DB::select('
                 SELECT 
                     inte.folio, 
                     inte.idintegrante,
                     banc.pregunta as cedula, 
                     inte.documento, 
                     inte.nombre1, 
                     inte.nombre2, 
                     inte.apellido1, 
                     inte.apellido2,
                    CASE 
                        WHEN COALESCE(inte.estadointegrante, "") = "" THEN "Activo"
                        WHEN inte.estadointegrante = "1" THEN "Activo"
                        WHEN inte.estadointegrante = "0" THEN "Inactivo"
                        ELSE inte.estadointegrante
                    END AS estadointegrante,

                     bancsis.pregunta as sisben,
                     sis.ruta_sisben as ruta
                     
                    /* inte.celular,
                     inte.telefono, */
                     
                 FROM 
                     t1_integranteshogar inte
              
                        LEFT JOIN 
                     t_bancopreguntas banc 
                     ON inte.tipodocumento = banc.id

                     LEFT JOIN 
                     t1_sisben sis 
                     ON inte.idintegrante = sis.idintegrante

                      LEFT JOIN 
                     t_bancopreguntas bancsis 
                     ON sis.cuenta_con_sisben = bancsis.id

                /* LEFT JOIN 
                 t_barrios barr 
                 ON hgeo.barrio = barr.codigo
                  LEFT JOIN 
                 t_comunas com 
                 ON hgeo.comuna = com.codigo */ 
                 /*  LEFT JOIN 
                     t1_hogardatosgeograficos hgeo 
                     ON ph.folio = hgeo.folio */
                 ;
              
         ' );

         return $resultado;
     }


     public function m_leerprincipalhogarconfolio($folio)
     {
         // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
         $resultado = DB::select('
              SELECT 
         ph.folio, 
         ph.idintegrantetitular, 
         inte.nombre1, 
         inte.nombre2, 
         inte.apellido1, 
         inte.apellido2, 
         inte.documento, 
         inte.celular,
         inte.telefono, 
         barr.barriovereda as barrio, 
         com.comuna as comuna,
         hgeo.direccion as direccion,
         csm.casillamatriz,
         COALESCE(
         CASE 
             WHEN hvrdas.estado = 1 THEN CONCAT(tvrn.descripcion, " finalizada")
             WHEN hvrdas.estado = 0 THEN CONCAT(tvrn.descripcion, " abierta")
             ELSE "Triaje" 
         END, 
         "visita 100"
                 ) AS ultimo_idestacion
             FROM 
                 t1_principalhogar ph
             JOIN 
                 t1_integranteshogar inte 
                 ON ph.idintegrantetitular = inte.idintegrante
             LEFT JOIN 
                 t1_hogardatosgeograficos hgeo 
                 ON ph.folio = hgeo.folio
             LEFT JOIN   
                 t_barrios barr 
                 ON hgeo.barrio = barr.codigo
             LEFT JOIN 
                 t_comunas com 
                 ON hgeo.comuna = com.codigo
             LEFT JOIN (
                 SELECT 
                     folio, 
                     MAX(linea) as max_linea,
                     MAX(estado) as estado -- Asumiendo que quieres el máximo estado; ajusta según sea necesario
                 FROM 
                     t1_visitasrealizadas
                 GROUP BY 
                     folio
             ) AS ultima_visita
             ON ph.folio = ultima_visita.folio
             LEFT JOIN 
                 t1_visitasrealizadas hvrdas 
                 ON ph.folio = hvrdas.folio AND hvrdas.linea = ultima_visita.max_linea
             LEFT JOIN 
                 t_visitasrealizadasnombres tvrn
                 ON hvrdas.linea = tvrn.linea
             LEFT JOIN 
                 t1_casillamatriz csm ON ph.folio = csm.folio where ph.folio = '.$folio.'
                 ;       
         ' );
 
         return $resultado;
     }


     public function m_leerprincipalhogarconfolio_ffes($folio)
     {
        $resultado = DB::select('
        SELECT 
            ph.folio, 
            ph.idintegrantetitular, 
            inte.nombre1, 
            inte.nombre2, 
            inte.apellido1, 
            inte.apellido2, 
            inte.documento, 
            CASE 
                WHEN carac.estado = 1 THEN 1
                ELSE 0
            END AS validacion
        FROM 
            t1_principalhogar ph
        JOIN 
            t1_integranteshogar inte 
            ON ph.idintegrantetitular = inte.idintegrante
        LEFT JOIN 
            t1_caracterizacion_hogar_ffes carac 
            ON carac.folio = ph.folio
        WHERE 
            ph.folio = '.$folio.'
    ');
    
 
         return $resultado;
     }
}
