<?php

namespace App\Http\Controllers\vistaslineas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_login;
use App\Models\visitaslineas\m_l1e1;

class c_l1e1 extends Controller
{
    public function fc_l1e1(Request $request,$folio){
      $modelo= new m_l1e1();
      $preguntas=$modelo->m_leerrespuestas();
      $leerbarrios= $modelo->m_leerbarrios();
      $leercomunas= $modelo->m_leercomunas();

      $tipologia = '<option value="">Seleccione </option>';
      foreach ($preguntas as $value) {
        if ($value->id >= '179' && $value->id <= '190') {
            $tipologia .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
    }
        $sino = '<option value="">Seleccione </option>';
        foreach ($preguntas as $value) {
          if ($value->id >= '1' && $value->id <= '2') {
              $sino .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
          }
      }

      $condicionespecial = '';
      foreach ($preguntas as $value) {
          if ($value->id >= '191' && $value->id <= '196') {
              $condicionespecial .= '<div class="condicionespecial' . $value->id . '">
              <label class="form-check-label condicionespecial' . $value->id . '"  for="condicionespecial' . $value->id . '">' . $value->pregunta . '</label>
              <input class="form-check-input" type="checkbox" name="condicionespecial[]" id="condicionespecial' . $value->id . '" value="' . $value->id . '" respuesta="SI">
              </div>';
      }
      }
      $familiacuidadora = '';
      foreach ($preguntas as $value) {
          if ($value->id >= '197' && $value->id <= '200') {
              $familiacuidadora .= '<div class="familiacuidadora' . $value->id . '">
              <label class="form-check-label familiacuidadora' . $value->id . '"  for="familiacuidadora' . $value->id . '">' . $value->pregunta . '</label>
              <input class="form-check-input" type="checkbox" name="familiacuidadora[]" id="familiacuidadora' . $value->id . '" value="' . $value->id . '" respuesta="SI">
              </div>';
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
                <input class="form-check-input" type="checkbox" name="serviciospublicos[]" id="serviciospublicos' . $value->id . '" value="' . $value->id . '" respuesta="SI">
                </div>';
            }
        }
        $telecomunicaciones = '';
        foreach ($preguntas as $value) {
            if ($value->id >= '248' && $value->id <= '255') {
                $telecomunicaciones .= '<div class="telecomunicaciones' . $value->id . '">
                <label class="form-check-label telecomunicaciones' . $value->id . '"  for="telecomunicaciones' . $value->id . '">' . $value->pregunta . '</label>
                <input class="form-check-input" type="checkbox" name="telecomunicaciones[]" id="telecomunicaciones' . $value->id . '" value="' . $value->id . '" respuesta="SI">
                </div>';
            }
        }

        $tipodetenenciau = '<option value="">Seleccione </option>';
        foreach ($preguntas as $value) {
            if ($value->id >= '256' && $value->id <= '261') {
              $tipodetenenciau .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';

            }
        }
        $documentodepropiedad = '';
        foreach ($preguntas as $value) {
            if ($value->id >= '262' && $value->id <= '264') {
                $documentodepropiedad .= '<div class="documentodepropiedad' . $value->id . '">
                <label class="form-check-label documentodepropiedad' . $value->id . '"  for="documentodepropiedad' . $value->id . '">' . $value->pregunta . '</label>
                <input class="form-check-input" type="checkbox" name="documentodepropiedad[]" id="documentodepropiedad' . $value->id . '" value="' . $value->id . '" respuesta="SI">
                </div>';
            }
        }

        $numerodecomidas='<option value="">Seleccione </option>';
        foreach ($preguntas as $value) {
          if ($value->id >= '123' && $value->id <= '130') {
              $numerodecomidas .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
          }
        }


        $factoresderiesgovef = '';
        foreach ($preguntas as $value) {
            if ($value->id >= '265' && $value->id <= '278') {
                $factoresderiesgovef .= '<div class="factoresderiesgovef' . $value->id . '">
                <label class="form-check-label factoresderiesgovef' . $value->id . '"  for="factoresderiesgovef' . $value->id . '">' . $value->pregunta . '</label>
                <input class="form-check-input" type="checkbox" name="factoresderiesgovef[]" id="factoresderiesgovef' . $value->id . '" value="' . $value->id . '" respuesta="SI">
                </div>';
            }
        }
        $vefviolenciaenelentorno = '';
        foreach ($preguntas as $value) {
            if ($value->id >= '279' && $value->id <= '285') {
                $vefviolenciaenelentorno .= '<div class="vefviolenciaenelentorno' . $value->id . '">
                <label class="form-check-label vefviolenciaenelentorno' . $value->id . '"  for="vefviolenciaenelentorno' . $value->id . '">' . $value->pregunta . '</label>
                <input class="form-check-input" type="checkbox" name="vefviolenciaenelentorno[]" id="vefviolenciaenelentorno' . $value->id . '" value="' . $value->id . '" respuesta="SI">
                </div>';
            }
        }

        $rutasvef3 = '';
        foreach ($preguntas as $value) {
            if ($value->id >= '286' && $value->id <= '294') {
                $rutasvef3 .= '<div class="rutasvef3' . $value->id . '">
                <label class="form-check-label rutasvef3' . $value->id . '"  for="rutasvef3' . $value->id . '">' . $value->pregunta . '</label>
                <input class="form-check-input" type="checkbox" name="rutasvef3[]" id="rutasvef3' . $value->id . '" value="' . $value->id . '" respuesta="SI">
                </div>';
            }
        } $planeacionfinanciera4 = '';
        foreach ($preguntas as $value) {
            if ($value->id >= '295' && $value->id <= '297') {
                $planeacionfinanciera4 .= '<div class="planeacionfinanciera4' . $value->id . '">
                <label class="form-check-label planeacionfinanciera4' . $value->id . '"  for="planeacionfinanciera4' . $value->id . '">' . $value->pregunta . '</label>
                <input class="form-check-input" type="checkbox" name="planeacionfinanciera4[]" id="planeacionfinanciera4' . $value->id . '" value="' . $value->id . '" respuesta="SI">
                </div>';
            }
        } $disciplinapositiva = '';
        foreach ($preguntas as $value) {
            if ($value->id >= '298' && $value->id <= '304') {
                $disciplinapositiva .= '<div class="disciplinapositiva' . $value->id . '">
                <label class="form-check-label disciplinapositiva' . $value->id . '"  for="disciplinapositiva' . $value->id . '">' . $value->pregunta . '</label>
                <input class="form-check-input" type="checkbox" name="disciplinapositiva[]" id="disciplinapositiva' . $value->id . '" value="' . $value->id . '" respuesta="SI">
                </div>';
            }
        } $tiempolibre = '';
        foreach ($preguntas as $value) {
            if ($value->id >= '305' && $value->id <= '309') {
                $tiempolibre .= '<div class="tiempolibre' . $value->id . '">
                <label class="form-check-label tiempolibre' . $value->id . '"  for="tiempolibre' . $value->id . '">' . $value->pregunta . '</label>
                <input class="form-check-input" type="checkbox" name="tiempolibre[]" id="tiempolibre' . $value->id . '" value="' . $value->id . '" respuesta="SI">
                </div>';
            }
        }

  
        return view('vistaslineas/v_l1e1',["variable"=>$folio, 'tipologia'=>$tipologia,
        'sino'=>$sino,'condicionespecial'=>$condicionespecial,'condicionespecial'=>$condicionespecial,
        "comunas"=>$comunas,"barrios"=>$barrios,'estrato'=>$estrato,'ubicacion'=>$ubicacion, 
        'familiacuidadora'=>$familiacuidadora, 'tipovivienda'=>$tipovivienda,'materialesdeparedes'=>$materialesdeparedes,
      'materialestecho'=>$materialesdetecho,'materialsuelo'=>$materialsuelo,
      'serviciospublicos'=>$serviciospublicos,'telecomunicaciones'=>$telecomunicaciones,'tipodetenenciau'=>$tipodetenenciau,
      'documentodepropiedad'=>$documentodepropiedad,'numerodecomidas'=>$numerodecomidas,
      'factoresderiesgovef'=>$factoresderiesgovef,
      'vefviolenciaenelentorno'=>$vefviolenciaenelentorno,
      'rutasvef3'=>$rutasvef3,
      'planeacionfinanciera4'=>$planeacionfinanciera4,
      'disciplinapositiva'=>$disciplinapositiva,
      'tiempolibre'=>$tiempolibre,
    ]);
      }





      public function fc_l2e1(Request $request){
      
        $folio=$request->input('folio');
        return view('vistaslineas/v_l2e1',["variable"=>$folio]);
      }

      public function fc_l3e1(Request $request){
      
        $folio=$request->input('folio');
        return view('vistaslineas/v_l3e1',["variable"=>$folio]);
      }

      public function fc_l4e1(Request $request){
      
        $folio=$request->input('folio');
        return view('vistaslineas/v_l4e1',["variable"=>$folio]);
      }

    
}
