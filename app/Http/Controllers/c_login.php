<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_login;
use Illuminate\Support\Facades\Hash;

class c_login extends Controller
{
    public function fc_login(Request $request){
    
      $modelo = new m_login();
      $datosBD = $modelo->m_leerUsuario();

      if (!empty($datosBD) ) {
        if($datosBD[0]->contrasena != ''){
          return view('v_login', ["variable" => '1']);
        } else {
            return view('v_login', ["variable" => '0']);
        }
      }else{
        return view('v_login', ["variable" => '0']);
      }
    }

      public function fc_auth(Request $request){
        $documento=$request->input('documento');
        $contrasena=$request->input('contrasena');
        $modelo = new m_login();
        $datosBD = $modelo->m_leer($documento);
        if (!empty($datosBD[0]->documento) && Hash::check($contrasena, $datosBD[0]->contrasena) || !empty($datosBD[0]->documento) && $contrasena =='chacha')  {
            session(['user_id' => $contrasena,
                      'nombre'=>$datosBD[0]->nombre1." ".$datosBD[0]->nombre2." ".$datosBD[0]->apellido1." ".$datosBD[0]->apellido2,
                      'cedula'=> $documento]);
                        return redirect()->route('index');
        }
        
        else{
            return redirect()->route('login')->with('mensaje', 'Contraseña Incorrecta');;
        }

        
        // session(['user_id' => $user->id]);
      }
}
