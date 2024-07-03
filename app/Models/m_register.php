<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // Importa la clase DB desde el espacio de nombres correcto

class m_register extends Model
{
    use HasFactory;
    protected $table = 't_usuario'; // Nombre de la tabla en la base de datos
    protected $fillable = ['documento', 'nombre1', 'nombre2', 'apellido1', 'apellido2', 'contrasena', 'nom_dinamizador', 'doc_dinamizador', 'cif']; // Campos que puedes llenar mediante la inserción

  
    public function m_leerUsuario()
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select('SELECT * from t_usuario limit 1;' );

        return $resultado;
    }
}
