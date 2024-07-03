<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_login;
use App\Models\visitaslineas\m_l1e1;

class c_editarintegrantes extends Controller
{
    public function fc_editarintegrantes(){
      $modelo= new m_l1e1();
      $preguntas=$modelo->m_leerrespuestas();
      $leerbarrios= $modelo->m_leerbarrios();
      $leercomunas= $modelo->m_leercomunas();
      $pregunta2_2 = '';
      foreach ($preguntas as $value) {
        if ($value->numeral == '2.2') {
            $pregunta2_2 .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
        }
    }
    $pregunta2_3 = '';
    foreach ($preguntas as $value) {
      if ($value->numeral == '2.3') {
          $pregunta2_3 .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
      }
  }

  $pregunta3_1 = '';
  foreach ($preguntas as $value) {
    if ($value->numeral == '3.1') {
        $pregunta3_1 .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
    }
}

$barrios = '';
foreach ($leerbarrios as $value) {
  $barrios .= '<option value="' . $value->codigo . '">' . $value->barriovereda . '</option>';
}

$comuna = '';
foreach ($leercomunas as $value) {
    $comuna.= '<option value="' . $value->codigo . '">' . $value->comuna . '</option>';
}

$pregunta3_3_1='';
foreach ($preguntas as $value) {
  if ($value->numeral == '3.3.1') {
      $pregunta3_3_1 .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
  }
}

$pregunta3_3_2='';
foreach ($preguntas as $value) {
  if ($value->numeral == '3.3.2') {
      $pregunta3_3_2 .= '<option value="' . $value->id . '">' . $value->pregunta . '</option>';
  }
}

        return view('v_editarintegrantes',['pregunta2_2'=>$pregunta2_2,
        'pregunta2_3'=>$pregunta2_3,'pregunta3_1'=>$pregunta3_1,'pregunta3_1'=>$pregunta3_1,
        "comuna"=>$comuna,"barrios"=>$barrios,'pregunta3_3_1'=>$pregunta3_3_1,'pregunta3_3_2'=>$pregunta3_3_2]);
      }


    public function fc_responderencuesta(){
        
    }


}
