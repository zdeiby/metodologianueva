<?php

namespace App\Http\Controllers;
use App\Models\m_oportunidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class c_oportunidades extends Controller
{
    public function fc_oportunidades(Request $request){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

        $modelo = new m_oportunidades();
       // $oportunidad = $modelo-> m_listadooportunidades();
       $oportunidad = DB::table('vw_listar_oportunidades')
            ->where('aplica_hogar_integrante', '373')
            ->get();
       $t1_integranteshogar = $modelo-> m_listadooportunidades('');

       $oportunidades_acercadas_integrantes = DB::table('vw_listado_integrantes_oportunidades')
            // ->where('aplica_hogar_integrante', '373')
        ->get();
       

        $oportunidades = '';
        
       
foreach ($oportunidad as $value) {
    // Filtrar integrantes relacionados con la oportunidad actual
    $integrantesRelacionados = array_filter($t1_integranteshogar, function ($integrante) use ($value) {
        return $integrante->id_oportunidad == $value->id_oportunidad;
    });

    // Solo incluir la oportunidad si tiene integrantes relacionados
    if (!empty($integrantesRelacionados)) {
        $oportunidades .= '<tr>
            <td>' . $value->id_oportunidad . '</td>
            <td>' . $value->nombre_oportunidad . '</td>
            <td>' . $value->nombre_aliado . '</td>
             <td>' . $value->tipos_bienestar . '</td>
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
            <td >
                <div class="d-flex w-100">
                    <button class="btn btn-primary btn-sm" id="acercar' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',1)" type="button">Acercar</button>&nbsp
                    <button class="btn btn-success btn-sm" id="efectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',2)" type="button">Efectiva</button>&nbsp
                    <button class="btn btn-danger btn-sm" id="noefectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',3)" type="button">No Efectiva</button>
                </div>
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
                        <p><strong>Nombre aliado:</strong> ' . $value->nombre_aliado . '</p>
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
        
      return view('v_oportunidades',["oportunidades"=>$oportunidades, 'oportunidades_acercadas_integrantes'=>$oportunidades_acercadas_integrantes]);
        
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
        $resultado_ffes = DB::select('CALL sp_indicadores_hogar_ffes(?)', [
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

            $resultadoint2 = DB::select('CALL sp_indicadores_integrantes_ffes(?, ?)', [
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
       $oportunidad = DB::table('vw_listar_oportunidades')
            ->where('aplica_hogar_integrante', '374')
            ->get();


         $oportunidades_acercadas_hogar = DB::table('vw_listado_integrantes_oportunidades_hogar')
            // ->where('aplica_hogar_integrante', '373')
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
                   <td>' . $value->id_oportunidad . '</td>
                    <td>' . $value->nombre_oportunidad . '</td>
                    <td>' . $value->nombre_aliado . '</td>
                    <td>' . $value->tipos_bienestar . '</td>
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
                    <td>
            <div class="d-flex w-100">
                <button class="btn btn-primary btn-sm" id="acercar' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',1)" type="button">Acercar</button>&nbsp
                <button class="btn btn-success btn-sm" id="efectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',2)" type="button">Efectiva</button>&nbsp
                <button class="btn btn-danger btn-sm" id="noefectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',3)" type="button">No Efectiva</button>
                 </div> 
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
                            <p><strong>Nombre aliado:</strong> ' . $value->nombre_aliado . '</p>
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
        
      return view('v_oportunidadeshogar',["oportunidades"=>$oportunidades, 'oportunidades_acercadas_hogar'=>$oportunidades_acercadas_hogar]);
        
    }


    public function fc_oportunidadesintegrantesglobal(Request $request){
        $folio = $request->input('folio');
        $modelo = new m_oportunidades();
        // $oportunidad = $modelo-> m_listadooportunidades();
          $oportunidad = DB::table('vw_listar_oportunidades')
            ->where('aplica_hogar_integrante', '373')
            ->whereBetween(DB::raw('DATE(CURRENT_DATE)'), [DB::raw('DATE(fecha_inicio)'), DB::raw('DATE(fecha_limite_acercamiento)')])
            ->get();
    
        $t1_integranteshogar = $modelo-> m_listadooportunidades($folio);

         $oportunidades_acercadas_integrantes = DB::table('vw_listado_integrantes_oportunidades')
            // ->where('aplica_hogar_integrante', '373')
        ->get();
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
                 <td>' . $value->id_oportunidad . '</td>
                    <td>' . $value->nombre_oportunidad . '</td>
                    <td>' . $value->nombre_aliado . '</td>
                    <td>' . $value->tipos_bienestar . '</td>
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
                    <td>
                      <div class="d-flex w-100">
                        <button class="btn btn-primary btn-sm" id="acercar' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',1)" type="button">Acercar</button>&nbsp
                        <button class="btn btn-success btn-sm" id="efectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',2)" type="button">Efectiva</button>&nbsp
                        <button class="btn btn-danger btn-sm" id="noefectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',3)" type="button">No Efectiva</button>&nbsp
                    </div>
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
                         <p><strong>Nombre aliado:</strong> ' . $value->nombre_aliado . '</p>
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
        $oportunidad = DB::table('vw_listar_oportunidades')
            ->where('aplica_hogar_integrante', '374')
            ->whereBetween(DB::raw('DATE(CURRENT_DATE)'), [DB::raw('DATE(fecha_inicio)'), DB::raw('DATE(fecha_limite_acercamiento)')])
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
                  <td>' . $value->id_oportunidad . '</td>
                    <td>' . $value->nombre_oportunidad . '</td>
                    <td>' . $value->nombre_aliado . '</td>
                    <td>' . $value->tipos_bienestar . '</td>
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
                    <td>
                <div class="d-flex w-100">
                    <button class="btn btn-primary btn-sm" id="acercar' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',1)" type="button">Acercar</button>&nbsp
                    <button class="btn btn-success btn-sm" id="efectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',2)" type="button">Efectiva</button>&nbsp
                    <button class="btn btn-danger btn-sm" id="noefectiva' . $value->id_oportunidad . '" onclick="agregaroportunidad(`' . $value->id_oportunidad . '`, ' . $value->aplica_hogar_integrante . ',3)" type="button">No Efectiva</button>
                   
                </div></td>
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
                         <p><strong>Nombre aliado:</strong> ' . $value->nombre_aliado . '</p>
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



public function fc_cambiar_estado_oportunidad_masivo_i(Request $request)
{
    $oportunidades = $request->input('oportunidades');
    $nuevoEstado   = $request->input('nuevo_estado');
    $usuario       = Session::get('cedula') ;
    $linea = $request->input('linea') ?? '0';
    $idoportunidad   = $request->input('idoportunidad');

    try {
        foreach ($oportunidades as $item) {
            // 1. Actualizar primero el estado
            DB::table('t1_oportunidad_integrantes')
                ->where('idintegrante', $item['idintegrante'])
                ->where('folio', $item['folio'])
                ->where('idoportunidad', $item['idoportunidad'])
                ->update([
                    'estado_oportunidad' => $nuevoEstado,
                    'usuario'            => $usuario,
                     'linea'            => $linea,
                    'updated_at'         => now()
                ]);

            // 2. Luego traer el registro actualizado
            $registro = DB::table('t1_oportunidad_integrantes')
                ->where('idintegrante', $item['idintegrante'])
                ->where('folio', $item['folio'])
                ->where('idoportunidad', $item['idoportunidad'])
                ->first();

                if ($registro && (int)$registro->aplica_hogar_integrante === 373) {
                // toma los ids si vienen en el item; si no, déjalos en 0 para que el SP calcule
                $id_bienestar = (int)($item['id_bienestar']  ?? 0);
                $id_indicador = (int)($item['id_indicador'] ?? 0);

                // Llamada al SP (si mandas 0,0 el SP deduce desde t1_oportunidad)
                DB::select(
                    'CALL sp_movimiento_indicador_integrante_oportunidades(?, ?, ?, ?, ?, ?, ?)',
                    [
                        (int)$registro->folio,
                        $registro->idintegrante,
                        $id_bienestar,                 // 0 => deducir
                        $id_indicador,                 // 0 => deducir
                        $usuario,
                        (int)$registro->idoportunidad, // ojo: INT
                        (string)$nuevoEstado
                    ]
                );


                 $resultado2 = DB::select('CALL sp_indicadores_hogar(?)', [
                        $registro->folio
                        // $idintegrante
                    ]); 

                    $resultado2 = DB::select('CALL sp_indicadores_hogar_ffes(?)', [
                        $registro->folio
                        // $idintegrante
                    ]); 

                    
                        $resultadoint = DB::select('CALL sp_indicadores_integrantes(?, ?)', [
                            $registro->folio,
                            $registro->idintegrante
                        ]);

                        $resultadoint2 = DB::select('CALL sp_indicadores_integrantes_ffes(?, ?)', [
                            $registro->folio,
                            $registro->idintegrante
                        ]);
                        }

            // 3. Insertar en histórico
            if ($registro) {
                DB::table('t3_oportunidad_integranteshogar_historico')->insert([
                    'idoportunidad'            => $registro->idoportunidad,
                    'folio'                    => $registro->folio,
                    'idintegrante'             => $registro->idintegrante,
                    'estado_oportunidad'       => $registro->estado_oportunidad,
                    'linea'                    => $registro->linea,
                    'aplica_hogar_integrante'  => $registro->aplica_hogar_integrante,
                    'usuario'                  => $usuario,
                    'estado'                   => $registro->estado,
                    'sincro'                   => $registro->sincro,
                    'created_at'               => now(),
                    'updated_at'               => now(),
                    'etiqueta'                 => $registro->etiqueta,
                ]);
            }
        }

        return response()->json(['mensaje' => 'Estado actualizado correctamente y registrado en el histórico.']);
    } catch (\Exception $e) {
        return response()->json(['mensaje' => 'Error: ' . $e->getMessage()], 500);
    }
}


public function fc_cambiar_estado_oportunidad_masivo_h(Request $request)
{
    $oportunidades = $request->input('oportunidades');
    $nuevoEstado   = $request->input('nuevo_estado');
    $usuario       = Session::get('cedula') ;
    $linea = $request->input('linea') ?? '0';
     $idoportunidad   = $request->input('idoportunidad');

    try {
        foreach ($oportunidades as $item) {
            // 1. Actualizar primero el estado
            DB::table('t1_oportunidad_hogares')
                ->where('idintegrante', $item['idintegrante'])
                ->where('folio', $item['folio'])
                ->where('idoportunidad', $item['idoportunidad'])
                ->update([
                    'estado_oportunidad' => $nuevoEstado,
                    'usuario'            => $usuario,
                    'linea'              =>$linea,
                    'updated_at'         => now()
                ]);

            // 2. Luego traer el registro actualizado
            $registro = DB::table('t1_oportunidad_hogares')
                ->where('idintegrante', $item['idintegrante'])
                ->where('folio', $item['folio'])
                ->where('idoportunidad', $item['idoportunidad'])
                ->first();

                 if ($registro && (int)$registro->aplica_hogar_integrante === 374) {
                // toma los ids si vienen en el item; si no, déjalos en 0 para que el SP calcule
                $id_bienestar = (int)($item['id_bienestar']  ?? 0);
                $id_indicador = (int)($item['id_indicador'] ?? 0);

                // Llamada al SP (si mandas 0,0 el SP deduce desde t1_oportunidad)
                DB::select(
                    'CALL sp_movimiento_indicador_hogar_oportunidades(?, ?, ?, ?, ?, ?)',
                    [
                        (int)$registro->folio,
                        $id_bienestar,                 // 0 => deducir
                        $id_indicador,                 // 0 => deducir
                        $usuario,
                        (int)$registro->idoportunidad, // ojo: INT
                        (string)$nuevoEstado
                    ]
                );

                        $resultado2 = DB::select('CALL sp_indicadores_hogar(?)', [
                            $registro->folio
                            // $idintegrante
                        ]); 

                        $resultado2 = DB::select('CALL sp_indicadores_hogar_ffes(?)', [
                            $registro->folio
                            // $idintegrante
                        ]);

                    
                        $resultadoint = DB::select('CALL sp_indicadores_integrantes(?, ?)', [
                            $registro->folio,
                            $registro->idintegrante
                        ]);

                        $resultadoint2 = DB::select('CALL sp_indicadores_integrantes_ffes(?, ?)', [
                            $registro->folio,
                            $registro->idintegrante
                        ]);
            }

            // 3. Insertar en histórico
            if ($registro) {
                DB::table('t3_oportunidad_integranteshogar_historico')->insert([
                    'idoportunidad'            => $registro->idoportunidad,
                    'folio'                    => $registro->folio,
                    'idintegrante'             => $registro->idintegrante,
                    'estado_oportunidad'       => $registro->estado_oportunidad,
                    'linea'                    => $registro->linea,
                    'aplica_hogar_integrante'  => $registro->aplica_hogar_integrante,
                    'usuario'                  => $usuario,
                    'estado'                   => $registro->estado,
                    'sincro'                   => $registro->sincro,
                    'created_at'               => now(),
                    'updated_at'               => now(),
                    'etiqueta'                 => $registro->etiqueta,
                ]);
            }
        }

        return response()->json(['mensaje' => 'Estado actualizado correctamente y registrado en el histórico.']);
    } catch (\Exception $e) {
        return response()->json(['mensaje' => 'Error: ' . $e->getMessage()], 500);
    }
}


public function fc_recargar_oportunidades(Request $request)
{

        $folio = $request->input('folio'); 
          $query= DB::table('vw_listado_integrantes_oportunidades');
    try {
       

        if (!empty($folio)) {
            $query->where('folio', $folio);
        }

        $data = $query->get();
        

        $acercadas = '';
        $efectivas = '';
        $noefectivas = '';

        foreach ($data as $op) {
            $row = '<tr>';
            if ($op->estado_oportunidad == '1') {
                $row .= '<td class="text-center"><input type="checkbox" class="check-acercada"></td>';
            }
            $row .= '<td>' . $op->idintegrante . '</td>';
            $row .= '<td>' . $op->id_oportunidad . '</td>';
            $row .= '<td>' . $op->folio . '</td>';
            $row .= '<td>' . trim($op->nombre1 . ' ' . ($op->nombre2 ?? '') . ' ' . $op->apellido1 . ' ' . ($op->apellido2 ?? '')) . '</td>';
            $row .= '<td>' . $op->nombre_oportunidad . '</td>';
            $row .= '<td>' . $op->estado_oportunidad_nombre . '</td>';
            $row .= '<td>' . $op->aplica_hogar_integrante_nombre . '</td>';
            $row .= '</tr>';

            if ($op->estado_oportunidad == '1') {
                $acercadas .= $row;
            } elseif ($op->estado_oportunidad == '2') {
                $efectivas .= $row;
            } elseif ($op->estado_oportunidad == '3') {
                $noefectivas .= $row;
            }
        }

        return response()->json([
            'acercadas' => $acercadas,
            'efectivas' => $efectivas,
            'noefectivas' => $noefectivas
        ]);

    } catch (\Exception $e) {
        return response()->json(['error' => 'Error al cargar oportunidades: ' . $e->getMessage()], 500);
    }
}

public function fc_recargar_oportunidadesh(Request $request)
{

    $folio = $request->input('folio'); 
    $query= DB::table('vw_listado_integrantes_oportunidades_hogar');

   // dd($folio);
    try {
        if (!empty($folio)) {
            $query->where('folio', $folio);
        }

         $data = $query->get();

        $acercadas = '';
        $efectivas = '';
        $noefectivas = '';

        foreach ($data as $op) {
            $row = '<tr>';
            if ($op->estado_oportunidad == '1') {
                $row .= '<td class="text-center"><input type="checkbox" class="check-acercada"></td>';
            }
            $row .= '<td>' . $op->idintegrante . '</td>';
             $row .= '<td>' . $op->id_oportunidad . '</td>';
            $row .= '<td>' . $op->folio . '</td>';
            $row .= '<td>' . trim($op->nombre1 . ' ' . ($op->nombre2 ?? '') . ' ' . $op->apellido1 . ' ' . ($op->apellido2 ?? '')) . '</td>';
            $row .= '<td>' . $op->nombre_oportunidad . '</td>';
            $row .= '<td>' . $op->estado_oportunidad_nombre . '</td>';
            $row .= '<td>' . $op->aplica_hogar_integrante_nombre . '</td>';
            $row .= '</tr>';

            if ($op->estado_oportunidad == '1') {
                $acercadas .= $row;
            } elseif ($op->estado_oportunidad == '2') {
                $efectivas .= $row;
            } elseif ($op->estado_oportunidad == '3') {
                $noefectivas .= $row;
            }
        }

        return response()->json([
            'acercadas' => $acercadas,
            'efectivas' => $efectivas,
            'noefectivas' => $noefectivas
        ]);

    } catch (\Exception $e) {
        return response()->json(['error' => 'Error al cargar oportunidades: ' . $e->getMessage()], 500);
    }
}




}
