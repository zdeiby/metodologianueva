<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_login;
use App\Models\visitaslineas\m_l1e1;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class c_editarintegrantes extends Controller
{
    public function fc_editarintegrantes(){
      $modelo= new m_l1e1();
      $preguntas=$modelo->m_leerrespuestas();
      $barrios= $modelo->m_leerbarrios();
      $comunas= $modelo->m_leercomunas();
      $lecpaises= $modelo->m_leerpaises();

      
      $sino = '<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id == '1' || $value->id == '2') {
            $sino .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }
        $paises = '<option value="">Seleccione </option>';
        foreach ($lecpaises as $value) {
              $paises .= '<option value="' . $value->codigo . '">' . $value->pais . '</option>';
      }



      $tipodocumento='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '3' && $value->id <= '11') {
            $tipodocumento .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

      $sexo='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '12' && $value->id <= '13') {
            $sexo .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }
      $orientacion='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '14' && $value->id <= '21') {
            $orientacion .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }
      $identidad='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '22' && $value->id <= '29') {
            $identidad .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

      $etnia='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '30' && $value->id <= '37') {
            $etnia .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

      $migrantes2='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '38' && $value->id <= '42') {
            $migrantes2 .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

              return view('v_editarintegrantes',['sino'=>$sino,
              'paises'=>$paises,'tipodocumento'=>$tipodocumento,'sexo'=>$sexo,'orientacion'=>$orientacion, 'identidad'=>$identidad, 'etnia'=>$etnia, 'migrantes2'=>$migrantes2]);
            }


    public function fc_responderencuesta(Request $request){
      $folio=$request->input('folio');
      $idintegrante=$request->input('idintegrante');
      $integrante = DB::table('t1_integranteshogar')
                ->where('idintegrante', '=', $idintegrante)
                ->first();

      $conteoIntegrantes = DB::table('t1_integranteshogar')
      ->where('folio', $folio)
      ->count();
      $nuevoConteo = $conteoIntegrantes + 1;
      $formateado = str_pad($nuevoConteo, 2, '0', STR_PAD_LEFT);

      return response()->json(["integrantes"=>$integrante,'leerintegrantes'=> $formateado]);

        
    }

    public function fc_guardarintegrante(Request $request){
      $data = $request->all()['data'];
      $dataWithoutId = Arr::except($data, ['idintegrante', 'folio']);
      $folio = $data['folio'];
      $idintegrante = $data['idintegrante'];
      $now = Carbon::now();
  
      // Añadir created_at y updated_at
      $dataWithoutId['updated_at'] = $now;
  
      // Verificar si el registro existe para decidir si añadir created_at
      $exists = DB::table('dbmetodologia.t1_integranteshogar')
          ->where('idintegrante', $idintegrante)
          ->where('folio', $folio)
          ->exists();
  
      if (!$exists) {
          $dataWithoutId['created_at'] = $now;
      }
  
      DB::table('dbmetodologia.t1_integranteshogar')->updateOrInsert(
          [
              'idintegrante' => $idintegrante,
              'folio' => $folio,
          ], // Condición para encontrar el registro existente
          $dataWithoutId
      );
  
      return response()->json(["request" => $dataWithoutId]);
  }

    public function fc_guardaravatar(Request $request){

      DB::table('t1_integranteshogar')
      ->where('folio', $request->input('folio'))
      ->where('idintegrante', $request->input('idintegrante'))
      ->update(['avatar' => $request->input('avatar')]);

      return response()->json(['message' => 'Avatar actualizado con éxito']);
    }





}
