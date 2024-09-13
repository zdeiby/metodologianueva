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
                    hgeo.comuna, 
                    hgeo.barrio,
                    com.comuna as comunas,
                    barr.barriovereda,
                    "triage" as ultimo_idestacion
                FROM 
                    t1_principalhogar ph
                JOIN 
                    t1_integranteshogar inte 
                    ON ph.idintegrantetitular = inte.idintegrante
                LEFT JOIN 
                    t1_hogardatosgeograficos hgeo                 
                    ON ph.folio = hgeo.folio  
                LEFT JOIN 
                    t_comunas com                 
                    ON hgeo.comuna = com.codigo
                LEFT JOIN 
                    t_barrios barr                 
                    ON hgeo.barrio = barr.codigo
                    ;
                    
        ' );

        return $resultado;
    }
}
