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

// IR A LA VISTA BIENESTAR FISICO Y EMOCIONAL

public function fc_encuestaintegrantesfisicoemocional(Request $request, $cedula = null){
  if (!session('nombre')) {
    // Si no existe la sesión 'usuario', redirigir al login
    return redirect()->route('login');
}
    $modelo= new m_l1e1();
    $preguntas=$modelo->m_leerrespuestas();
    $barrios= $modelo->m_leerbarrios();
    $comunas= $modelo->m_leercomunas();

    $sino = '<option value="">Seleccione </option>';
    foreach ($preguntas as $value) {
      if ($value->id == '0' || $value->id == '1' || $value->id == '2') {
          $sino .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
      }
    }

    $regimendesalud='<option value="">Seleccione </option>';
    foreach ($preguntas as $value) {
      if ($value->id >= '43' && $value->id <= '46') {
          $regimendesalud .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
      }
    }

    $acceso3 = '';
    foreach ($preguntas as $value) {
        if ($value->id >= '47' && $value->id <= '60') {
            $acceso3 .= '<div class="acceso3' . $value->id . '" style="display:none">
            <label class="form-check-label acceso3' . $value->id . '"  for="acceso3' . $value->id . '">' . $value->pregunta . '</label>
            <input class="form-check-input" type="checkbox" name="acceso3[]" id="acceso3' . $value->id . '" value="' . $value->id . '" respuesta="SI"  style="display:none">
            </div>';
        }
    }
    $enfermedad='';
    foreach ($preguntas as $value) {
      if ($value->id >= '340' && $value->id <= '345') {
          $enfermedad .= '<div class="enfermedad' . $value->id . '" >
            <label class="form-check-label enfermedad' . $value->id . '"  for="enfermedad' . $value->id . '">' . $value->pregunta . '</label>
            <input class="form-check-input" type="checkbox" name="enfermedad[]" id="enfermedad' . $value->id . '" value="' . $value->id . '" respuesta="SI"  required>
            </div>';
      }
    }

    $tipodediscapacidad='<option value="">Seleccione </option>';
    foreach ($preguntas as $value) {
      if ($value->id == '0' || $value->id >= '62' && $value->id <= '68' || $value->id == '346') {
          $tipodediscapacidad .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
      }
    }
    $atenciondiscapacidad='<option value="">Seleccione </option>';
    foreach ($preguntas as $value) {
      if ($value->id == '0' || $value->id >= '69' && $value->id <= '70') {
          $atenciondiscapacidad .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
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
      if ($value->id == '0' || $value->id >= '75' && $value->id <= '76') {
          $consumospa4 .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
      }
    }
    $consumospa5='<option value="">Seleccione </option>';
    foreach ($preguntas as $value) {
      if ($value->id == '0' || $value->id >= '77' && $value->id <= '80') {
          $consumospa5 .= '<option value="' . $value->id . '" id="consumospa5' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
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
    $psicosocial1='<option value="">Seleccione </option>';
    foreach ($preguntas as $value) {
      if ($value->id >= '87' && $value->id <= '91') {
        $psicosocial1 .= '<option value="' . $value->id . '" id="psicosocial1' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
      }
    }
    $psicosocial2='';
    foreach ($preguntas as $value) {
      if ($value->id >= '92' && $value->id <= '106' || $value->id == '347') {
        $psicosocial2 .= '<div class="psicosocial2' . $value->id . '">
        <label class="form-check-label psicosocial2' . $value->id . '"  for="psicosocial2' . $value->id . '">' . $value->pregunta . '</label>
        <input class="form-check-input" type="checkbox" name="psicosocial2[]" id="psicosocial2' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
        </div>';
      }
    }
            return view('encuestaintegrantes/v_encuestaintegrantesfisicoemocional',['sino'=>$sino,
            'regimendesalud'=>$regimendesalud,'acceso3'=>$acceso3,'enfermedad'=>$enfermedad,
            'tipodediscapacidad'=>$tipodediscapacidad, 
            'atenciondiscapacidad'=>$atenciondiscapacidad, 
            'consumospa3'=>$consumospa3, 'consumospa4'=>$consumospa4,
            'consumospa5'=>$consumospa5,'consumospa6'=>$consumospa6,
            'psicosocial1'=>$psicosocial1,'psicosocial2'=>$psicosocial2,
            'foliomenu'=>decrypt($cedula), 'variable'=>$cedula
         ]);
          }


// VISTA BIENESTAR INTELECTUAL

    public function fc_encuestaintegrantesintelectual(Request $request, $cedula = null){
      $modelo= new m_l1e1();
      $preguntas=$modelo->m_leerrespuestas();

      $sino = '<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id == '0' || $value->id == '1' || $value->id == '2') {
            $sino .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

      $niveleducativo1='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '107' && $value->id <= '122' || $value->id == '348' || $value->id == '370') {
            $niveleducativo1 .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }
      $niveleducativo2='<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id == '0' ||  $value->id >= '123' && $value->id <= '133') {
            $niveleducativo2 .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
        }
      }

              return view('encuestaintegrantes/v_encuestaintegrantesintelectual',['sino'=>$sino,
              'niveleducativo1'=>$niveleducativo1,'niveleducativo2'=>$niveleducativo2,
              'foliomenu'=>decrypt($cedula), 'variable'=>$cedula
           ]);
  }


