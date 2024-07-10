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

  
        return view('vistaslineas/v_l1e1',["variable"=>$folio, 'tipologia'=>$tipologia,
        'sino'=>$sino,'condicionespecial'=>$condicionespecial,'condicionespecial'=>$condicionespecial,
        "comunas"=>$comunas,"barrios"=>$barrios,'estrato'=>$estrato,'ubicacion'=>$ubicacion, 
        'familiacuidadora'=>$familiacuidadora, 'tipovivienda'=>$tipovivienda,'materialesdeparedes'=>$materialesdeparedes,
      'materialestecho'=>$materialesdetecho,'materialsuelo'=>$materialsuelo,
      'serviciospublicos'=>$serviciospublicos,'telecomunicaciones'=>$telecomunicaciones,'tipodetenenciau'=>$tipodetenenciau,
      'documentodepropiedad'=>$documentodepropiedad,'numerodecomidas'=>$numerodecomidas
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
