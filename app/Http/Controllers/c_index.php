<?php

namespace App\Http\Controllers;
use App\Models\m_index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class c_index extends Controller
{
    public function fc_index(Request $request){
      $modelo= new m_index();
     // $pphogar=$modelo->m_leerprincipalhogar();

    

if(session('nombre') !== null){
        $nombre = session('nombre');
        $cedula = session('cedula');

        $sesion=['nombre'=> $nombre,
                'cedula'=>$cedula];
      
        return view('v_index',["variable"=>$sesion]);
        }else{
            return redirect()->route('login');
        }
        
    }


}
