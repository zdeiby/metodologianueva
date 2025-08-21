<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // Importa la clase DB desde el espacio de nombres correcto

class m_herramientas extends Model
{
    use HasFactory;

    public function __construct()
    {
        parent::__construct();
    }
    public function m_leert1($tabla)
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select(' SELECT * FROM '.$tabla.';' );  
       // Inicializar el HTML del <select>

    $respuestas = '<option value="">Seleccione</option>'; // Opción predeterminada
    
    // Iterar sobre los resultados y agregar cada opción
    foreach ($resultado as $accion) {
        $respuestas .= '<option value="' . htmlspecialchars($accion->id) . '">' . htmlspecialchars($accion->descripcion) . '</option>';
    }
    
    // Cerrar el <select>

    
    return $respuestas;
    }

    public function m_leeracciones($tabla, $idbienestar)
    {
        $resultado = DB::select(' SELECT * FROM '.$tabla.' WHERE bienestar = '.$idbienestar.';' );  

    $respuestas = '<option value="">Seleccione</option>'; 
    
    foreach ($resultado as $accion) {
        $respuestas .= '<option value="' . htmlspecialchars($accion->id) . '">' . htmlspecialchars($accion->descripcion) . '</option>';
    }
    
    return $respuestas;
    }


    public function m_leeraccionesordenadas($tabla, $idbienestar)
        {
            $resultado = DB::select("
                SELECT * 
                FROM $tabla 
                WHERE bienestar = ? AND estado = 1
                ORDER BY 
                    CASE 
                        WHEN metodologia = 1 THEN 0  -- MEF primero
                        ELSE 1                       -- FFES después
                    END,
                    descripcion COLLATE utf8mb4_spanish_ci ASC
            ", [$idbienestar]);  

            $respuestas = '<option value="">Seleccione</option>'; 
            
            foreach ($resultado as $accion) {
                $respuestas .= '<option value="' . htmlspecialchars($accion->id) . '">' 
                            . htmlspecialchars($accion->descripcion) 
                            . '</option>';
            }

            return $respuestas;
        }



}
