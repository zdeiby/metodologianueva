<?php

namespace App\Http\Controllers;
use App\Models\m_index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class c_prueba extends Controller
{
    public function fc_index(Request $request){
      $modelo= new m_index();
      $pphogar=$modelo->m_leerprincipalhogar();

      $folios='';

      foreach ($pphogar as $value) {
          $estacion='';
       if($value->ultimo_idestacion =='10'){
          //$estacion='<form method="POST" action="index.php/l1e1"><input type="hidden" name="_token" value="'.csrf_token().'"><input type="hidden" name="folio" value="'.$value->folio.'"><button type="submit" class="badge bg-success"  id="l1e1">LINEA 1. ESTACIÓN 1</button></form>';
       }elseif($value->ultimo_idestacion =='11'){
          $estacion='<span class="badge bg-primary" onclick="iralineaestacion('.$value->folio.')" id="l1e2">LINEA 1. ESTACIÓN 2</span>';
       }
       elseif($value->ultimo_idestacion =='12'){
          $estacion='<span class="badge bg-danger" onclick="iralineaestacion('.$value->folio.')" id="l2e1">LINEA 2. ESTACIÓN 1</span>';
       }
       elseif($value->ultimo_idestacion =='21'){
          $estacion='<span class="badge bg-primary" onclick="iralineaestacion('.$value->folio.')" id="l2e2">LINEA 2. ESTACIÓN 2</span>';
       }
       elseif($value->ultimo_idestacion =='22'){
          $estacion='<span class="badge bg-success" onclick="iralineaestacion('.$value->folio.')" id="l2e3">LINEA 2. ESTACIÓN 3</span>';
       }
       elseif($value->ultimo_idestacion =='23'){
          $estacion='<span class="badge bg-danger" onclick="iralineaestacion('.$value->folio.')" id="l2e4">LINEA 2. ESTACIÓN 4</span>';
       }
       elseif($value->ultimo_idestacion =='24'){
          $estacion='<span class="badge bg-success" onclick="iralineaestacion('.$value->folio.')" id="l2e5">LINEA 2. ESTACIÓN 5</span>';
       }
       elseif($value->ultimo_idestacion =='25'){
          $estacion='<span class="badge bg-primary" onclick="iralineaestacion('.$value->folio.')" id="l2e6">LINEA 2. ESTACIÓN 6</span>';
       }
       elseif($value->ultimo_idestacion =='26'){
          $estacion='<span class="badge bg-success" onclick="iralineaestacion('.$value->folio.')" id="l2e7">LINEA 2. ESTACIÓN 7</span>';
       }
       elseif($value->ultimo_idestacion =='27'){
          $estacion='<span class="badge bg-danger" onclick="iralineaestacion('.$value->folio.')" id="l2e8">LINEA 2. ESTACIÓN 8</span>';
       }
       elseif($value->ultimo_idestacion =='28'){
          $estacion='<span class="badge bg-warning" onclick="iralineaestacion('.$value->folio.')" id="l1e1">Sesion de cierre</span>';
       }
       elseif($value->ultimo_idestacion =='31'){
          $estacion='<span class="badge bg-primary" onclick="iralineaestacion('.$value->folio.')" id="l1e1">Cierre Administrativo</span>';
       }
        elseif($value->ultimo_idestacion =='32'){
           $estacion='<span class="badge bg-primary" onclick="iralineaestacion('.$value->folio.')" id="l1e1">LINEA 3. ESTACIÓN 2</span>';
        }
        elseif($value->ultimo_idestacion =='33'){
           $estacion='<span class="badge bg-primary" onclick="iralineaestacion('.$value->folio.')" id="l1e1">LINEA 3. ESTACIÓN 3</span>';
        }
        elseif($value->ultimo_idestacion =='34'){
           $estacion='<span class="badge bg-primary" onclick="iralineaestacion('.$value->folio.')" id="l1e1">LINEA 3. ESTACIÓN 4</span>';
        }
        elseif($value->ultimo_idestacion =='81'){
          $estacion='<span class="badge bg-primary" onclick="iralineaestacion('.$value->folio.')" id="l1e1">VISITA INTERMEDIA</span>';
       }
       elseif($value->ultimo_idestacion =='90'){
          $estacion='<span class="badge bg-primary" onclick="iralineaestacion('.$value->folio.')" id="l1e1">VISITA INTERMEDIA DE CIERRE</span>';
       }
       elseif($value->ultimo_idestacion =='91'){
          $estacion='<span class="badge bg-primary" onclick="iralineaestacion('.$value->folio.')" id="l1e1" >CIERRE ADMINISTRATIVO</span>';
       }
          $folios .='<tr>
          <td>'.$value->folio.'</td>
          <td>'.$value->documento.'</td>
          <td>'.$value->nombre1.' '.$value->nombre2.' '.$value->apellido1.' '.$value->apellido2.'</td>
          <td>'.$value->celular.'</td>
          <td>'.$value->comuna.'</td>
          <td>'.$estacion.'</td>

          ';

      }

if(session('nombre') !== null){
        $nombre = session('nombre');
        $cedula = session('cedula');

        $sesion=['nombre'=> $nombre,
                'cedula'=>$cedula];
      
        return view('v_prueba',["variable"=>$sesion,"folios"=>$pphogar,"estacion"=>$estacion]);
        }else{
            return redirect()->route('login');
        }
        
    }

    public function fc_leerfolios(){
      
    }
}
