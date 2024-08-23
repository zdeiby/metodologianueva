<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_integrantes;
use Illuminate\Support\Facades\DB;

class c_integrantes extends Controller
{
    public function fc_integrantes(Request $request, $cedula){
      
        return view('v_integrantes',["variable"=>$cedula]);
      }

    public function fc_leerintegrantes(Request $request){
        $folio=$request->input('folio');
        $folioencriptado=$request->input('folioencriptado');
        $modelo= new m_integrantes();
        $integrantes=$modelo-> m_leerintegrantes($folio);
        //$integrantes=$modelo-> m_verestados($folio);

        $foliosintegrante='';
      foreach ($integrantes as $value) {
        $foliosintegrante .='<tr class="table-primary">
                <td class="align-middle">'.$value->nombre1.' '.$value->nombre2.' '.$value->apellido1.' '.$value->apellido2.'</td>
                <td class="align-middle">'.$value->documento.'</td>
                <td class="align-middle">'.$value->edad.'</td>
                <td class="align-middle">
               <button class="btn  btn-sm" style="background:#2fa4e7; color:white"  '.(($value->estado == '1' && $value->estado2 == '1')?'':'disabled').' '.(($value->validacion == '0')?'':'disabled').'
                onclick="responderencuesta('.$folio.','.$value->idintegrante.',`'.$folioencriptado.'`,`'.$value->nombre1.' '.$value->nombre2.' '.$value->apellido1.' '.$value->apellido2.'`)">
                    Realizar Encuesta
                  </button></td>
                   <td class="align-middle">
                  <button class="habilitado btn btn-success btn-sm" '.(($value->validacion == '0')?'':'disabled').' onclick="editarintegrantes('.$folio.','.$value->idintegrante.',`'.$folioencriptado.'`)">
                  Editar
                  </button>
                  </td>
                <td style="width:100px !important"><img src="' .(($value->avatar)? asset('avatares/'.$value->avatar. '.png'):(($value->sexo =="13")?asset('avatares/mujer_avatar.png'):asset('avatares/hombre_avatar.png'))) . '" width="100%" alt=""></td>
                  <td class="align-middle align-center" style="text-align: center !important;">
                  <button class="btn btn-danger btn-sm" onclick="eliminarintegrantes('.$folio.','.$value->idintegrante.')">
                    x
                  </button></td>
                </tr>
            
            ';
            }
            return response()->json(["foliosintegrante"=>$foliosintegrante ]);
    }

    public function fc_eliminarintegrantes(Request $request){
      $integrantehogar=  DB::table('t1_integranteshogar')
      ->where('folio', $request->input('folio'))
      ->where('idintegrante', $request->input('idintegrante'))
      ->where('representante', '!=', 1)
      ->delete();
      if($integrantehogar ==1){
        DB::table('t1_integrantesidentitario')
            ->where('folio', $request->input('folio'))
            ->where('idintegrante', $request->input('idintegrante'))
            ->delete();
      }
      


      

  return response()->json(['message' =>  $integrantehogar]);
  }

}
