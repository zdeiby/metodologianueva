<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_integrantes;

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
        $foliosintegrante='';
      foreach ($integrantes as $value) {
        $foliosintegrante .='<tr class="table-primary">
                <td class="align-middle">'.$value->nombre1.' '.$value->nombre2.' '.$value->apellido1.' '.$value->apellido2.'</td>
                <td class="align-middle">'.$value->documento.'</td>
                <td class="align-middle"><button class="btn  btn-sm" style="background:#2fa4e7; color:white">
                    Realizar Encuesta
                  </button>
                  <button class="btn btn-success btn-sm" onclick="editarintegrantes('.$folio.','.$value->idintegrante.',`'.$folioencriptado.'`)">
                  Editar
                  </button>
                  </td>
                <td style="width:100px !important"><img src="' .(($value->sexo =="FEMENINO")?asset('avatares/mujer_avatar.png'):asset('avatares/hombre_avatar.png'))  . '" width="100%" alt=""></td>
            </tr>';
            }
            return response()->json(["foliosintegrante"=>$foliosintegrante ]);
    }

}
