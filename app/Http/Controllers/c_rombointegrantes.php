<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\m_login;

class c_rombointegrantes extends Controller
{
    public function fc_rombointegrantes(Request $request, $folio){
        return view('v_rombointegrantes',["variable"=>$folio]);
      }

      public function fc_agregarpasoencuadre(Request $request){

        return response()->json(['message' => 'paso registrado']);
      }

      

}
