<?php

namespace App\Http\Controllers;
use App\Models\m_index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class c_oportunidades extends Controller
{
    public function fc_oportunidades(Request $request){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
        
        $oportunidad = DB::table('t3_oportunidad')->get();

      $oportunidades='';
    
      foreach ($oportunidad as $value) {
      
          $oportunidades .='<tr>
          <td>'.$value->nombre_oportunidad.'</td>
          <td>'.$value->descripcion_oportunidad.'</td>
          <td>'.$value->alcance_oportunidad.'</td>
         <td>'.$value->fecha_inicio.'</td>
          <td>'.$value->fecha_limite_acercamiento.'</td>
          
            <td>
             <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ver</button></td>
            </td>
            <td class="text-center">
                    <div class="container">
                <select class="selectpicker" id="speaker" name="speaker" data-live-search="true">
                    <option selected disabled>Seleccione</option>
                    <option value="speaker1">Juan Pérez</option>
                    <option value="speaker2">María López</option>
                    <option value="speaker3">Carlos García </option>
                    <option value="speaker4">Ana Torres</option>
                </select>
            </div>
            </td> 
            <td>
            <button class="btn btn-primary" type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Acercar</button>
            </td>
          ';

      }
      return view('v_oportunidades',["oportunidades"=>$oportunidades]);
        
    }

}
