<?php

namespace App\Http\Controllers\formularioqt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_login;
use App\Models\visitaslineas\m_l1e1;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;


class c_encuestaintegrantesqt extends Controller
{

// IR A LA VISTA BIENESTAR FISICO Y EMOCIONAL

public function fc_bienestarsaludemocionalqt(Request $request,$folio, $integrante){
  $hashids = new Hashids('', 10); 
  $encodedFolio = $hashids->decode($folio);
  $decodeIntegrante = $hashids->decode($integrante);
            return view('formularioqt/v_bienestarsaludemocionalqt',['variable'=>$folio, 'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0]]);
          }
 

    public function fc_guardarsaludemocionalqt(Request $request)
    {
        $folio = $request->input('folio');
        $idintegrante = $request->input('idintegrante');
    
        // Excluir 'folio' e 'idintegrante' del request y guardar el resto en $data
        $data = $request->except(['folio', 'idintegrante']);
    
        DB::table('t1_qtsaludemocional')->updateOrInsert(
            ['folio' => $folio, 'idintegrante' => $idintegrante], // Condición de búsqueda
            $data // Datos a insertar o actualizar
        );
    
        return response()->json(["request" => $data]); // Responder con los datos procesados
    }

  
}
