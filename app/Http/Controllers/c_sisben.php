<?php

namespace App\Http\Controllers;
use App\Models\m_index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class c_sisben extends Controller
{
    public function fc_index(Request $request){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
      $modelo= new m_index();
      $pphogar=$modelo->m_leerprincipalintegrantes();
       // dd($pphogar);
      $folios='';
      $estacion='';

     
    
    $folios = array_map(function ($item) {
        return [
            'folio' => $item->folio ?? '',
            'idintegrante' => $item->idintegrante ?? '',
            'cedula' => $item->cedula ?? '',
            'documento' => $item->documento ?? '',
            'nombre' => ($item->nombre1 ?? '') . ' ' . ($item->nombre2 ?? '') . ' ' . ($item->apellido1 ?? '') . ' ' . ($item->apellido2 ?? ''),
            'estadointegrante' => $item->estadointegrante ?? '',
            'sisben' => $item->sisben ?? '',
            'ruta' => $item->ruta ?? '',
            // 'celular' => $item->celular ?? '',
            // 'telefono' => $item->telefono ?? '',
            // 'barrio' => $item->barrio ?? '',
            // 'comuna' => $item->comuna ?? '',
            // 'direccion' => $item->direccion ?? '',
           
        ];
    }, $pphogar);

if(session('nombre') !== null){
        $nombre = session('nombre');
        $cedula = session('cedula');

        $sesion=['nombre'=> $nombre,
                'cedula'=>$cedula];
                
      
        return view('v_sisben',["variable"=>$sesion,"folios"=>$folios,"estacion"=>$estacion]);
        }else{
            return redirect()->route('login');
        }
        
    }

}
