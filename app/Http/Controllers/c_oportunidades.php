<?php

namespace App\Http\Controllers;
use App\Models\m_oportunidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class c_oportunidades extends Controller
{
    public function fc_oportunidades(Request $request){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

        $modelo = new m_oportunidades();
       // $oportunidad = $modelo-> m_listadooportunidades();
       $oportunidad = DB::table('t1_oportunidad')
       ->whereBetween(DB::raw('DATE(CURRENT_DATE)'), [DB::raw('DATE(fecha_inicio)'), DB::raw('DATE(fecha_limite_acercamiento)')])
       ->where('aplica_hogar_integrante','373')
       ->get();
       $t1_integranteshogar = $modelo-> m_listadooportunidades('');

        $oportunidades = '';
        
       
foreach ($oportunidad as $value) {
    // Filtrar integrantes relacionados con la oportunidad actual
    $integrantesRelacionados = array_filter($t1_integranteshogar, function ($integrante) use ($value) {
        return $integrante->id_oportunidad == $value->id_oportunidad;
    });

    // Solo incluir la oportunidad si tiene integrantes relacionados
    if (!empty($integrantesRelacionados)) {
        $oportunidades .= '<tr>
            <td>' . $value->nombre_oportunidad . '</td>
            <td>' . Str::limit($value->fecha_inicio, 10, '') . '</td>
            <td>' . Str::limit($value->fecha_limite_acercamiento, 10, '') . '</td>
            <td class="align-middle text-center">

            <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-' . $value->id_oportunidad . '">
                Ver más
            </button>
            </td>
            <td class="text-center">
                <div class="container">
                    <select class="selectpicker" onchange="habilitaboton(' . $value->id_oportunidad . ', ' . $value->aplica_hogar_integrante . ')" id="speaker_' . $value->id_oportunidad . '" name="speaker" data-live-search="true">
                        <option selected disabled>Seleccione</option>';

        // Loop para los integrantes del hogar
        foreach ($integrantesRelacionados as $integrante) {
            $oportunidades .= '<option data-folio="' . $integrante->folio . '" 
                value="' . $integrante->idintegrante . '">' 
                . $integrante->nombre1 . ' ' . $integrante->nombre2 . ' ' 
                . $integrante->apellido1 . ' ' . $integrante->apellido2 . ' - FOLIO: ' . $integrante->folio . 
                '</option>';
        }

        $oportunidades .= '</select>
                </div>
            </td>
            <td style="display: flex; gap: 10px;">
                <button class="btn btn-primary btn-sm" id="acercar' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',1)" type="button">Acercar</button>
                <button class="btn btn-success btn-sm" id="efectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',2)" type="button">Efectiva</button>
                <button class="btn btn-danger btn-sm" id="noefectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',3)" type="button">No Efectiva</button>
                </td>
        </tr>

        <!-- Modal -->
        <div class="modal fade" id="modal-' . $value->id_oportunidad . '" tabindex="-1" aria-labelledby="modalLabel-' . $value->id_oportunidad . '" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel-' . $value->id_oportunidad . '">' . $value->nombre_oportunidad . '</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Requisitos:</strong> ' . $value->requisitos . '</p>
                        <p><strong>Descripción:</strong> ' . $value->descripcion . '</p>
                        <p><strong>Ruta:</strong> ' . $value->ruta . '</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>';
    }
}
        
      return view('v_oportunidades',["oportunidades"=>$oportunidades]);
        
    }

    public function fc_agregaroportunidad(Request $request) {
        $now = Carbon::now();
        $folio = $request->input('folio');
        $idintegrante = $request->input('idintegrante');
        $idoportunidad = $request->input('idoportunidad');
        $usuario = $request->input('usuario');
        $tabla = $request->input('tabla');
        $linea = $request->input('linea');
        $aplica_hogar_integrante= $request->input('aplica_hogar_integrante'); 
        $estado_oportunidad= $request->input('estado_oportunidad'); 
        $id_bienestar= $request->input('id_bienestar');
        $id_indicador= $request->input('id_indicador');


        $data_historico = [
             'folio' => $folio,
             'idintegrante' => $idintegrante,
             'idoportunidad' => $idoportunidad,
            'usuario' => $usuario,
            'linea'=>$linea,
            'estado' => 1,
            'estado_oportunidad' => $estado_oportunidad,
            'sincro' => 0,
            'etiqueta' => 'mef',
            'aplica_hogar_integrante'=>$aplica_hogar_integrante,
            'updated_at' => $now,

        ];  

        $data=[];
        if($aplica_hogar_integrante == '373'){  //373 aplica por integrante
            $data = [
                // 'folio' => $folio,
                // 'idintegrante' => $idintegrante,
                // 'idoportunidad' => $idoportunidad,
                'usuario' => $usuario,
                'linea'=>$linea,
                'estado' => 1,
                'estado_oportunidad' => $estado_oportunidad,
                'sincro' => 0,
                'etiqueta' => 'mef',
                'aplica_hogar_integrante'=>$aplica_hogar_integrante,
                'updated_at' => $now,
    
            ];  
        }
        if($aplica_hogar_integrante == '374'){  //374 aplica por hogar
            $data = [
                // 'folio' => $folio,
                'idintegrante' => $idintegrante,
                // 'idoportunidad' => $idoportunidad,
                'usuario' => $usuario,
                'linea'=>$linea,
                'estado' => 1,
                'estado_oportunidad' => $estado_oportunidad,
                'sincro' => 0,
                'etiqueta' => 'mef',
                'aplica_hogar_integrante'=>$aplica_hogar_integrante,
                'updated_at' => $now,
    
            ];  
        }

        $exists = DB::table($tabla)
        ->where('folio', $folio)
        ->where('idintegrante', $idintegrante)
        ->where('idoportunidad', $idoportunidad)
        ->exists();
    
        if (!$exists) {
            // Si no existe, agregar `created_at` y hacer un insert
            $data['created_at'] = $now;
        } 

        if($aplica_hogar_integrante == '374' && $id_bienestar != '0'  && $id_indicador != '0'){ //hogar
           $resultado = DB::select('CALL sp_movimiento_indicador_hogar_oportunidades(?, ?, ?, ?, ?, ?)', [  
            $folio,  $id_bienestar,   $id_indicador,  $usuario,   $idoportunidad, $estado_oportunidad, 
        ]);
        
        $resultado2 = DB::select('CALL sp_indicadores_hogar(?)', [
            $folio
           // $idintegrante
        ]); 
        }


       
        if($aplica_hogar_integrante == '373' && $id_bienestar != '0'  && $id_indicador != '0'){ //integrante
            //dd($folio, $idintegrante,  $id_bienestar,   $id_indicador,  $usuario,   $idoportunidad, $estado_oportunidad);
            $resultado = DB::select('CALL sp_movimiento_indicador_integrante_oportunidades(?, ? , ? , ?, ?, ?, ?)', [  
             $folio, $idintegrante,  $id_bienestar,   $id_indicador,  $usuario,   $idoportunidad, $estado_oportunidad
         ]);
         
         $resultado2 = DB::select('CALL sp_indicadores_hogar(?)', [
             $folio
            // $idintegrante
         ]); 

         
            $resultadoint = DB::select('CALL sp_indicadores_integrantes(?, ?)', [
                $folio,
                $idintegrante
            ]);
        
         }

        if($aplica_hogar_integrante == '374'){  // hogar
            DB::table($tabla)->updateOrInsert(
            ['folio' => $folio, 'idoportunidad'=>$idoportunidad], // Condición para buscar el registro existente
            $data
             );
             DB::table('t3_oportunidad_integranteshogar_historico')->updateOrInsert(
                $data_historico
                 );
             
        return response()->json(['success' => true, 'estado_oportunidad'=> $estado_oportunidad]);

    }
        if($aplica_hogar_integrante == '373'){  // integrantes
            DB::table($tabla)->updateOrInsert(
            ['folio' => $folio, 'idoportunidad'=>$idoportunidad, 'idintegrante'=>$idintegrante], // Condición para buscar el registro existente
            $data
            );
            DB::table('t3_oportunidad_integranteshogar_historico')->updateOrInsert(
                $data_historico
                 );
        return response()->json(['success' => true, 'estado_oportunidad'=> $estado_oportunidad]);

    }

    

    }
    
    

    public function fc_veroportunidad(Request $request){
        $folio = $request->input('folio');
        $idintegrante = $request->input('idintegrante');
        $idoportunidad = $request->input('idoportunidad');
        $usuario=$request->input('usuario');
        $tabla=$request->input('tabla');

        $estadooportunidad = DB::table($tabla)
        ->where('idintegrante', $idintegrante)
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
       $oportunidad = DB::table('t1_oportunidad')
       ->whereBetween(DB::raw('DATE(CURRENT_DATE)'), [DB::raw('DATE(fecha_inicio)'), DB::raw('DATE(fecha_limite_acercamiento)')])
        ->where('aplica_hogar_integrante','374')
       ->get();
       
       $t1_integranteshogar = $modelo-> m_listadooportunidadeshogar('');

        $oportunidades = '';
        
        
      
        foreach ($oportunidad as $value) {
            // Filtrar integrantes relacionados con la oportunidad actual
            $integrantesRelacionados = array_filter($t1_integranteshogar, function ($integrante) use ($value) {
                return $integrante->id_oportunidad == $value->id_oportunidad;
            });
        
            // Solo incluir la oportunidad si tiene integrantes relacionados
            if (!empty($integrantesRelacionados)) {
                $oportunidades .= '<tr>
                    <td>' . $value->nombre_oportunidad . '</td>
                    <td>' . Str::limit($value->fecha_inicio, 10, '') . '</td>
                    <td>' . Str::limit($value->fecha_limite_acercamiento, 10, '') . '</td>
                    <td class="align-middle text-center">
        
                    <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-' . $value->id_oportunidad . '">
                        Ver más
                    </button>
                    </td>
                    <td class="text-center">
                        <div class="container">
                            <select class="selectpicker" onchange="habilitaboton(' . $value->id_oportunidad . ', ' . $value->aplica_hogar_integrante . ')" id="speaker_' . $value->id_oportunidad . '" name="speaker" data-live-search="true">
                                <option selected disabled>Seleccione</option>';
        
                // Loop para los integrantes del hogar
                foreach ($integrantesRelacionados as $integrante) {
                    $oportunidades .= '<option data-folio="' . $integrante->folio . '" 
                        value="' . $integrante->idintegrante . '">' 
                        . $integrante->nombre1 . ' ' . $integrante->nombre2 . ' ' 
                        . $integrante->apellido1 . ' ' . $integrante->apellido2 . ' - FOLIO: ' . $integrante->folio . 
                        '</option>';
                }
        
                $oportunidades .= '</select>
                        </div>
                    </td>
                    <td style="display: flex; gap: 10px;">
                <button class="btn btn-primary btn-sm" id="acercar' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',1)" type="button">Acercar</button>
                <button class="btn btn-success btn-sm" id="efectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',2)" type="button">Efectiva</button>
                <button class="btn btn-danger btn-sm" id="noefectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',3)" type="button">No Efectiva</button>
                    </td>
                </tr>
        
                <!-- Modal -->
                <div class="modal fade" id="modal-' . $value->id_oportunidad . '" tabindex="-1" aria-labelledby="modalLabel-' . $value->id_oportunidad . '" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel-' . $value->id_oportunidad . '">' . $value->nombre_oportunidad . '</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Requisitos:</strong> ' . $value->requisitos . '</p>
                                <p><strong>Descripción:</strong> ' . $value->descripcion . '</p>
                                <p><strong>Ruta:</strong> ' . $value->ruta . '</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>';
            }
        }
        
      return view('v_oportunidadeshogar',["oportunidades"=>$oportunidades]);
        
    }


    public function fc_oportunidadesintegrantesglobal(Request $request){
        $folio = $request->input('folio');
        $modelo = new m_oportunidades();
        // $oportunidad = $modelo-> m_listadooportunidades();
        $oportunidad = DB::table('t1_oportunidad')
        ->whereBetween(DB::raw('DATE(CURRENT_DATE)'), [DB::raw('DATE(fecha_inicio)'), DB::raw('DATE(fecha_limite_acercamiento)')])
       // ->where('aplica_hogar_integrante','374')
        ->get();
    
        $t1_integranteshogar = $modelo-> m_listadooportunidades($folio);
        //dd($oportunidad);
         $oportunidades = '';
         $modal ='';
         
             
         foreach ($oportunidad as $value) {
            // Filtrar integrantes relacionados con la oportunidad actual
            $integrantesRelacionados = array_filter($t1_integranteshogar, function ($integrante) use ($value) {
                return $integrante->id_oportunidad == $value->id_oportunidad;
            });
        
            // Solo incluir la oportunidad si tiene integrantes relacionados
            if (!empty($integrantesRelacionados)) {
                $oportunidades .= '<tr>
                    <td>' . $value->nombre_oportunidad . '</td>
                    <td>' . Str::limit($value->fecha_inicio, 10, '') . '</td>
                    <td>' . Str::limit($value->fecha_limite_acercamiento, 10, '') . '</td>
                    <td class="align-middle text-center">
        
                    <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-' . $value->id_oportunidad . '">
                        Ver más
                    </button>
                    </td>
                    <td class="text-center">
                        <div class="container">
                            <select class="selectpicker" onchange="habilitaboton(' . $value->id_oportunidad . ', ' . $value->aplica_hogar_integrante . ')" id="speaker_' . $value->id_oportunidad . '" name="speaker" data-live-search="true">
                                <option selected disabled>Seleccione</option>';
        
                // Loop para los integrantes del hogar
                foreach ($integrantesRelacionados as $integrante) {
                    $oportunidades .= '<option data-folio="' . $integrante->folio . '" 
                        value="' . $integrante->idintegrante . '">' 
                        . $integrante->nombre1 . ' ' . $integrante->nombre2 . ' ' 
                        . $integrante->apellido1 . ' ' . $integrante->apellido2 . ' - FOLIO: ' . $integrante->folio . 
                        '</option>';
                }
        
                $oportunidades .= '</select>
                        </div>
                    </td>
                    <td style="display: flex; gap: 10px;">
                <button class="btn btn-primary btn-sm" id="acercar' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',1)" type="button">Acercar</button>
                <button class="btn btn-success btn-sm" id="efectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',2)" type="button">Efectiva</button>
                <button class="btn btn-danger btn-sm" id="noefectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',3)" type="button">No Efectiva</button>
                    </td>
                </tr>
        ';

          $modal .=  '<div class="modal fade" id="modal-'.$value->id_oportunidad.'" tabindex="-1" aria-labelledby="modalLabel-'.$value->id_oportunidad.'" aria-hidden="true">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="modalLabel-'.$value->id_oportunidad.'">'.$value->nombre_oportunidad.'</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                            <p><strong>Requisitos:</strong> ' . $value->requisitos . '</p>
                             <p><strong>Descripción:</strong> '.$value->descripcion.'</p>
                             <p><strong>Ruta:</strong> '.$value->ruta.'</p>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                         </div>
                     </div>
                 </div>
             </div>
     ';
            }

        }

         return response()->json(['oportunidades' => $oportunidades, 'modal'=>$modal]);


    }
    

    public function fc_oportunidadeshogarglobal(Request $request){
        $folio = $request->input('folio');
        $modelo = new m_oportunidades();
        // $oportunidad = $modelo-> m_listadooportunidades();
        $oportunidad = DB::table('t1_oportunidad')
        ->whereBetween(DB::raw('DATE(CURRENT_DATE)'), [DB::raw('DATE(fecha_inicio)'), DB::raw('DATE(fecha_limite_acercamiento)')])
        ->where('aplica_hogar_integrante','373')
        ->get();
    
        $t1_integranteshogar = $modelo-> m_listadooportunidadeshogar($folio);
        //dd($oportunidad);
         $oportunidades = '';
         $modal ='';
         
            
         foreach ($oportunidad as $value) {
            // Filtrar integrantes relacionados con la oportunidad actual
            $integrantesRelacionados = array_filter($t1_integranteshogar, function ($integrante) use ($value) {
                return $integrante->id_oportunidad == $value->id_oportunidad;
            });
        
            // Solo incluir la oportunidad si tiene integrantes relacionados
            if (!empty($integrantesRelacionados)) {
                $oportunidades .= '<tr>
                    <td>' . $value->nombre_oportunidad . '</td>
                    <td>' . Str::limit($value->fecha_inicio, 10, '') . '</td>
                    <td>' . Str::limit($value->fecha_limite_acercamiento, 10, '') . '</td>
                    <td class="align-middle text-center">
        
                    <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal-' . $value->id_oportunidad . '">
                        Ver más
                    </button>
                    </td>
                    <td class="text-center">
                        <div class="container">
                            <select class="selectpicker" onchange="habilitaboton(' . $value->id_oportunidad . ', ' . $value->aplica_hogar_integrante . ')" id="speaker_' . $value->id_oportunidad . '" name="speaker" data-live-search="true">
                                <option selected disabled>Seleccione</option>';
        
                // Loop para los integrantes del hogar
                foreach ($integrantesRelacionados as $integrante) {
                    $oportunidades .= '<option data-folio="' . $integrante->folio . '" 
                        value="' . $integrante->idintegrante . '">' 
                        . $integrante->nombre1 . ' ' . $integrante->nombre2 . ' ' 
                        . $integrante->apellido1 . ' ' . $integrante->apellido2 . ' - FOLIO: ' . $integrante->folio . 
                        '</option>';
                }
        
                $oportunidades .= '</select>
                        </div>
                    </td>
                    <td style="display: flex; gap: 10px;">
                <button class="btn btn-primary btn-sm" id="acercar' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',1)" type="button">Acercar</button>
                <button class="btn btn-success btn-sm" id="efectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',2)" type="button">Efectiva</button>
                <button class="btn btn-danger btn-sm" id="noefectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',3)" type="button">No Efectiva</button>
                    </td>
                </tr>
        
                <!-- Modal -->
                ';
                $modal .=  '<div class="modal fade" id="modal-'.$value->id_oportunidad.'" tabindex="-1" aria-labelledby="modalLabel-'.$value->id_oportunidad.'" aria-hidden="true">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="modalLabel-'.$value->id_oportunidad.'">'.$value->nombre_oportunidad.'</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                            <p><strong>Requisitos:</strong> ' . $value->requisitos . '</p>
                             <p><strong>Descripción:</strong> '.$value->descripcion.'</p>
                             <p><strong>Ruta:</strong> '.$value->ruta.'</p>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                         </div>
                     </div>
                 </div>
             </div>
     ';
            }
        }

         return response()->json(['oportunidades' => $oportunidades, 'modal'=>$modal]);


    }
}
