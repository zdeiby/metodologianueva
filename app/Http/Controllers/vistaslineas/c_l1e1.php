<?php

namespace App\Http\Controllers\vistaslineas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_login;
use App\Models\visitaslineas\m_l1e1;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class c_l1e1 extends Controller
{

    public function fc_encuestahogarhabitabilidad(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
        $modelo= new m_l1e1();
        $preguntas=$modelo->m_leerrespuestas();
        $leerbarrios= $modelo->m_leerbarrios();
        $leercomunas= $modelo->m_leercomunas();
        $leerintegrantes= $modelo->m_leerintegrantes(decrypt($folio));
     
  
      
          $sino = '<option value="">Seleccione </option><option style="display:none" value="0">NO APLICA</option>';
          foreach ($preguntas as $value) {
            if ($value->id >= '1' && $value->id <= '2') {
                $sino .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
            }
        }
  
  
          $tipovivienda='<option value="">Seleccione </option>';
          foreach ($preguntas as $value) {
            if ($value->id >= '210' && $value->id <= '214') {
                $tipovivienda .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
            }
          }
  
          $materialesdeparedes='<option value="">Seleccione </option>';
          foreach ($preguntas as $value) {
            if ($value->id >= '215' && $value->id <= '222') {
                $materialesdeparedes .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
            }
          }
          $materialesdetecho='<option value="">Seleccione </option>';
          foreach ($preguntas as $value) {
            if ($value->id >= '223' && $value->id <= '233') {
                $materialesdetecho .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
            }
          }
          $materialsuelo='<option value="">Seleccione </option>';
          foreach ($preguntas as $value) {
            if ($value->id >= '234' && $value->id <= '241') {
                $materialsuelo .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
            }
          }
  
          $serviciospublicos = '';
          foreach ($preguntas as $value) {
              if ($value->id >= '242' && $value->id <= '247') {
                  $serviciospublicos .= '<div class="serviciospublicos' . $value->id . '">
                  <label class="form-check-label serviciospublicos' . $value->id . '"  for="serviciospublicos' . $value->id . '">' . $value->pregunta . '</label>
                  <input class="form-check-input" type="checkbox" name="serviciospublicos[]" id="serviciospublicos' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
                  </div>';
              }
          }
          $telecomunicaciones = '';
          foreach ($preguntas as $value) {
              if ($value->id >= '248' && $value->id <= '255') {
                  $telecomunicaciones .= '<div class="telecomunicaciones' . $value->id . '">
                  <label class="form-check-label telecomunicaciones' . $value->id . '"  for="telecomunicaciones' . $value->id . '">' . $value->pregunta . '</label>
                  <input class="form-check-input" type="checkbox" name="telecomunicaciones[]" id="telecomunicaciones' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
                  </div>';
              }
          }
  
          $tipodetenenciau = '<option value="">Seleccione </option>';
          foreach ($preguntas as $value) {
              if ($value->id >= '256' && $value->id <= '261') {
                $tipodetenenciau .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
  
              }
          }
          $documentodepropiedad = '<option value="">Seleccione </option>';
          foreach ($preguntas as $value) {
              if ($value->id == '0' || $value->id >= '262' && $value->id <= '264') {
                  $documentodepropiedad .= '<option value="' . $value->id . '" class="noaplica'. $value->id.'">' . $value->pregunta . '</option>';
              }
          }
  
  
  
    
          return view('vistaslineas/v_encuestahogarhabitabilidad',["variable"=>$folio, 
          'sino'=>$sino,
           'tipovivienda'=>$tipovivienda,'materialesdeparedes'=>$materialesdeparedes,
        'materialestecho'=>$materialesdetecho,'materialsuelo'=>$materialsuelo,
        'serviciospublicos'=>$serviciospublicos,'telecomunicaciones'=>$telecomunicaciones,'tipodetenenciau'=>$tipodetenenciau,
        'documentodepropiedad'=>$documentodepropiedad,
      ]);
        }
  
     

    
    public function fc_encuestahogarconformacionfamiliar(Request $request,$folio){
      $modelo= new m_l1e1();
      $preguntas=$modelo->m_leerrespuestas();

      $exists = DB::table('t1_hogardatosgeograficos')
      ->where('folio', $folio)
      ->exists();
      $leerintegrantes= $modelo->m_leerintegrantes(decrypt($folio));

      $existeMenorDe59 = DB::table('t1_integranteshogar') 
      -> where('folio', decrypt($folio))
      ->where('edad', '<', 59)
      ->exists();
      $existeMenorDe59 ? 1 : 0;

      $tipologia = '<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '179' && $value->id <=  ($existeMenorDe59 == 1 ? '190' : '191')) {
            $tipologia .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
    }
        $sino = '<option value="">Seleccione </option><option style="display:none" value="0">NO APLICA</option>';
        foreach ($preguntas as $value) {
          if ($value->id >= '1' && $value->id <= '2') {
              $sino .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
          }
      }

      $integrantes = '';
      foreach ($leerintegrantes as $value) {
          $integrantes .= '<div class="laboresdecuidado' . $value->idintegrante . '">
              <label class="form-check-label tiempolibre' . $value->idintegrante . '"  for="laboresdecuidado' . $value->idintegrante . '">' . $value->nombre1 .' '. $value->nombre2 .' '. $value->apellido1 .' '. $value->apellido2 . '</label>
              <input class="form-check-input" type="checkbox" name="laboresdecuidado[]" id="laboresdecuidado' . $value->idintegrante . '" value="' . $value->idintegrante . '" respuesta="SI" required>
              </div>';
        }

       

        $condicionespecial = '';  // 361
        $identidad_ids = [ 192, 193, 194, 195,361, 196, ];
        foreach ($identidad_ids as $id) {
          foreach ($preguntas as $value) {
              if ($value->id == $id) {
                  $sorted_preguntas[] = $value;
                  break;
              }
          }
      }
       foreach ($sorted_preguntas as $value) {
        $integrantes2 = '';
        if ($value->id != 196) {
            foreach ($leerintegrantes as $value2) {
                $integrantes2 .= '<div class="integrantes2' . $value2->idintegrante . '">
                    <label class="form-check-label tiempolibre' . $value2->idintegrante . '" for="integrantes2' . $value2->idintegrante . '">' . $value2->nombre1 .' '. $value2->nombre2 .' '. $value2->apellido1 .' '. $value2->apellido2 . '</label>
                    <input class="integrante form-check-input integrante'.$value->id.'" type="checkbox" id="integrantes2' . $value2->idintegrante . '" value="' . $value2->idintegrante . '" respuesta="SI" onchange="verificarSeleccionIntegrantes(' . $value->id . ')">
                </div>';
            }
            }
        $condicionespecial .= '<div class="condicionespecial' . $value->id . '">
            <input class="form-check-input" type="checkbox" name="condicionespecial[]" id="condicionespecial' . $value->id . '" value="' . $value->id . '" respuesta="SI" required '.(($value->id != 196)?'onchange="verificarIntegrantes(this, ' . $value->id . ')"':'').'>
            <label class="form-check-label" for="condicionespecial' . $value->id . '">' . $value->pregunta . '</label>
            <div class="integrantes-container" id="integrantes-condicionespecial' . $value->id . '-container" style="display: none;">
            ' . $integrantes2 . '
                </div>
            </div>';
        }


      $familiacuidadora = '';
      foreach ($preguntas as $value) {
          if ($value->id >= '197' && $value->id <= '200') {
              $familiacuidadora .= '<div class="familiacuidadora' . $value->id . '">
              <label class="form-check-label familiacuidadora' . $value->id . '"  for="familiacuidadora' . $value->id . '">' . $value->pregunta . '</label>
              <input class="form-check-input" type="checkbox" name="familiacuidadora[]" id="familiacuidadora' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
              </div>';
          }
      }


        return view('vistaslineas/v_encuestahogarconformacionfamiliar',["variable"=>$folio, 'tipologia'=>$tipologia,
        'sino'=>$sino,'condicionespecial'=>$condicionespecial, 
        'familiacuidadora'=>$familiacuidadora, 
      'integrantes'=>$integrantes,
    ]);
      }

      public function fc_encuestahogardatosgeograficos(Request $request,$folio){
        $modelo= new m_l1e1();
        $preguntas=$modelo->m_leerrespuestas();
        $leerbarrios= $modelo->m_leerbarrios();
        $leercomunas= $modelo->m_leercomunas();
        $leerintegrantes= $modelo->m_leerintegrantes(decrypt($folio));
  
        $tipologia = '<option value="">Seleccione </option>';
        foreach ($preguntas as $value) {
          if ($value->id >= '179' && $value->id <= '190') {
              $tipologia .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
          }
      }
          $sino = '<option value="">Seleccione </option><option style="display:none" value="0">NO APLICA</option>';
          foreach ($preguntas as $value) {
            if ($value->id >= '1' && $value->id <= '2') {
                $sino .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
            }
        }
  
          $barrios = '<option value="">Seleccione </option>';
          foreach ($leerbarrios as $value) {
            $barrios .= '<option value="' . $value->codigo . '">' . $value->barriovereda . '</option>';
          }
  
          $comunas = '<option value="">Seleccione </option>';
          foreach ($leercomunas as $value) {
              $comunas.= '<option value="' . $value->codigo . '">' . $value->comuna . '</option>';
          }
  
          $estrato='<option value="">Seleccione </option>';
          foreach ($preguntas as $value) {
            if ($value->id >= '201' && $value->id <= '207') {
                $estrato .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
            }
          }
  
          $ubicacion='<option value="">Seleccione </option>';
          foreach ($preguntas as $value) {
            if ($value->id >= '208' && $value->id <= '209') {
                $ubicacion .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
            }
          }
  
  
    
          return view('vistaslineas/v_encuestahogardatosgeograficos',["variable"=>$folio,
          'sino'=>$sino,
          "comunas"=>$comunas,"barrios"=>$barrios,'estrato'=>$estrato,'ubicacion'=>$ubicacion, 
      ]);
        }


         
    public function fc_encuestahogaralimentos(Request $request,$folio){
        $modelo= new m_l1e1();
        $preguntas=$modelo->m_leerrespuestas();
  
        $sino = '<option value="">Seleccione </option><option style="display:none" value="0">NO APLICA</option>';
        foreach ($preguntas as $value) {
          if ($value->id >= '1' && $value->id <= '2') {
              $sino .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
          }
      }
          $numerodecomidas='<option value="">Seleccione </option>';
          foreach ($preguntas as $value) {
            if ($value->id >= '123' && $value->id <= '130') {
                $numerodecomidas .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
            }
          }

          return view('vistaslineas/v_encuestahogaralimentos',["variable"=>$folio, 
          'sino'=>$sino,'numerodecomidas'=>$numerodecomidas,
      ]);
        }




      public function fc_hogarentornofamiliar(Request $request,$folio){
        $modelo= new m_l1e1();
        $preguntas=$modelo->m_leerrespuestas();
        $leerintegrantes= $modelo->m_leerintegrantes(decrypt($folio));
      
          $sino = '<option value="">Seleccione </option>';
          foreach ($preguntas as $value) {
            if ( $value->id == '0' || $value->id >= '1' && $value->id <= '2') {
                $sino .= '<option value="' . $value->id . '" class="noaplica'. $value->id.'">' . $value->pregunta . '</option>';
            }
        }
  
       
          $integrantes2 = '';
          foreach ($leerintegrantes as $value) {
              $integrantes2 .= '<div class="integrantes2' . $value->idintegrante . '">
                  <label class="form-check-label tiempolibre' . $value->idintegrante . '"  for="integrantes2' . $value->idintegrante . '">' . $value->nombre1 .' '. $value->nombre2 .' '. $value->apellido1 .' '. $value->apellido2 . '</label>
                  <input class="form-check-input" type="checkbox" edad="'.$value->edad.'" id="integrantes2' . $value->idintegrante . '" value="' . $value->idintegrante . '" respuesta="SI" >
                  </div>';
            }

            $factoresderiesgovef_ids = [265, 266, 267, 268,270, 271, 272,273,274,275,276,277,362,363,364,365,366,367,278];   
            foreach ($factoresderiesgovef_ids as $id) { foreach ($preguntas as $value) { if ($value->id == $id) {              $sorted_preguntas[] = $value;              break;          }      }  }
         
            $factoresderiesgovef = '';
          foreach ($sorted_preguntas as $value) {
                  $factoresderiesgovef .= '<div class="factoresderiesgovef' . $value->id . '">
                  <input class="form-check-input" type="checkbox" name="factoresderiesgovef[]" id="factoresderiesgovef' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>                
                  <label class="form-check-label factoresderiesgovef' . $value->id . '"  for="factoresderiesgovef' . $value->id . '">' . $value->pregunta . '</label>
                      <div class="integrantes-container" id="integrantes-factoresderiesgovef' . $value->id . '-container" style="display: none;">
                          ' . $integrantes2 . '
                      </div>
                  </div>';
          }
  

          $vefviolenciaenelentorno = '';
          foreach ($preguntas as $value) {
              if ($value->id >= '279' && $value->id <= '285') {
                  $vefviolenciaenelentorno .= '<div class="vefviolenciaenelentorno' . $value->id . '">
                  <label class="form-check-label vefviolenciaenelentorno' . $value->id . '"  for="vefviolenciaenelentorno' . $value->id . '">' . $value->pregunta . '</label>
                  <input class="form-check-input" type="checkbox" name="vefviolenciaenelentorno[]" id="vefviolenciaenelentorno' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
                  </div>';
              }
          }
  
          $rutasvef3 = '';
          foreach ($preguntas as $value) {
              if ($value->id >= '286' && $value->id <= '294') {
                  $rutasvef3 .= '<div class="rutasvef3' . $value->id . '">
                  <label class="form-check-label rutasvef3' . $value->id . '"  for="rutasvef3' . $value->id . '">' . $value->pregunta . '</label>
                  <input class="form-check-input" type="checkbox" name="rutasvef3[]" id="rutasvef3' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
                  </div>';
              }
          } $planeacionfinanciera4 = '';
          foreach ($preguntas as $value) {
              if ($value->id >= '295' && $value->id <= '297' || $value->id == '368') {
                  $planeacionfinanciera4 .= '<div class="planeacionfinanciera4' . $value->id . '">
                  <label class="form-check-label planeacionfinanciera4' . $value->id . '"  for="planeacionfinanciera4' . $value->id . '">' . $value->pregunta . '</label>
                  <input class="form-check-input" type="checkbox" name="planeacionfinanciera4[]" id="planeacionfinanciera4' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
                  </div>';
              }
          } $disciplinapositiva = '';
          foreach ($preguntas as $value) {
              if ($value->id >= '298' && $value->id <= '304') {
                  $disciplinapositiva .= '<div class="disciplinapositiva' . $value->id . '">
                  <label class="form-check-label disciplinapositiva' . $value->id . '"  for="disciplinapositiva' . $value->id . '">' . $value->pregunta . '</label>
                  <input class="form-check-input" type="checkbox" name="disciplinapositiva[]" id="disciplinapositiva' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
                  </div>';
              }
          } $tiempolibre = '';
          foreach ($preguntas as $value) {
              if ($value->id >= '305' && $value->id <= '309') {
                  $tiempolibre .= '<div class="tiempolibre' . $value->id . '">
                  <label class="form-check-label tiempolibre' . $value->id . '"  for="tiempolibre' . $value->id . '">' . $value->pregunta . '</label>
                  <input class="form-check-input" type="checkbox" name="tiempolibre[]" id="tiempolibre' . $value->id . '" value="' . $value->id . '" respuesta="SI" required>
                  </div>';
              }
          }
       
  
    
          return view('vistaslineas/v_encuestahogarentornofamiliar',["variable"=>$folio,'sino'=>$sino, 
        'factoresderiesgovef'=>$factoresderiesgovef,
        'vefviolenciaenelentorno'=>$vefviolenciaenelentorno,
        'rutasvef3'=>$rutasvef3,
        'planeacionfinanciera4'=>$planeacionfinanciera4,
        'disciplinapositiva'=>$disciplinapositiva,
        'tiempolibre'=>$tiempolibre,
      ]);
        }

    public function fc_leerpreguntashogarfamiliar(Request $request){
        $folio=$request->input('folio');
        $t1_hogarconformacionfamiliar = DB::table('t1_hogarconformacionfamiliar')
                  ->where('folio', '=', $folio)
                  ->first();

        return response()->json(["hogarconformacionfamiliar"=>$t1_hogarconformacionfamiliar,
        ]);
    }

    public function fc_leerpreguntashogareconomicos(Request $request){
        $folio=$request->input('folio');
    
        $t1_hogardatosgeograficos = DB::table('t1_hogardatosgeograficos')
                ->where('folio', '=', $folio)
                ->first();

        return response()->json([ "hogardatoseconomicos"=>$t1_hogardatosgeograficos, 
        ]);
    }

    public function fc_leerpreguntashogarhabitabilidad(Request $request){
        $folio=$request->input('folio');
      
        $t1_hogarcondicioneshabitabilidad = DB::table('t1_hogarcondicioneshabitabilidad')
        ->where('folio', '=', $folio)
        ->first();
  
        return response()->json([
         "hogarcondicioneshabitabilidad"=>$t1_hogarcondicioneshabitabilidad, 
        ]);
    }

    public function fc_leerpreguntashogaralimentos(Request $request){
        $folio=$request->input('folio');
        $t1_hogarcondicionesalimentarias = DB::table('t1_hogarcondicionesalimentarias')
        ->where('folio', '=', $folio)
        ->first();
  
        return response()->json(["hogarcondicionesalimentarias"=>$t1_hogarcondicionesalimentarias, 
        ]);
    }

    public function fc_leerpreguntashogarentornofamiliar(Request $request){
        $folio=$request->input('folio');
        $t1_hogarentornofamiliar = DB::table('t1_hogarentornofamiliar')
        ->where('folio', '=', $folio)
        ->first();

  
        return response()->json(["hogarentornofamiliar"=>$t1_hogarentornofamiliar ]);
    }


      public function fc_conformacionfamiliar(Request $request)
      {
          $data = $request->all()['data'];
          $dataWithoutId = Arr::except($data, ['folio']);
          $folio = $data['folio'];
          $now = Carbon::now();
      
           // Convertir campos específicos a JSON si son arrays y limpiar los nombres de los campos
           $fieldsToConvertToJson = ['condicionespecial', 'familiacuidadora'];
           foreach ($fieldsToConvertToJson as $field) {
               if (isset($dataWithoutId[$field]) && is_array($dataWithoutId[$field])) {
                   $dataWithoutId[$field] = json_encode($dataWithoutId[$field]);
               }
           }
      
        //   // Añadir created_at y updated_at
           $dataWithoutId['updated_at'] = $now;
            $dataWithoutId['sincro'] = 0;
            $dataWithoutId['estado'] = 1;
      
           // Verificar si el registro existe para decidir si añadir created_at
           $exists = DB::table('t1_hogarconformacionfamiliar')
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
               DB::table('t1_hogarconformacionfamiliar')->updateOrInsert(
                   [
                       'folio' => $folio,
                   ], // Condición para encontrar el registro existente
                   $dataWithoutId
               );
           } catch (\Exception $e) {
               return response()->json(['error' => $e->getMessage()], 500);
           }
      
          return response()->json(["request" => 'ok']);
      }

      public function fc_datoseconomicos(Request $request)
      {
          $data = $request->all()['data'];
          $dataWithoutId = Arr::except($data, ['folio']);
          $folio = $data['folio'];
          $now = Carbon::now();
      
           // Convertir campos específicos a JSON si son arrays y limpiar los nombres de los campos
           $fieldsToConvertToJson = ['condicionespecial', 'familiacuidadora'];
           foreach ($fieldsToConvertToJson as $field) {
               if (isset($dataWithoutId[$field]) && is_array($dataWithoutId[$field])) {
                   $dataWithoutId[$field] = json_encode($dataWithoutId[$field]);
               }
           }
      
        //   // Añadir created_at y updated_at
           $dataWithoutId['updated_at'] = $now;
            $dataWithoutId['sincro'] = 0;
            $dataWithoutId['estado'] = 1;
      
           // Verificar si el registro existe para decidir si añadir created_at
           $exists = DB::table('t1_hogardatosgeograficos')
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
               DB::table('t1_hogardatosgeograficos')->updateOrInsert(
                   [
                       'folio' => $folio,
                   ], // Condición para encontrar el registro existente
                   $dataWithoutId
               );
           } catch (\Exception $e) {
               return response()->json(['error' => $e->getMessage()], 500);
           }
      
          return response()->json(["request" => 'ok']);
      }


      public function fc_condicioneshabitabilidad(Request $request)
      {
          $data = $request->all()['data'];
          $dataWithoutId = Arr::except($data, ['folio']);
          $folio = $data['folio'];
          $now = Carbon::now();
      
           // Convertir campos específicos a JSON si son arrays y limpiar los nombres de los campos
           $fieldsToConvertToJson = ['serviciospublicos', 'telecomunicaciones', 'documentodepropiedad'];
           foreach ($fieldsToConvertToJson as $field) {
               if (isset($dataWithoutId[$field]) && is_array($dataWithoutId[$field])) {
                   $dataWithoutId[$field] = json_encode($dataWithoutId[$field]);
               }
           }
      
        //   // Añadir created_at y updated_at
           $dataWithoutId['updated_at'] = $now;
            $dataWithoutId['sincro'] = 0;
            $dataWithoutId['estado'] = 1;
      
           // Verificar si el registro existe para decidir si añadir created_at
           $exists = DB::table('t1_hogarcondicioneshabitabilidad')
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
               DB::table('t1_hogarcondicioneshabitabilidad')->updateOrInsert(
                   [
                       'folio' => $folio,
                   ], // Condición para encontrar el registro existente
                   $dataWithoutId
               );
           } catch (\Exception $e) {
               return response()->json(['error' => $e->getMessage()], 500);
           }
      
          return response()->json(["request" => 'ok']);
      }

      public function fc_accesoalimentos(Request $request)
      {
          $data = $request->all()['data'];
          $dataWithoutId = Arr::except($data, ['folio']);
          $folio = $data['folio'];
          $now = Carbon::now();
      
           // Convertir campos específicos a JSON si son arrays y limpiar los nombres de los campos
           $fieldsToConvertToJson = ['condicionespecial', 'familiacuidadora'];
           foreach ($fieldsToConvertToJson as $field) {
               if (isset($dataWithoutId[$field]) && is_array($dataWithoutId[$field])) {
                   $dataWithoutId[$field] = json_encode($dataWithoutId[$field]);
               }
           }
      
        //   // Añadir created_at y updated_at
           $dataWithoutId['updated_at'] = $now;
            $dataWithoutId['sincro'] = 0;
            $dataWithoutId['estado'] = 1;
      
           // Verificar si el registro existe para decidir si añadir created_at
           $exists = DB::table('t1_hogarcondicionesalimentarias')
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
               DB::table('t1_hogarcondicionesalimentarias')->updateOrInsert(
                   [
                       'folio' => $folio,
                   ], // Condición para encontrar el registro existente
                   $dataWithoutId
               );
           } catch (\Exception $e) {
               return response()->json(['error' => $e->getMessage()], 500);
           }
      
          return response()->json(["request" => 'ok']);
      }

      public function fc_entornofamiliar(Request $request)
      {
          $data = $request->all()['data'];
          $dataWithoutId = Arr::except($data, ['folio']);
          $folio = $data['folio'];
          $now = Carbon::now();


      
           // Convertir campos específicos a JSON si son arrays y limpiar los nombres de los campos
           $fieldsToConvertToJson = ['factoresderiesgovef', 'vefviolenciaenelentorno', 'rutasvef3'
           , 'planeacionfinanciera4', 'disciplinapositiva', 'tiempolibre'];
           foreach ($fieldsToConvertToJson as $field) {
               if (isset($dataWithoutId[$field]) && is_array($dataWithoutId[$field])) {
                   $dataWithoutId[$field] = json_encode($dataWithoutId[$field]);
               }
           }
      
        //   // Añadir created_at y updated_at
           $dataWithoutId['updated_at'] = $now;
            $dataWithoutId['sincro'] = 0;
            $dataWithoutId['estado'] = 1;
            
      
           // Verificar si el registro existe para decidir si añadir created_at
           $exists = DB::table('t1_hogarentornofamiliar')
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
               DB::table('t1_hogarentornofamiliar')->updateOrInsert(
                   [
                       'folio' => $folio,
                   ], // Condición para encontrar el registro existente
                   $dataWithoutId
               );
           } catch (\Exception $e) {
               return response()->json(['error' => $e->getMessage()], 500);
           }
      
          return response()->json(["request" => 'ok']);
      }

      public function fc_verbarrios(Request $request) {
         $comuna = $request->input('comuna');
        // $barriosselect = DB::table('t_barrios')
        //     ->where('comuna', $comuna)
        //     ->get();
        $modelo= new m_l1e1();
        $barriosselect=$modelo->m_verbarrios($comuna);
    
        $barrios = '<option value="">Seleccione</option>';
        foreach ($barriosselect as $value) {
            $barrios .= '<option value="' . $value->codigo . '">' . $value->barriovereda . '</option>';
        }
    
        return response()->json(['options' => $barrios]);
    }

    public function fc_agregarpasohogar(Request $request){
        $now = Carbon::now();
        $folio = $request->input('folio');
        $linea = 100;  // poner linea 
        $paso = 10030;  // poner paso
        $usuario = $request->input('usuario'); // Este campo no es clave primaria
    
        // Datos a insertar o actualizar
        $data = [
            'folio' => $folio,
            'linea' => $linea,
            'paso' => $paso,
            'usuario' => $usuario,
            'estado' => 1,
            'sincro' => 0,
            'updated_at' => $now
        ];
    
        // Verificar si el registro existe
        $exists = DB::table('t1_pasosvisita')
            ->where('folio', $folio)
            ->where('linea', $linea)
            ->where('paso', $paso)
            ->exists();
    
        if (!$exists) {
            // Si no existe, agregar created_at
            $data['created_at'] = $now;
        }
    
        // Usar updateOrInsert para guardar o actualizar el registro, sin incluir 'usuario' en las condiciones
        DB::table('t1_pasosvisita')->updateOrInsert(
            [
                'folio' => $folio,
                'linea' => $linea,
                'paso' => $paso,
            ],
            $data
        );


         DB::select('CALL sp_calcular_privaciones(?)', [$folio]);
         DB::select('CALL sp_casillamatriz(?)', [$folio]);

    
        return response()->json(['message' => $folio]);
      }

      public function fc_verficarestadosdehogar(Request $request){
        $folio = $request->input('folio');
        $resultados = DB::table('t1_hogarcondicionesalimentarias as t1')
        ->join('t1_hogarcondicioneshabitabilidad as t2', 't1.folio', '=', 't2.folio')
        ->join('t1_hogarconformacionfamiliar as t3', 't1.folio', '=', 't3.folio')
        ->join('t1_hogardatosgeograficos as t4', 't1.folio', '=', 't4.folio')
        ->join('t1_hogarentornofamiliar as t5', 't1.folio', '=', 't5.folio')
        ->where('t1.folio', $folio)
        ->select(
            't1.estado as estado1',
            't2.estado as estado2',
            't3.estado as estado3',
            't4.estado as estado4',
            't5.estado as estado5'
        )
        ->first();

        if (
            $resultados && 
            $resultados->estado1 == 1 && 
            $resultados->estado2 == 1 && 
            $resultados->estado3 == 1 && 
            $resultados->estado4 == 1 && 
            $resultados->estado5 == 1
        ) {
            return response()->json(['resultado' => 1]);
        } else {
            return response()->json(['resultado' => 0]);
        }
      }

    

    
}

