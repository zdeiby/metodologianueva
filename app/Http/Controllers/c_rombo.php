<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class c_rombo extends Controller
{
    public function fc_rombo(Request $request, $cedula){
      if (!session('nombre')) {
        // Si no existe la sesión 'usuario', redirigir al login
        return redirect()->route('login');
    }
      $linea = 100;
      // Obtener el registro en lugar de solo verificar si existe
        $registro = DB::table('t1_visitasrealizadas')
        ->where('folio', decrypt($cedula))  // Comparamos el folio desencriptado
        ->where('linea', $linea)            // Comparamos la línea
        ->first();                          // Obtener el primer registro que coincida
          // Verificamos si el registro existe y si su estado es igual a 0
          if ($registro && $registro->estado == 1) {
              $realizado = 1;
          } else {
              $realizado = 0;
          }

        return view('v_rombo',["variable"=>$cedula, 'realizado'=>$realizado]);
      }

}
