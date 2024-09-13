<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_login;
use App\Models\m_register;
use Illuminate\Support\Facades\DB;


class c_register extends Controller
{
    public function fc_register(Request $request){
        $modelo = new m_register();
        $datosBD = $modelo->m_leerUsuario();
        $cif = DB::table('t_cif')->get();
        $datosgestor = DB::table('t_usuario')->get();
        if(empty($datosBD[0]->contrasena)){
            return view('v_register',["cif"=>$cif, 'datos'=>$datosgestor]);
        }else{
            return redirect()->route('login');
        }
      }

      public function fc_authregister(Request $request){

        $documento=$request->input('documento');
        $contrasena=$request->input('pass1');


            DB::table('t_usuario')
                 ->where('documento', $documento)  // Condición para encontrar el registro existente
                 ->update([
                     'contrasena' => bcrypt($contrasena)  // Actualizar la contraseña con la versión cifrada
                 ]);
    
             return redirect()->route('login');


      }
}
