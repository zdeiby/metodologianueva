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
        COALESCE(
        CASE 
            WHEN hvrdas.estado = 1 THEN CONCAT(tvrn.descripcion, " finalizada")
            WHEN hvrdas.estado = 0 THEN CONCAT(tvrn.descripcion, " abierta")
            ELSE "Triage" 
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
                ON hvrdas.linea = tvrn.linea;

                    
        ' );

        return $resultado;
    }


    // public function m_leerprincipalhogar()
    // {
    //     // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
    //     $resultado = DB::select('
    //             SELECT 
    //                 ph.folio, 
    //                 ph.idintegrantetitular, 
    //                 inte.nombre1, 
    //                 inte.nombre2, 
    //                 inte.apellido1, 
    //                 inte.apellido2, 
    //                 inte.documento, 
    //                 inte.celular,
    //                 inte.telefono, 
    //                 barr.barriovereda as barrio, 
    //                 com.comuna as comuna,
    //                 "triage" as ultimo_idestacion
    //             FROM 
    //                 t1_principalhogar ph
    //             JOIN 
    //                 t1_integranteshogar inte 
    //                 ON ph.idintegrantetitular = inte.idintegrante
    //             LEFT JOIN 
    //                 t1_hogardatosgeograficos hgeo 
    //                 ON ph.folio = hgeo.folio
    //             LEFT JOIN 
    //             t_barrios barr 
    //             ON hgeo.barrio = barr.codigo
    //              LEFT JOIN 
    //             t_comunas com 
    //             ON hgeo.comuna = com.codigo
    //             ;
                    
    //     ' );

    //     return $resultado;
    // }
}