/// BIENESTAR FINANCIERO VISTA 

public function fc_encuestaintegrantesfinanciero(Request $request, $cedula = null){
    $modelo= new m_l1e1();
    $preguntas=$modelo->m_leerrespuestas();
    $barrios= $modelo->m_leerbarrios();
    $comunas= $modelo->m_leercomunas();

    $sino = '<option value="">Seleccione </option>';
    foreach ($preguntas as $value) {
      if ($value->id == '0' || $value->id == '1' || $value->id == '2') {
          $sino .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
      }
    }
    $ingresos1='<option value="">Seleccione </option>';
    foreach ($preguntas as $value) {
      if ($value->id == '0' || $value->id >= '134' && $value->id <= '136') {
          $ingresos1 .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
      }
    }
    // Para listar alfabeticamente
    $allowed_idstrabajoinfantil = [137, 138, 139, 140, 141,349 ,142, 143, 144, 145];
    foreach ($allowed_idstrabajoinfantil as $id) { foreach ($preguntas as $value) { if ($value->id == $id) {   $sorted_preguntas[] = $value;  break;  } } }
  // 
    $trabajoinfantil='';
    foreach ($sorted_preguntas as $value) { 
      $trabajoinfantil .= '<div class="trabajoinfantil' . $value->id . '">
        <label class="form-check-label trabajoinfantil' . $value->id . '"  for="trabajoinfantil' . $value->id . '">' . $value->pregunta . '</label>
        <input class="form-check-input" type="checkbox" name="trabajoinfantil[]" id="trabajoinfantil' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
        </div>';
    }

    $allowed_idsgeneraciondeingresos = [0, 147, 148, 351,352 ,353, 354,355, 149, 150, 151];
    foreach ($allowed_idsgeneraciondeingresos as $id) { foreach ($preguntas as $value) { if ($value->id == $id) {   $sorted_preguntasgeneracion[] = $value;  break;  } } }

    $generaciondeingresos='<option value="">Seleccione </option>';
    foreach ($sorted_preguntasgeneracion as $value) {
          $generaciondeingresos .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
    }

    $desempleo='<option value="">Seleccione </option>';
    foreach ($preguntas as $value) {
      if ($value->id == '0' || $value->id >= '152' && $value->id <= '156') {
          $desempleo .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
      }
    }

    $emprendimiento1='<option value="">Seleccione </option>';
    foreach ($preguntas as $value) {
      if ($value->id == '0' || $value->id >= '356' && $value->id <= '359') {
          $emprendimiento1 .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
      }
    }

    $bancarizacion='';
    foreach ($preguntas as $value) {
      if ($value->id >= '157' && $value->id <= '164' || $value->id== '371') {
        $bancarizacion .= '<div class="bancarizacion' . $value->id . '">
        <label class="form-check-label bancarizacion' . $value->id . '"  for="bancarizacion' . $value->id . '">' . $value->pregunta . '</label>
        <input class="form-check-input" type="checkbox" name="bancarizacion[]" id="bancarizacion' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
        </div>';
      }
    }
            return view('/encuestaintegrantes/v_encuestaintegrantesfinanciero',['sino'=>$sino,
          'ingresos1'=>$ingresos1,'trabajoinfantil'=>$trabajoinfantil,'generaciondeingresos'=>$generaciondeingresos,
          'desempleo'=>$desempleo,'bancarizacion'=>$bancarizacion, 'emprendimiento1'=>$emprendimiento1,
          'foliomenu'=>decrypt($cedula), 'variable'=>$cedula
        
        ]);
          }
