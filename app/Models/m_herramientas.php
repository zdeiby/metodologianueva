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
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select(' SELECT * FROM '.$tabla.' WHERE bienestar = '.$idbienestar.';' );  
       // Inicializar el HTML del <select>

    $respuestas = '<option value="">Seleccione</option>'; // Opción predeterminada
    
    // Iterar sobre los resultados y agregar cada opción
    foreach ($resultado as $accion) {
        $respuestas .= '<option value="' . htmlspecialchars($accion->id) . '">' . htmlspecialchars($accion->descripcion) . '</option>';
    }
    
    // Cerrar el <select>

    
    return $respuestas;
    }


}
