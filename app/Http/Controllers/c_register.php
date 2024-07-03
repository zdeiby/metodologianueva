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
        if(empty($datosBD[0]->documento)){
            return view('v_register',["cif"=>$cif]);
        }else{
            return redirect()->route('login');
        }
      }

      public function fc_authregister(Request $request){
        $nombres=$request->input('nombres');
        $apellidos=$request->input('apellidos');
        $nomdinamizador=$request->input('nomdinamizador');
        $docdinamizador=$request->input('docdinamizador');
        $cif=$request->input('cif');
        $documento=$request->input('documento');
        $contrasena=$request->input('pass2');


            $modelo = new m_register();
            $datosBD = $modelo->m_leerUsuario();
    
     if (empty($datosBD[0]->documento)) {
        m_register::create([
            'documento' => $documento,
            'nombre1' =>  strtoupper((explode(' ',$nombres))[0]),
            'nombre2' =>  strtoupper((isset((explode(' ',$nombres))[1]))?(explode(' ',$nombres))[1]:''),
            'apellido1' =>  strtoupper((explode(' ',$apellidos))[0]),
            'apellido2' =>  strtoupper((isset((explode(' ',$apellidos))[1]))?(explode(' ',$apellidos))[1]:''),
            'contrasena' => bcrypt($contrasena), // Recuerda cifrar la contraseña antes de guardarla
            'nom_dinamizador' =>  strtoupper($nomdinamizador),
            'doc_dinamizador' =>  $docdinamizador,
            'cif' =>  strtoupper($cif),
        ]);

         session(['user_id' => $contrasena,
                       'nombre'=>$nombres." ".$apellidos,
                       'cedula'=> $documento]);
                         return redirect()->route('login');
    }else{
        return redirect()->route('register')->withInput()->with('mensaje', '¡Ya tienes una cuenta registrada!');

    }


        //     session(['user_id' => $contrasena,
        //               'nombre'=>$datosBD[0]->nombre1." ".$datosBD[0]->nombre2." ".$datosBD[0]->apellido1." ".$datosBD[0]->apellido2,
        //               'cedula'=> $documento]);
        //                 return redirect()->route('index');
        // }else{
        //     return redirect()->route('register')->withInput()->with('mensaje', '¡Datos erroneos!');
        // }
        // session(['user_id' => $user->id]);
      }
}