//CARGA VISTA LEGAL

          public function fc_encuestaintegranteslegal(Request $request, $cedula = null){
            $modelo= new m_l1e1();
            $preguntas=$modelo->m_leerrespuestas();
      
            $sino = '<option value="">Seleccione </option>';
            foreach ($preguntas as $value) {
              if ($value->id == '0' || $value->id == '1' || $value->id == '2') {
                  $sino .= '<option value="' . $value->id . '" class="noaplica' . $value->id . '">' . $value->pregunta . '</option>';
              }
            }
      
            $mecanismosdeproteccionddhh3='';
            foreach ($preguntas as $value) {
              if ($value->id >= '165' && $value->id <= '178' || $value->id == '360' || $value->id == '369') {
                $mecanismosdeproteccionddhh3 .= '<div class="mecanismosdeproteccionddhh3' . $value->id . '">
                <label class="form-check-label mecanismosdeproteccionddhh3' . $value->id . '"  for="mecanismosdeproteccionddhh3' . $value->id . '">' . $value->pregunta . '</label>
                <input class="form-check-input" type="checkbox" name="mecanismosdeproteccionddhh3[]" id="mecanismosdeproteccionddhh3' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
                </div>';
              }
            }
      
                    return view('/encuestaintegrantes/v_encuestaintegranteslegal',['sino'=>$sino,
                  'mecanismosdeproteccionddhh3'=>$mecanismosdeproteccionddhh3,
                  'foliomenu'=>decrypt($cedula), 'variable'=>$cedula
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
         $dataWithoutId['sincro'] = 0;
          $dataWithoutId['estado'] = 1;
    
        // Verificar si el registro existe para decidir si añadir created_at
        $exists = DB::table('t1_integrantesfisicoyemocional')
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
            DB::table('t1_integrantesfisicoyemocional')->updateOrInsert(
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
         $dataWithoutId['sincro'] = 0;
          $dataWithoutId['estado'] = 1;
    
        // Verificar si el registro existe para decidir si añadir created_at
        $exists = DB::table('t1_integrantesintelectual')
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
            DB::table('t1_integrantesintelectual')->updateOrInsert(
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
       $dataWithoutId['sincro'] = 0;
        $dataWithoutId['estado'] = 1;
  
      // Verificar si el registro existe para decidir si añadir created_at
      $exists = DB::table('t1_integrantesfinanciero')
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
          DB::table('t1_integrantesfinanciero')->updateOrInsert(
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
         $dataWithoutId['sincro'] = 0;
          $dataWithoutId['estado'] = 1;
    
        // Verificar si el registro existe para decidir si añadir created_at
        $exists = DB::table('t1_integranteslegal')
            ->where('idintegrante', $idintegrante)
            ->where('folio', $folio)
            ->exists();
    
        if (!$exists) {
            $dataWithoutId['created_at'] = $now;
        }
    
        // Insertar o actualizar el registro
        try {
            DB::table('t1_integranteslegal')->updateOrInsert(
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
