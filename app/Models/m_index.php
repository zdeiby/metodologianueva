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
        $resultado = DB::select('SELECT *
                    FROM t1_principalhogar
                    JOIN (
                        SELECT folio, MAX(idestacion) AS ultimo_idestacion
                        FROM t_estacionestado
                        GROUP BY folio
                    ) AS max_idestacion
                    ON t1_principalhogar.folio = max_idestacion.folio
                    JOIN t_estacionestado 
                        ON t1_principalhogar.folio = t_estacionestado.folio 
                        AND t_estacionestado.idestacion = max_idestacion.ultimo_idestacion
                    JOIN t1_principalintegrantes ON t1_principalhogar.idintegrantetitular = t1_principalintegrantes.idintegrante
                    ORDER BY t_estacionestado.idestacion;;
                    
        ' );

        return $resultado;
    }
}
