<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\m_cards;
use Hashids\Hashids;

class c_rombo extends Controller
{
    public function fc_rombo(Request $request, $cedula){
      if (!session('nombre')) {
        // Si no existe la sesión 'usuario', redirigir al login
        return redirect()->route('login');
    }

    $hashids = new Hashids('', 10);
    $encodeFolio = $hashids->encode(decrypt($cedula));

      $linea = 100;
      // Obtener el registro en lugar de solo verificar si existe
        $registro = DB::table('t1_visitasrealizadas')
        ->where('folio', decrypt($cedula))  // Comparamos el folio desencriptado
        ->where('linea', $linea)            // Comparamos la línea
        ->first();                          // Obtener el primer registro que coincida
          // Verificamos si el registro existe y si su estado es igual a 0

          $porcentaje_rojo_bse='';
          $porcentaje_verde_bse='';
         // $porcentaje_gris_bse='';
          $porcentaje_rojo_bl='';
          $porcentaje_verde_bl='';
        //  $porcentaje_gris_bl='';
          $porcentaje_rojo_bef='';
          $porcentaje_verde_bef='';
        //  $porcentaje_gris_bef='';
          $porcentaje_rojo_bi='';
          $porcentaje_verde_bi='';
         // $porcentaje_gris_bi='';
          $porcentaje_rojo_bf='';
          $porcentaje_verde_bf='';
        //  $porcentaje_gris_bf='';

        $registrovt1 = DB::table('t1_visitasrealizadas')
        ->where('folio', decrypt($cedula))  // Comparamos el folio desencriptado
        ->where('linea', 200)            // Comparamos la línea
        ->first(); 

         $registrovt1r1 = DB::table('t1_visitasrealizadas')
        ->where('folio', decrypt($cedula))  // Comparamos el folio desencriptado
        ->where('linea', 300)            // Comparamos la línea
        ->first(); 

        $registrovt1r2 = DB::table('t1_visitasrealizadas')
        ->where('folio', decrypt($cedula))  // Comparamos el folio desencriptado
        ->where('linea', 400)            // Comparamos la línea
        ->first(); 
        $registrovt1r3 = DB::table('t1_visitasrealizadas')
        ->where('folio', decrypt($cedula))  // Comparamos el folio desencriptado
        ->where('linea', 500)            // Comparamos la línea
        ->first();
        
        $registrovt1r4 = DB::table('t1_visitasrealizadas')
        ->where('folio', decrypt($cedula))  // Comparamos el folio desencriptado
        ->where('linea', 600)            // Comparamos la línea
        ->first();

        $metodologia = DB::table('t1_principalhogar')
        ->where('folio', decrypt($cedula))
        ->value('metodologia');
       

          if ($registro && $registro->estado == 1) {
              $realizado = 1;
              $indicadoreshogar = DB::table('t1_indicadores_hogar')
              ->where('folio',decrypt($cedula))
              ->first();


              if($metodologia == 2){
                $indicadoreshogar = DB::table('t1_indicadores_hogar_ffes')
                    ->where('folio',decrypt($cedula))
                    ->first();

                    $vista_indicadoreshogar = DB::table('v_indicadores_hogar_ffes_resumen')
                    ->where('folio',decrypt($cedula))
                    ->first();
            }else{
                $indicadoreshogar = DB::table('t1_indicadores_hogar')
                ->where('folio',decrypt($cedula))
                ->first();

                $vista_indicadoreshogar = DB::table('v_indicadores_hogar_mef_resumen')
                    ->where('folio',decrypt($cedula))
                    ->first();
            }


              // calculo de indicadores para BSE
            include(app_path('Http/Complementoscontrollers/calculodeindicadoresporhogar.php'));
            //
          } else {
              $realizado = 0;
          }

          $alerta1 = DB::table('t1_alertasgestor')
                ->where('folio', decrypt($cedula))
                ->where('numero_alerta', 1) // Tipo 1 para alerta de grupo 2
                ->exists(); 
                

              //  dd($alerta1);

            $casilla = DB::table('t1_casillamatriz')
                ->where('folio', decrypt($cedula))
                ->value('casillamatriz');

            $es_grupo1 = in_array((int)$casilla, [1,2,4,5]);
            $es_grupo2 = in_array((int)$casilla, [3,6]);
            $es_grupo3 = in_array((int)$casilla, [7,8]);


         // dd($realizado);

            $realizadosvt1 = (($registrovt1 && $registrovt1->estado == 1)?1:0);
            $realizadosvt1r1 = (($registrovt1r1 && $registrovt1r1->estado == 1)?1:0);
            $realizadosvt1r2 = (($registrovt1r2 && $registrovt1r2->estado == 1)?1:0);
             // dd($realizadosvt1r2);
            $realizadosvt1r3 = (($registrovt1r3 && $registrovt1r3->estado == 1)?1:0);
            $realizadosvt1r4 = (($registrovt1r4 && $registrovt1r4->estado == 1)?1:0);


            $categorias = [
                'BIENESTAR EN FAMILIA' => $porcentaje_rojo_bef,
                'BIENESTAR FINANCIERO' => $porcentaje_rojo_bf,
                'BIENESTAR INTELECTUAL' => $porcentaje_rojo_bi,
                'BIENESTAR PARA LA SALUD FISICA Y EMOCIONAL' => $porcentaje_rojo_bse,
                'BIENESTAR LEGAL' => $porcentaje_rojo_bl,
            ];

            $categoria_reforzar = collect($categorias)->sortDesc()->keys()->first();
            $valor_reforzar = collect($categorias)->max();


            //dd($realizadosvt1r3);

         // dd($realizadovt1);
        return view('v_rombo',["foliomenu"=>decrypt($cedula),  'es_grupo1' => $es_grupo1, 'es_grupo2' => $es_grupo2, 'es_grupo3' => $es_grupo3, 
        'realizadosvt1'=>$realizadosvt1, 
        'realizadosvt1r1'=>$realizadosvt1r1, 
        'realizadosvt1r2'=>$realizadosvt1r2, 
        'realizadosvt1r3'=>$realizadosvt1r3, 
        'realizadosvt1r4'=>$realizadosvt1r4, 
        'alerta1'=>$alerta1,
        "variable"=>decrypt($cedula), 'encodeFolio'=>$encodeFolio,"variablebtn"=>$cedula, 'realizado'=>$realizado, 'foliobycript'=>decrypt($cedula),  
        'porcentaje_rojo_bse'=>$porcentaje_rojo_bse, 'porcentaje_verde_bse'=>$porcentaje_verde_bse, //'porcentaje_gris_bse'=>$porcentaje_gris_bse,
        'porcentaje_rojo_bl'=>$porcentaje_rojo_bl, 'porcentaje_verde_bl'=>$porcentaje_verde_bl, //'porcentaje_gris_bl'=>$porcentaje_gris_bl,
        'porcentaje_rojo_bef'=>$porcentaje_rojo_bef, 'porcentaje_verde_bef'=>$porcentaje_verde_bef,// 'porcentaje_gris_bef'=>$porcentaje_gris_bef,
        'porcentaje_rojo_bi'=>$porcentaje_rojo_bi, 'porcentaje_verde_bi'=>$porcentaje_verde_bi, //'porcentaje_gris_bi'=>$porcentaje_gris_bi,
        'porcentaje_rojo_bf'=>$porcentaje_rojo_bf, 'porcentaje_verde_bf'=>$porcentaje_verde_bf,// 'porcentaje_gris_bf'=>$porcentaje_gris_bf, 
        'metodologia' => $metodologia,
        'total_indicadoresDA_verdes' => $pct_DA_verde ?? 0,
        'total_indicadoresDI_verdes' => $pct_DI_verde ?? 0,
        'total_indicadoresDA_rojos'=> $pct_DA_rojo ?? 0,
        'pct_avance'=>$pct_avance ?? 0, 'valor_reforzar'=>$valor_reforzar, 'categoria_reforzar'=>$categoria_reforzar,
        'folioencriptado'=>decrypt($cedula)]);
      }



