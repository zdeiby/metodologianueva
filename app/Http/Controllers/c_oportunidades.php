<?php

namespace App\Http\Controllers;
use App\Models\m_oportunidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class c_oportunidades extends Controller
{
    public function fc_oportunidades(Request $request){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

        $modelo = new m_oportunidades();
       // $oportunidad = $modelo-> m_listadooportunidades();
       $oportunidad = DB::table('t1_oportunidad')->get();
       $t1_integranteshogar = $modelo-> m_listadooportunidades();

        $oportunidades = '';
        
        foreach ($oportunidad as $value) {
            $oportunidades .= '<tr>
                <td>'.$value->nombre_oportunidad.'</td>
                <td>'.$value->descripcion.'</td>
                <td>'.$value->ruta.'</td>
                <td>'.$value->fecha_inicio.'</td>
                <td>'.$value->fecha_limite_acercamiento.'</td>
                <td class="align-middle text-center">
                    <label type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-bottom: 2px solid black;">Más</label>
                </td>
                    <td class="text-center">
                        <div class="container" >
                            <select class="selectpicker" onchange="habilitaboton(' . $value->id_oportunidad . ')" id="speaker_' . $value->id_oportunidad . '" name="speaker" data-live-search="true" >
                                <option selected disabled>Seleccione</option>';
                                
                                // Loop para los integrantes del hogar
                                foreach ($t1_integranteshogar as $value2) {
                                    if ($value2->id_oportunidad == $value->id_oportunidad) { // Verificar que el integrante pertenezca a esta oportunidad
                                        $oportunidades .= '<option data-folio="' . $value2->folio . '" 
                                            data-id="' . $value2->id . '" 
                                            value="' . $value2->idintegrante . '">' 
                                            . $value2->nombre1 . ' ' . $value2->nombre2 . ' ' 
                                            . $value2->apellido1 . ' ' . $value2->apellido2 . ' - FOLIO: ' . $value2->folio . 
                                            '</option>';
                                    }
                                }

                $oportunidades .= '</select>
                        </div>
                </td>
                <td>
                    <button class="btn btn-primary" id="acercar'.$value->id_oportunidad.'" onclick="agregaroportunidad(`'.$value->id_oportunidad.'`)" type="button" >Acercar</button>
                </td>
            </tr>';
        }
        
      return view('v_oportunidades',["oportunidades"=>$oportunidades]);
        
    }

    public function fc_agregaroportunidad(Request $request){
        $now = Carbon::now();
        $id = $request->input('id');
        $folio = $request->input('folio');
        $idintegrante = $request->input('idintegrante');
        $idoportunidad = $request->input('idoportunidad');
        $usuario=$request->input('usuario');
        $tabla=$request->input('tabla');

        $data = [
            'folio' => $folio,
            'idintegrante' => $idintegrante,
            'idoportunidad' => $idoportunidad,
            'usuario' => $usuario,
            'estado' => 1,
            'estado_oportunidad' => 1,
            'sincro' => 0,
            'etiqueta'=>'mef',
            'updated_at' => $now
        ];

        $exists = DB::table($tabla)
          ->where('id', $id)
          ->exists();

        if (!$exists) {
                    // Si no existe, agregar created_at
                    $data['created_at'] = $now;
            }
        
        DB::table($tabla)->updateOrInsert(
            [
                'id' => $id // Condición para buscar el registro existente
            ],
           $data
        );
        $insertedId = DB::table($tabla)->insertGetId($data);
        $estadooportunidad = DB::table($tabla)
        ->where('id', $insertedId)
        ->where('idoportunidad', $idoportunidad)
        ->first();
    
        if ($estadooportunidad) {
            $estado = $estadooportunidad->estado_oportunidad;
        } else {
            $estado = 0; // O cualquier valor predeterminado
        }
  
        return response()->json(['estado' =>  $estado, 'insertedId'=>$insertedId]);
    }

    public function fc_veroportunidad(Request $request){
        $id = $request->input('id');
        $folio = $request->input('folio');
        $idintegrante = $request->input('idintegrante');
        $idoportunidad = $request->input('idoportunidad');
        $usuario=$request->input('usuario');
        $tabla=$request->input('tabla');

        $estadooportunidad = DB::table($tabla)
        ->where('id', $id)
        ->where('idoportunidad', $idoportunidad)
        ->first();
    
    if ($estadooportunidad) {
        $estado = $estadooportunidad->estado_oportunidad;
    } else {
        $estado = 0; // O cualquier valor predeterminado
    }
    

        return response()->json(['estado' =>  $estado]);
    }



    public function fc_oportunidadeshogar(Request $request){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

        $modelo = new m_oportunidades();
       // $oportunidad = $modelo-> m_listadooportunidades();
       $oportunidad = DB::table('t1_oportunidad')->get();
       $t1_integranteshogar = $modelo-> m_listadooportunidadeshogar();

        $oportunidades = '';
        
        foreach ($oportunidad as $value) {
            $oportunidades .= '<tr>
                <td>'.$value->nombre_oportunidad.'</td>
                <td>'.$value->descripcion.'</td>
                <td>'.$value->ruta.'</td>
                <td>'.$value->fecha_inicio.'</td>
                <td>'.$value->fecha_limite_acercamiento.'</td>
                <td class="align-middle text-center">
                    <label type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-bottom: 2px solid black;">Más</label>
                </td>
                    <td class="text-center">
                        <div class="container" >
                            <select class="selectpicker" onchange="habilitaboton(' . $value->id_oportunidad . ')" id="speaker_' . $value->id_oportunidad . '" name="speaker" data-live-search="true" >
                                <option selected disabled>Seleccione</option>';
                                
                                // Loop para los integrantes del hogar
                                foreach ($t1_integranteshogar as $value2) {
                                    if ($value2->id_oportunidad == $value->id_oportunidad) { // Verificar que el integrante pertenezca a esta oportunidad
                                        $oportunidades .= '<option data-folio="' . $value2->folio . '" 
                                            data-id="' . $value2->id . '" 
                                            value="' . $value2->idintegrante . '">' 
                                            . $value2->nombre1 . ' ' . $value2->nombre2 . ' ' 
                                            . $value2->apellido1 . ' ' . $value2->apellido2 . ' - FOLIO: ' . $value2->folio . 
                                            '</option>';
                                    }
                                }

                $oportunidades .= '</select>
                        </div>
                </td>
                <td>
                    <button class="btn btn-primary" id="acercar'.$value->id_oportunidad.'" onclick="agregaroportunidad(`'.$value->id_oportunidad.'`)" type="button" >Acercar</button>
                </td>
            </tr>';
        }
        
      return view('v_oportunidadeshogar',["oportunidades"=>$oportunidades]);
        
    }

    
}
