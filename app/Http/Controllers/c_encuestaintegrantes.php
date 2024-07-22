<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_login;
use App\Models\visitaslineas\m_l1e1;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class c_encuestaintegrantes extends Controller
{
    public function fc_encuestaintegrantes(){
      $modelo= new m_l1e1();
      $preguntas=$modelo->m_leerrespuestas();
      $barrios= $modelo->m_leerbarrios();
      $comunas= $modelo->m_leercomunas();
   //   $lecpaises= $modelo->m_leerpaises();


      
      $sino = '<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id == '1' || $value->id == '2') {
            $sino .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }
      //   $paises = '<option value="">Seleccione </option>';
      //   foreach ($lecpaises as $value) {
      //         $paises .= '<option value="' . $value->codigo . '">' . $value->pais . '</option>';
      // }



      $regimendesalud='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '43' && $value->id <= '46') {
            $regimendesalud .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

      $acceso3 = '';
      foreach ($preguntas as $value) {
          if ($value->id >= '47' && $value->id <= '61') {
              $acceso3 .= '<div class="acceso3' . $value->id . '" >
              <label class="form-check-label acceso3' . $value->id . '"  for="acceso3' . $value->id . '">' . $value->pregunta . '</label>
              <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso3' . $value->id . '" value="' . $value->id . '" respuesta="SI" required >
              </div>';
          }
      }
      $tipodediscapacidad='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '61' && $value->id <= '68') {
            $tipodediscapacidad .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }
      $atenciondiscapacidad='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '69' && $value->id <= '70') {
            $atenciondiscapacidad .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

      $consumospa3='';
      foreach ($preguntas as $value) {
          if ($value->id >= '71' && $value->id <= '74') {
            $consumospa3 .=     '<div class="consumospa3' . $value->id . '">
              <label class="form-check-label consumospa3' . $value->id . '"  for="consumospa3' . $value->id . '">' . $value->pregunta . '</label>
              <input class="form-check-input" type="checkbox" name="consumospa3[]" id="consumospa3' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
              </div>';
          }
      }


      $consumospa4='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '75' && $value->id <= '76') {
            $consumospa4 .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

      $consumospa5='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '77' && $value->id <= '80') {
            $consumospa5 .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

      $consumospa6='';
      foreach ($preguntas as $value) {
        if ($value->id >= '81' && $value->id <= '86') {
          $consumospa6 .=  '<div class="consumospa6' . $value->id . '">
          <label class="form-check-label consumospa6' . $value->id . '"  for="consumospa6' . $value->id . '">' . $value->pregunta . '</label>
          <input class="form-check-input" type="checkbox" name="consumospa6[]" id="consumospa6' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
          </div>';
    }
      }

      $psicosocial1='';
      foreach ($preguntas as $value) {
        if ($value->id >= '87' && $value->id <= '91') {
          $psicosocial1 .=  '<div class="psicosocial1' . $value->id . '">
          <label class="form-check-label psicosocial1' . $value->id . '"  for="psicosocial1' . $value->id . '">' . $value->pregunta . '</label>
          <input class="form-check-input" type="checkbox" name="psicosocial1[]" id="psicosocial1' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
          </div>';
        }
      }
      $psicosocial2='';
      foreach ($preguntas as $value) {
        if ($value->id >= '92' && $value->id <= '106') {
          $psicosocial2 .= '<div class="psicosocial2' . $value->id . '">
          <label class="form-check-label psicosocial2' . $value->id . '"  for="psicosocial2' . $value->id . '">' . $value->pregunta . '</label>
          <input class="form-check-input" type="checkbox" name="psicosocial2[]" id="psicosocial2' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
          </div>';
        }
      }

      $niveleducativo1='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '107' && $value->id <= '122') {
            $niveleducativo1 .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }
      $niveleducativo2='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '123' && $value->id <= '133') {
            $niveleducativo2 .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

      $ingresos1='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '134' && $value->id <= '136') {
            $ingresos1 .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

      $trabajoinfantil='';
      foreach ($preguntas as $value) {
        if ($value->id >= '137' && $value->id <= '146') {
          $trabajoinfantil .= '<div class="trabajoinfantil' . $value->id . '">
          <label class="form-check-label trabajoinfantil' . $value->id . '"  for="trabajoinfantil' . $value->id . '">' . $value->pregunta . '</label>
          <input class="form-check-input" type="checkbox" name="trabajoinfantil[]" id="trabajoinfantil' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
          </div>';
        }
      }

      $ocupados='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '147' && $value->id <= '151') {
            $ocupados .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

      $desempleo='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '152' && $value->id <= '156') {
            $desempleo .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

      $bancarizacion='';
      foreach ($preguntas as $value) {
        if ($value->id >= '157' && $value->id <= '164') {
          $bancarizacion .= '<div class="bancarizacion' . $value->id . '">
          <label class="form-check-label bancarizacion' . $value->id . '"  for="bancarizacion' . $value->id . '">' . $value->pregunta . '</label>
          <input class="form-check-input" type="checkbox" name="bancarizacion[]" id="bancarizacion' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
          </div>';
        }
      }

      $mecanismosdeproteccionddhh3='';
      foreach ($preguntas as $value) {
        if ($value->id >= '165' && $value->id <= '178') {
          $mecanismosdeproteccionddhh3 .= '<div class="mecanismosdeproteccionddhh3' . $value->id . '">
          <label class="form-check-label mecanismosdeproteccionddhh3' . $value->id . '"  for="mecanismosdeproteccionddhh3' . $value->id . '">' . $value->pregunta . '</label>
          <input class="form-check-input" type="checkbox" name="mecanismosdeproteccionddhh3[]" id="mecanismosdeproteccionddhh3' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
          </div>';
        }
      }

              return view('v_encuestaintegrantes',['sino'=>$sino,
              'regimendesalud'=>$regimendesalud,'acceso3'=>$acceso3,
              'tipodediscapacidad'=>$tipodediscapacidad, 
              'atenciondiscapacidad'=>$atenciondiscapacidad, 
              'consumospa3'=>$consumospa3, 'consumospa4'=>$consumospa4,
              'consumospa5'=>$consumospa5,'consumospa6'=>$consumospa6,
              'psicosocial1'=>$psicosocial1,'psicosocial2'=>$psicosocial2,
              'niveleducativo1'=>$niveleducativo1,'niveleducativo2'=>$niveleducativo2,
            'ingresos1'=>$ingresos1,'trabajoinfantil'=>$trabajoinfantil,'ocupados'=>$ocupados,
            'desempleo'=>$desempleo,'bancarizacion'=>$bancarizacion,
            'mecanismosdeproteccionddhh3'=>$mecanismosdeproteccionddhh3
           ]);
            }

            public function fc_leerpreguntas(Request $request){
                $folio=$request->input('folio');
                $idintegrante=$request->input('idintegrante');
                $t1_integrantesfisicoyemocional = DB::table('t1_integrantesfisicoyemocional')
                          ->where('idintegrante', '=', $idintegrante)
                          ->first();

                $t1_integrantesintelectual = DB::table('t1_integrantesintelectual')
                        ->where('idintegrante', '=', $idintegrante)
                        ->first();

                $t1_integrantesfinanciero = DB::table('t1_integrantesfinanciero')
                ->where('idintegrante', '=', $idintegrante)
                ->first();

                $t1_integranteslegal = DB::table('t1_integranteslegal')
                ->where('idintegrante', '=', $idintegrante)
                ->first();

               // $imagenes=$request->input('idintegrante');
                $imagen = DB::table('t1_integranteshogar')
                        ->where('idintegrante', '=', $idintegrante)
                        ->first();
                $identitario = DB::table('t1_integrantesidentitario')
                ->where('idintegrante', '=', $idintegrante)
                ->first();
          
          
                return response()->json(["integrantes"=>$t1_integrantesfisicoyemocional, "integrantesintelectual"=>$t1_integrantesintelectual, 
                 "integrantesfinanciero"=>$t1_integrantesfinanciero, "integranteslegal"=>$t1_integranteslegal, "imagen"=>$imagen, "identitario"=>$identitario]);
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


    public function fc_fisicoyemocional(Request $request)
    {
        $data = $request->all()['data'];
        $dataWithoutId = Arr::except($data, ['idintegrante', 'folio']);
        $folio = $data['folio'];
        $idintegrante = $data['idintegrante'];
        $now = Carbon::now();
    
        // Convertir campos específicos a JSON si son arrays y limpiar los nombres de los campos
        $fieldsToConvertToJson = ['acceso3', 'consumospa3', 'psicosocial1', 'psicosocial2'];
        foreach ($fieldsToConvertToJson as $field) {
            if (isset($dataWithoutId[$field]) && is_array($dataWithoutId[$field])) {
                $dataWithoutId[$field] = json_encode($dataWithoutId[$field]);
            }
        }
    
        // Añadir created_at y updated_at
        $dataWithoutId['updated_at'] = $now;
    
        // Verificar si el registro existe para decidir si añadir created_at
        $exists = DB::table('dbmetodologia.t1_integrantesfisicoyemocional')
            ->where('idintegrante', $idintegrante)
            ->where('folio', $folio)
            ->exists();
    
        if (!$exists) {
            $dataWithoutId['created_at'] = $now;
        }
    
        // Verificar datos antes de la inserción
        foreach ($dataWithoutId as $key => $value) {
            if (is_array($value)) {
                $dataWithoutId[$key] = json_encode($value);
            }
        }
    
        // Insertar o actualizar el registro
        try {
            DB::table('dbmetodologia.t1_integrantesfisicoyemocional')->updateOrInsert(
                [
                    'idintegrante' => $idintegrante,
                    'folio' => $folio,
                ], // Condición para encontrar el registro existente
                $dataWithoutId
            );
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    
        return response()->json(["request" => $dataWithoutId]);
    }

    public function fc_intelectual(Request $request)
    {
        $data = $request->all()['data'];
        $dataWithoutId = Arr::except($data, ['idintegrante', 'folio']);
        $folio = $data['folio'];
        $idintegrante = $data['idintegrante'];
        $now = Carbon::now();
    
        // Convertir campos específicos a JSON si son arrays y limpiar los nombres de los campos
        $fieldsToConvertToJson = ['acceso3', 'consumospa3', 'psicosocial1', 'psicosocial2'];
        foreach ($fieldsToConvertToJson as $field) {
            if (isset($dataWithoutId[$field]) && is_array($dataWithoutId[$field])) {
                $dataWithoutId[$field] = json_encode($dataWithoutId[$field]);
            }
        }
    
        // Añadir created_at y updated_at
        $dataWithoutId['updated_at'] = $now;
    
        // Verificar si el registro existe para decidir si añadir created_at
        $exists = DB::table('dbmetodologia.t1_integrantesintelectual')
            ->where('idintegrante', $idintegrante)
            ->where('folio', $folio)
            ->exists();
    
        if (!$exists) {
            $dataWithoutId['created_at'] = $now;
        }
    
        // Verificar datos antes de la inserción
        foreach ($dataWithoutId as $key => $value) {
            if (is_array($value)) {
                $dataWithoutId[$key] = json_encode($value);
            }
        }
    
        // Insertar o actualizar el registro
        try {
            DB::table('dbmetodologia.t1_integrantesintelectual')->updateOrInsert(
                [
                    'idintegrante' => $idintegrante,
                    'folio' => $folio,
                ], // Condición para encontrar el registro existente
                $dataWithoutId
            );
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    
        return response()->json(["request" => $dataWithoutId]);
    }




    public function fc_financiero(Request $request)
    {
      $data = $request->all()['data'];
      $dataWithoutId = Arr::except($data, ['idintegrante', 'folio']);
      $folio = $data['folio'];
      $idintegrante = $data['idintegrante'];
      $now = Carbon::now();
  
      // Convertir campos específicos a JSON si son arrays y limpiar los nombres de los campos
      $fieldsToConvertToJson = ['trabajoinfantil','bancarizacion'];
      foreach ($fieldsToConvertToJson as $field) {
          if (isset($dataWithoutId[$field]) && is_array($dataWithoutId[$field])) {
              $dataWithoutId[$field] = json_encode($dataWithoutId[$field]);
          }
      }
  
      // Añadir created_at y updated_at
      $dataWithoutId['updated_at'] = $now;
  
      // Verificar si el registro existe para decidir si añadir created_at
      $exists = DB::table('dbmetodologia.t1_integrantesfinanciero')
          ->where('idintegrante', $idintegrante)
          ->where('folio', $folio)
          ->exists();
  
      if (!$exists) {
          $dataWithoutId['created_at'] = $now;
      }
  
      // Verificar datos antes de la inserción
      foreach ($dataWithoutId as $key => $value) {
          if (is_array($value)) {
              $dataWithoutId[$key] = json_encode($value);
          }
      }
  
      // Insertar o actualizar el registro
      try {
          DB::table('dbmetodologia.t1_integrantesfinanciero')->updateOrInsert(
              [
                  'idintegrante' => $idintegrante,
                  'folio' => $folio,
              ], // Condición para encontrar el registro existente
              $dataWithoutId
          );
      } catch (\Exception $e) {
          return response()->json(['error' => $e->getMessage()], 500);
      }
  
      return response()->json(["request" => $dataWithoutId]);
    }

    public function fc_legal(Request $request)
    {
        $data = $request->all()['data'];
        $dataWithoutId = Arr::except($data, ['idintegrante', 'folio']);
        $folio = $data['folio'];
        $idintegrante = $data['idintegrante'];
        $now = Carbon::now();
    
        // Convertir campos específicos a JSON si son arrays y limpiar los nombres de los campos
        $fieldsToConvertToJson = ['mecanismosdeproteccionddhh3'];
        foreach ($fieldsToConvertToJson as $field) {
            if (isset($data[$field]) && is_array($data[$field])) {
                $dataWithoutId[$field] = json_encode($data[$field]);
            }
        }
    
        // Añadir created_at y updated_at
        $dataWithoutId['updated_at'] = $now;
    
        // Verificar si el registro existe para decidir si añadir created_at
        $exists = DB::table('dbmetodologia.t1_integranteslegal')
            ->where('idintegrante', $idintegrante)
            ->where('folio', $folio)
            ->exists();
    
        if (!$exists) {
            $dataWithoutId['created_at'] = $now;
        }
    
        // Insertar o actualizar el registro
        try {
            DB::table('dbmetodologia.t1_integranteslegal')->updateOrInsert(
                [
                    'idintegrante' => $idintegrante,
                    'folio' => $folio,
                ], // Condición para encontrar el registro existente
                $dataWithoutId
            );
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    
        return response()->json(["request" => $dataWithoutId]);
    }
    



}