      public function fc_leerintegrantesqt_rombo(Request $request){
        $folio=$request->input('folio');
        $folioencriptado=$request->input('folioencriptado');
        $metodologia=$request->input('metodologia');
        $modelo= new m_cards();
        $integrantes=$modelo-> m_leerintegrantes($folio);
       // dd($integrantes);
        $hashids = new Hashids('', 10); 

        $foliosintegrante = '';
        foreach ($integrantes as $key => $value) {
            if($metodologia == 2){
                $indicadoresintegrantes = DB::table('t1_indicadores_integrantes_ffes')
                ->where('folio',$folio)
                ->where('idintegrante',$value->idintegrante)
                ->first();
            }else{
                $indicadoresintegrantes = DB::table('t1_indicadores_integrantes')
                ->where('folio',$folio)
                ->where('idintegrante',$value->idintegrante)
                ->first();
            }

            include(app_path('Http/Complementoscontrollers/calculodeindicadoresporintegrante.php'));


            $collapseId = 'collapse' . $key; // Generar un ID único para cada acordeón
            $headingId = 'heading' . $key;   // Generar un ID único para cada encabezado
        
            $foliosintegrante .= '<tr class="table-dark"  style="font-weight:bold; border:1px solid #343a40; cursor: pointer  " data-bs-toggle="collapse" data-bs-target="#' . $collapseId . '" aria-expanded="false" aria-controls="' . $collapseId . '">
                <td class="align-middle" style=" font-size:13px;">

                    Categorías priorizadas por el integrante con mayor vulnerabilidad
                </td>
                <td class="align-middle" style=" font-size:13px;" >
                    '.$value->nombre1.' '.$value->nombre2.' '.$value->apellido1.' '.$value->apellido2.'
                </td>
                 <td class="align-middle text-center" style=" font-size:13px;" >
                    '.(($value->representante == '1')?'SI':'NO').' 
                </td>
                <td class="align-middle" >
                    <button class="habilitado btn btn-'.(($value->validacion)?'light':'warning').' btn-sm" '.(($value->validacion)?'':'disabled').' onclick="iraqt(`'.$hashids->encode($value->idintegrante).'`,`'.$hashids->encode($folioencriptado).'`)">
                        ver QT
                    </button>
                </td>
                <td style="width:100px !important; ">
                    <img src="' .(($value->avatar)? asset('avatares/'.$value->avatar.'.png'):(($value->sexo =="13")?asset('avatares/mujer_avatar.png'):asset('avatares/hombre_avatar.png'))) . '" width="100%" alt="">
                </td>

                 <td class="align-middle text-center" style=" font-size:13px; '.(($value->cuenta_con_sisben =='NO')?'background:red':'').'" >
                    '.$value->cuenta_con_sisben.' 
                </td>

                 <td class="align-middle text-center" style=" font-size:13px;" >
                     '.(($value->ruta_sisben == '')?'SIN DATO':$value->ruta_sisben).'  
                </td>


                <td class="align-middle align-center" style="text-align: center !important;">
                    <i class="bi bi-chevron-down"></i> <!-- Icono de flecha al final -->
                </td>
            </tr>
            <tr id="' . $collapseId . '" class="collapse" aria-labelledby="' . $headingId . '" data-bs-parent="#accordionExample" class="bg-light" style="border:1px solid #343a40">
                <td colspan="6" class="align-middle" >
                    <!-- Contenido desplegable aquí -->
                        <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                            <!-- Primera columna -->
                             <div style="flex: 1;">
                                <table style="width: 100%;border-radius:10px; border-spacing: 0 10px; border-collapse: separate;background-color: #1E293A; color: white;"  class="container">
                                    <tr >
                                        <td style="width: 32%;  background-color: #1E293A; color: white; padding: 10px;font-size:12px">BIENESTAR FINANCIERO</td>
                                        <td style="width: 10%;   text-align: center;font-size:12px">0%</td>
                                        <td style="width: 50%;background-color: #1E293A; color: white;" >
                                           <div class="progress" style="height: 20px; display: flex;">
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_verde_bf_integrante.'%; background-color: #00FF00;" aria-valuenow="'.$porcentaje_verde_bf_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_verde_bf_integrante.'%</div>
                                                                                                                <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_rojo_bf_integrante.'%; background-color: #FF0000;" aria-valuenow="'.$porcentaje_rojo_bf_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_rojo_bf_integrante.'%</div>

                                                    </div>
                                        </td>
                                        <td style="width: 10%;   text-align: center;font-size:12px">100%</td>
                                    </tr>
                                </table>
                            </div>
    
                            <!-- Segunda columna -->
                            
                                <div style="flex: 1;">
                                <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate;background-color: #1E293A; color: white;"  class="container">
                                    <tr >
                                        <td style="width: 32%;  background-color: #1E293A; color: white; padding: 10px;font-size:12px">BIENESTAR LEGAL</td>
                                        <td style="width: 10%;   text-align: center;font-size:12px">0%</td>
                                        <td style="width: 50%;background-color: #1E293A; color: white;" >
                                              <div class="progress" style="height: 20px; display: flex;">
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_verde_bl_integrante.'%; background-color: #00FF00;" aria-valuenow="'.$porcentaje_verde_bl_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_verde_bl_integrante.'%</div>
                                                                                                                <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_rojo_bl_integrante.'%; background-color: #FF0000;" aria-valuenow="'.$porcentaje_rojo_bl_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_rojo_bl_integrante.'%</div>

                                                    </div>
                                        </td>
                                        <td style="width: 10%;   text-align: center;font-size:12px">100%</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    <div style="display: flex; justify-content: space-between; gap: 20px;"class="mb-2">
                        <!-- Primera columna -->
                        <div style="flex: 1;">
                            <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate;background-color: #1E293A; color: white;"  class="container">
                                <tr >
                                    <td style="width: 32%;  background-color: #1E293A; color: white; padding: 10px;font-size:12px">BIENESTAR INTELECTUAL   
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
                                    <td style="width: 10%;   text-align: center;font-size:12px">0%</td>
                                    <td style="width: 50%;background-color: #1E293A; color: white;" >
                                         <div class="progress" style="height: 20px; display: flex;">
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_verde_bi_integrante.'%; background-color: #00FF00;" aria-valuenow="'.$porcentaje_verde_bi_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_verde_bi_integrante.'%</div>
                                                                                                                <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_rojo_bi_integrante.'%; background-color: #FF0000;" aria-valuenow="'.$porcentaje_rojo_bi_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_rojo_bi_integrante.'%</div>

                                                    </div>
                                    </td>
                                    <td style="width: 10%;   text-align: center;font-size:12px">100%</td>
                                </tr>
                            </table>
                        </div>
    
                            <!-- Segunda columna -->
                            <div style="flex: 1;">
                                <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate;background-color: #1E293A; color: white;"  class="container">
                                    <tr >
                                        <td style="width: 32%;  background-color: #1E293A; color: white; padding: 10px;font-size:12px">BIENESTAR PARA LA SALUD FISICA Y EMOCIONAL</td>
                                        <td style="width: 10%;   text-align: center;font-size:12px">0%</td>
                                        <td style="width: 50%;background-color: #1E293A; color: white;" >
                                             <div class="progress" style="height: 20px; display: flex;">
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_verde_bse_integrante.'%; background-color: #00FF00;" aria-valuenow="'.$porcentaje_verde_bse_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_verde_bse_integrante.'%</div>
                                                                                                                <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_rojo_bse_integrante.'%; background-color: #FF0000;" aria-valuenow="'.$porcentaje_rojo_bse_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_rojo_bse_integrante.'%</div>

                                                    </div>
                                        </td>
                                        <td style="width: 10%;   text-align: center;font-size:12px">100%</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    
                    <div style="display: flex; justify-content: space-between; gap: 20px;">

    
    
</div>

                </td>
            </tr>';
        }
        
            return response()->json(["foliosintegrante"=>$foliosintegrante]);
    }

}
