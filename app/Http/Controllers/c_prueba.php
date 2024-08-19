<?php

namespace App\Http\Controllers;
use App\Models\m_index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class c_prueba extends Controller
{
    public function fc_index(Request $request){
      $modelo= new m_index();
      $pphogar=$modelo->m_leerprincipalhogar();

      $folios='';
      $estacion='';
      foreach ($pphogar as $value) {
          $estacion='';
      
          $folios .='<tr>
          <td>'.$value->folio.'</td>
          <td>'.$value->documento.'</td>
          <td>'.$value->nombre1.' '.$value->nombre2.' '.$value->apellido1.' '.$value->apellido2.'</td>
          <td>'.$value->celular.'</td>
          <td>'.$value->comuna.'</td>
          <td>'.$estacion.'</td>

          ';

      }

if(session('nombre') !== null){
        $nombre = session('nombre');
        $cedula = session('cedula');

        $sesion=['nombre'=> $nombre,
                'cedula'=>$cedula];
      
        return view('v_prueba',["variable"=>$sesion,"folios"=>$pphogar,"estacion"=>$estacion]);
        }else{
            return redirect()->route('login');
        }
        
    }

    public function fc_leerprincipalhogar(Request $request){
         $folio=$request->input('folio');
         $principalhogar=  DB::table('t1_principalhogar')
         ->where('folio', $request->input('folio'))
         ->first();
         return response()->json(["principalhogar" => $principalhogar]);
    }

    public function fc_guardarhabeasdata(Request $request){
      $affectedRows = DB::table('t1_principalhogar')
                      ->where('folio', $request->input('folio'))
                      ->update(['habeasdata' => 1]);
      return response()->json(["ok" => 'ok']);
 }


}
