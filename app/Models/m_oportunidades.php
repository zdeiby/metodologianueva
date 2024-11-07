<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // Importa la clase DB desde el espacio de nombres correcto

class m_oportunidades extends Model
{
    use HasFactory;

    public function __construct()
    {
        parent::__construct();
    }
    public function m_listadooportunidades()
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select('   
SELECT 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad, 
            oh.estado_oportunidad,
            oh.id, o.id_oportunidad
        FROM 
            dbmetodologia.t3_oportunidad AS o
        JOIN 
            dbmetodologia.t1_integranteshogar AS ih
            ON (
        (o.sexo = ih.sexo AND ih.edad BETWEEN o.edad_inicial AND o.edad_final) -- Condición normal por sexo y rango de edad
        OR 
        (o.sexo = 372 AND ih.edad BETWEEN o.edad_inicial AND o.edad_final) -- Condición adicional para sexo = 303 (ambos sexos)
    )
        LEFT JOIN 
            dbmetodologia.t1_oportunidad_integrantes AS oh
            ON ih.idintegrante = oh.idintegrante 
            AND ih.folio = oh.folio
        WHERE 
            ih.estado = 1
        GROUP BY 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad,
            oh.id, 
            o.id_oportunidad,
            oh.estado_oportunidad;
    ');


        return $resultado;
    }

}
