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
        if ($value->id == '0' || $value->id == '1' || $value->id == '2') {
            $sino .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
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

      $parentesco='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '310' && $value->id <= '330' ||  $value->id=='0') {
            $parentesco .= '<option value="' . $value->id . '"  id="parentesco'. $value->id .'">' . $value->pregunta . '</option>';
        }
      }

      $estadocivil='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '331' && $value->id <= '336' ||  $value->id=='0') {
            $estadocivil .= '<option value="' . $value->id . '"  id="estadocivil'. $value->id .'">' . $value->pregunta . '</option>';
        }
      }

      $sexo='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '12' && $value->id <= '13') {
            $sexo .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }
      $orientacion='<option value="">Seleccione </option>';
      foreach ( $preguntas as $value) {
        if ($value->id == '0' || $value->id >= '14' && $value->id <= '21') {
            $orientacion .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }
      $identidad='<option value="">Seleccione </option>';

      $allowed_ids = [0, 22, 23, 24, 25, 26, 27, 337, 338, 339, 30, 28, 29];

      foreach ($allowed_ids as $id) {
        foreach ($preguntas as $value) {
            if ($value->id == $id) {
                $sorted_preguntas[] = $value;
                break;
            }
        }
    }
     foreach ($sorted_preguntas as $value) {
    $identidad .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
}

      $etnia='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '31' && $value->id <= '37') {
            $etnia .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

      $migrantes2='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id == '0'  || $value->id >= '38' && $value->id <= '42') {
            $migrantes2 .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

              return view('v_editarintegrantes',['sino'=>$sino,
              'paises'=>$paises,'tipodocumento'=>$tipodocumento,'sexo'=>$sexo,
              'orientacion'=>$orientacion, 'identidad'=>$identidad, 'etnia'=>$etnia,
               'migrantes2'=>$migrantes2, 'parentesco'=>$parentesco, 'estadocivil'=>$estadocivil]);
            }

            public function fc_responderencuesta(Request $request)
            {
                $folio = $request->input('folio');
                $idintegrante = $request->input('idintegrante');
                $integrante = DB::table('t1_integranteshogar')
                            ->where('idintegrante', '=', $idintegrante)
                            ->first();
                            $integranteidentitario = DB::table('t1_integrantesidentitario')
                            ->where('idintegrante', '=', $idintegrante)
                            ->first();

            
                // Obtener todos los idintegrante existentes para el folio dado
                $existingIntegrantes = DB::table('t1_integranteshogar')
                    ->where('folio', $folio)
                    ->pluck('idintegrante')
                    ->toArray();
            
                // Extraer el número secuencial de los idintegrante existentes
                $existingNumbers = array_map(function($id) use ($folio) {
                    return (int) substr($id, strlen($folio));
                }, $existingIntegrantes);
            
                // Ordenar los números secuenciales
                sort($existingNumbers);
            
                // Determinar el siguiente número disponible
                $nextNumber = 1;
                foreach ($existingNumbers as $number) {
                    if ($number != $nextNumber) {
                        break;
                    }
                    $nextNumber++;
                }
            
                // Formatear el nuevo identificador
                $nuevoId = $folio . str_pad($nextNumber, 2, '0', STR_PAD_LEFT);
            
                return response()->json(["integrantes" => $integrante, 'leerintegrantes' => $nuevoId, 'integrantesidentitario'=>$integranteidentitario]);
            }
            
            

    public function fc_guardarintegrante(Request $request){
      $data = $request->all()['data'];
      $dataWithoutId = Arr::except($data, ['idintegrante', 'folio',]);
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

  public function fc_guardaridentitario(Request $request){

    $data = $request->all()['data'];
    $dataWithoutId = Arr::except($data, ['idintegrante', 'folio',]);
    $folio = $data['folio'];
    $idintegrante = $data['idintegrante'];
    $now = Carbon::now();

    // Añadir created_at y updated_at
    $dataWithoutId['updated_at'] = $now;
    $exists2 = DB::table('dbmetodologia.t1_integrantesidentitario')
    ->where('idintegrante', $idintegrante)
    ->where('folio', $folio)
    ->exists();

    if (!$exists2) {
        $dataWithoutId['created_at'] = $now;
    }

        DB::table('dbmetodologia.t1_integrantesidentitario')->updateOrInsert(
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
