<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_cards;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;

class c_cardsqt extends Controller
{
    public function fc_cardsqt(Request $request, $folio){
      $modelo= new m_cards();
      $hashids = new Hashids('', 10);

      $decodeFolio = $hashids->decode($folio);
      $jefes=$modelo-> m_veredadrepjefe($decodeFolio[0]);
      $foliobr=strval($decodeFolio[0]);
      $foliobycript= encrypt($foliobr);
      $indicadoreshogar = DB::table('t1_indicadores_hogar')
      ->where('folio',$decodeFolio[0])
      ->first();

    // calculo de indicadores para BSE

      $indicadores_bse = [
        'indicadorbse_1' => $indicadoreshogar->indicadorbse_1,
        'indicadorbse_2' => $indicadoreshogar->indicadorbse_2,
        'indicadorbse_3' => $indicadoreshogar->indicadorbse_3,
        'indicadorbse_4' => $indicadoreshogar->indicadorbse_4,
        'indicadorbse_5' => $indicadoreshogar->indicadorbse_5,
        'indicadorbse_6' => $indicadoreshogar->indicadorbse_6,
        'indicadorbse_7' => $indicadoreshogar->indicadorbse_7,
    ];

            // Total de indicadores
        $total_indicadores = 7;
        // Contamos cuántos indicadores tienen el valor 0 (rojo), 1 (verde), o 2 (gris)
        $rojo = count(array_filter($indicadores_bse, fn($indicador) => $indicador == 0));
        $verde = count(array_filter($indicadores_bse, fn($indicador) => $indicador == 1));
        $gris = count(array_filter($indicadores_bse, fn($indicador) => $indicador == 2));

        // Calculamos el porcentaje de cada color
        $porcentaje_rojo_bse = round(($rojo / $total_indicadores) * 100);
        $porcentaje_verde_bse = round(($verde / $total_indicadores) * 100);
        $porcentaje_gris_bse = round(($gris / $total_indicadores) * 100);

        //CALCULOS DE INDICADORES PARA BL

        $indicadores_bl = [
            'indicadorbl_1' => $indicadoreshogar->indicadorbl_1,
            'indicadorbl_2' => $indicadoreshogar->indicadorbl_2,
            'indicadorbl_3' => $indicadoreshogar->indicadorbl_3,
            'indicadorbl_4' => $indicadoreshogar->indicadorbl_4,
            'indicadorbl_5' => $indicadoreshogar->indicadorbl_5,
            'indicadorbl_6' => $indicadoreshogar->indicadorbl_6,
            'indicadorbl_7' => $indicadoreshogar->indicadorbl_7,
            'indicadorbl_8' => $indicadoreshogar->indicadorbl_8,
            'indicadorbl_9' => $indicadoreshogar->indicadorbl_9,
            'indicadorbl_10' => $indicadoreshogar->indicadorbl_10,
        ];
        
        // Total de indicadores
        $total_indicadores_bl = 10;
        
        // Contamos cuántos indicadores tienen el valor 0 (rojo), 1 (verde), o 2 (gris)
        $rojo_bl = count(array_filter($indicadores_bl, fn($indicador) => $indicador == 0));
        $verde_bl = count(array_filter($indicadores_bl, fn($indicador) => $indicador == 1));
        $gris_bl = count(array_filter($indicadores_bl, fn($indicador) => $indicador == 2));
        
        // Calculamos el porcentaje de cada color
        $porcentaje_rojo_bl = round(($rojo_bl / $total_indicadores_bl) * 100);
        $porcentaje_verde_bl = round(($verde_bl / $total_indicadores_bl) * 100);
        $porcentaje_gris_bl = round(($gris_bl / $total_indicadores_bl) * 100);
        
        // CALCULOS INDICADORES PARA BEF

        $indicadores_bef = [
            'indicadorbef_1' => $indicadoreshogar->indicadorbef_1,
            'indicadorbef_2' => $indicadoreshogar->indicadorbef_2,
            'indicadorbef_3' => $indicadoreshogar->indicadorbef_3,
            'indicadorbef_4' => $indicadoreshogar->indicadorbef_4,
            'indicadorbef_5' => $indicadoreshogar->indicadorbef_5,
        ];
        
        // Total de indicadores
        $total_indicadores_bef = 5;
        
        // Contamos cuántos indicadores tienen el valor 0 (rojo), 1 (verde), o 2 (gris)
        $rojo_bef = count(array_filter($indicadores_bef, fn($indicador) => $indicador == 0));
        $verde_bef = count(array_filter($indicadores_bef, fn($indicador) => $indicador == 1));
        $gris_bef = count(array_filter($indicadores_bef, fn($indicador) => $indicador == 2));
        
        // Calculamos el porcentaje de cada color
        $porcentaje_rojo_bef = round(($rojo_bef / $total_indicadores_bef) * 100);
        $porcentaje_verde_bef = round(($verde_bef / $total_indicadores_bef) * 100);
        $porcentaje_gris_bef = round(($gris_bef / $total_indicadores_bef) * 100);

        //CALCULO INDICADORES BI


        $indicadores_bi = [
            'indicadorbi_1' => $indicadoreshogar->indicadorbi_1,
            'indicadorbi_2' => $indicadoreshogar->indicadorbi_2,
            'indicadorbi_3' => $indicadoreshogar->indicadorbi_3,
            'indicadorbi_4' => $indicadoreshogar->indicadorbi_4,
            'indicadorbi_5' => $indicadoreshogar->indicadorbi_5,
            'indicadorbi_6' => $indicadoreshogar->indicadorbi_6,
        ];
        
        // Total de indicadores
        $total_indicadores_bi = 6;
        
        // Contamos cuántos indicadores tienen el valor 0 (rojo), 1 (verde), o 2 (gris)
        $rojo_bi = count(array_filter($indicadores_bi, fn($indicador) => $indicador == 0));
        $verde_bi = count(array_filter($indicadores_bi, fn($indicador) => $indicador == 1));
        $gris_bi = count(array_filter($indicadores_bi, fn($indicador) => $indicador == 2));
        
        // Calculamos el porcentaje de cada color
        $porcentaje_rojo_bi = round(($rojo_bi / $total_indicadores_bi) * 100);
        $porcentaje_verde_bi = round(($verde_bi / $total_indicadores_bi) * 100);
        $porcentaje_gris_bi = round(($gris_bi / $total_indicadores_bi) * 100);
        
        //INDICADORES PARA BF

        $indicadores_bf = [
            'indicadorbf_1' => $indicadoreshogar->indicadorbf_1,
            'indicadorbf_2' => $indicadoreshogar->indicadorbf_2,
            'indicadorbf_3' => $indicadoreshogar->indicadorbf_3,
            'indicadorbf_4' => $indicadoreshogar->indicadorbf_4,
            'indicadorbf_5' => $indicadoreshogar->indicadorbf_5,
        ];
        
        // Total de indicadores
        $total_indicadores_bf = 5;
        
        // Contamos cuántos indicadores tienen el valor 0 (rojo), 1 (verde), o 2 (gris)
        $rojo_bf = count(array_filter($indicadores_bf, fn($indicador) => $indicador == 0));
        $verde_bf = count(array_filter($indicadores_bf, fn($indicador) => $indicador == 1));
        $gris_bf = count(array_filter($indicadores_bf, fn($indicador) => $indicador == 2));
        
        // Calculamos el porcentaje de cada color
        $porcentaje_rojo_bf = round(($rojo_bf / $total_indicadores_bf) * 100);
        $porcentaje_verde_bf = round(($verde_bf / $total_indicadores_bf) * 100);
        $porcentaje_gris_bf = round(($gris_bf / $total_indicadores_bf) * 100);
        


        return view('v_cardsqt',["variable"=>$decodeFolio[0], "folioencriptado"=>$folio,'jefes' => $jefes, 'foliobycript'=>$foliobycript, 'indicadoreshogar'=>$indicadoreshogar,
        'porcentaje_rojo_bse'=>$porcentaje_rojo_bse, 'porcentaje_verde_bse'=>$porcentaje_verde_bse, 'porcentaje_gris_bse'=>$porcentaje_gris_bse,
        'porcentaje_rojo_bl'=>$porcentaje_rojo_bl, 'porcentaje_verde_bl'=>$porcentaje_verde_bl, 'porcentaje_gris_bl'=>$porcentaje_gris_bl,
        'porcentaje_rojo_bef'=>$porcentaje_rojo_bef, 'porcentaje_verde_bef'=>$porcentaje_verde_bef, 'porcentaje_gris_bef'=>$porcentaje_gris_bef,
        'porcentaje_rojo_bi'=>$porcentaje_rojo_bi, 'porcentaje_verde_bi'=>$porcentaje_verde_bi, 'porcentaje_gris_bi'=>$porcentaje_gris_bi,
        'porcentaje_rojo_bf'=>$porcentaje_rojo_bf, 'porcentaje_verde_bf'=>$porcentaje_verde_bf, 'porcentaje_gris_bf'=>$porcentaje_gris_bf


    ]);
      }

    public function fc_leerintegrantesqt(Request $request){
        $folio=$request->input('folio');
        $folioencriptado=$request->input('folioencriptado');
        $modelo= new m_cards();
        $integrantes=$modelo-> m_leerintegrantes($folio);
        
        $hashids = new Hashids('', 10); 

        $foliosintegrante = '';
        foreach ($integrantes as $key => $value) {
            $collapseId = 'collapse' . $key; // Generar un ID único para cada acordeón
            $headingId = 'heading' . $key;   // Generar un ID único para cada encabezado
        
            $foliosintegrante .= '<tr class="table-dark"  style="font-weight:bold; border:1px solid #343a40; cursor: pointer  " data-bs-toggle="collapse" data-bs-target="#' . $collapseId . '" aria-expanded="false" aria-controls="' . $collapseId . '">
                <td class="align-middle" style=" font-size:13px;">

                    Categorías priorizadas por el integrante con mayor vulnerabilidad
                </td>
                <td class="align-middle" style=" font-size:13px;" >
                    '.$value->nombre1.' '.$value->nombre2.' '.$value->apellido1.' '.$value->apellido2.'
                </td>
                <td class="align-middle" >
                    <button class="habilitado btn btn-'.(($value->validacion == '0')?'light':'warning').' btn-sm" '.(($value->validacion == '0')?'':'disabled').' onclick="iraqt(`'.$hashids->encode($value->idintegrante).'`,`'.$folioencriptado.'`)">
                        Ir a QT
                    </button>
                </td>
                <td style="width:100px !important; ">
                    <img src="' .(($value->avatar)? asset('avatares/'.$value->avatar.'.png'):(($value->sexo =="13")?asset('avatares/mujer_avatar.png'):asset('avatares/hombre_avatar.png'))) . '" width="100%" alt="">
                </td>
                <td class="align-middle align-center" style="text-align: center !important;">
                    <i class="bi bi-chevron-down"></i> <!-- Icono de flecha al final -->
                </td>
            </tr>
            <tr id="' . $collapseId . '" class="collapse" aria-labelledby="' . $headingId . '" data-bs-parent="#accordionExample" class="bg-light" style="border:1px solid #343a40">
                <td colspan="5" class="align-middle" >
                    <!-- Contenido desplegable aquí -->
                        <div style="display: flex; justify-content: space-between; gap: 20px;" class="mb-2">
                            <!-- Primera columna -->
                             <div style="flex: 1;">
                                <table style="width: 100%;border-radius:10px; border-spacing: 0 10px; border-collapse: separate;background-color: #1E293A; color: white;"  class="container">
                                    <tr >
                                        <td style="width: 32%;  background-color: #1E293A; color: white; padding: 10px;font-size:12px">BIENESTAR EN FAMILIA</td>
                                        <td style="width: 10%;   text-align: center;font-size:12px">0%</td>
                                        <td style="width: 50%;background-color: #1E293A; color: white;" >
                                           <div class="progress" style="height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: 10%; background-color: #F69331;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                                                <div class="progress-bar bg-white" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <td style="width: 32%;  background-color: #1E293A; color: white; padding: 10px;font-size:12px">BIENESTAR FINANCIERO</td>
                                        <td style="width: 10%;   text-align: center;font-size:12px">0%</td>
                                        <td style="width: 50%;background-color: #1E293A; color: white;" >
                                              <div class="progress" style="height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: 10%; background-color: #F69331;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                                                <div class="progress-bar bg-white" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
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
                                          <div class="progress" style="height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: 10%; background-color: #F69331;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                                                <div class="progress-bar bg-white" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
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
                                              <div class="progress" style="height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: 10%; background-color: #F69331;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                                                <div class="progress-bar bg-white" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
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
                                <table style="width: 100%; border-radius:10px; border-spacing: 0 10px; border-collapse: separate;background-color: #1E293A; color: white;" class="container">
                                    <tr >
                                        <td style="width: 32%;  background-color: #1E293A; color: white; padding: 10px;font-size:12px">BIENESTAR LEGAL</td>
                                        <td style="width: 10%;   text-align: center;font-size:12px">0%</td>
                                        <td style="width: 50%;background-color: #1E293A; color: white;" >
                                            <div class="progress" style="height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #F69331;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                              </div> 
                                        </td>
                                        <td style="width: 15%;   text-align: center;font-size:12px"> 100%</td>
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

    public function fc_eliminarintegrantes(Request $request){
      $integrantehogar=  DB::table('t1_integranteshogar')
      ->where('folio', $request->input('folio'))
      ->where('idintegrante', $request->input('idintegrante'))
      ->where('representante', '!=', 1)
      ->delete();
      if($integrantehogar ==1){
        DB::table('t1_integrantesidentitario')
            ->where('folio', $request->input('folio'))
            ->where('idintegrante', $request->input('idintegrante'))
            ->delete();
            DB::table('t1_integrantesfinanciero')
            ->where('folio', $request->input('folio'))
            ->where('idintegrante', $request->input('idintegrante'))
            ->delete();
            DB::table('t1_integrantesfisicoyemocional')
            ->where('folio', $request->input('folio'))
            ->where('idintegrante', $request->input('idintegrante'))
            ->delete();
            DB::table('t1_integrantesintelectual')
            ->where('folio', $request->input('folio'))
            ->where('idintegrante', $request->input('idintegrante'))
            ->delete();
            DB::table('t1_integranteslegal')
            ->where('folio', $request->input('folio'))
            ->where('idintegrante', $request->input('idintegrante'))
            ->delete();
      }

  return response()->json(['message' =>  $integrantehogar]);
  }

  public function fc_finalizarintegrantesqt(Request $request){
      $now = Carbon::now();
      $folio = $request->input('folio');
      $linea = 100;  // poner linea 
      $paso = 10050;  // poner paso
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

      

      $existsvisitas = DB::table('t1_visitasrealizadas')
      ->where('folio', $folio)
      ->where('linea', $linea)
      ->exists();

          if (!$existsvisitas) {
              // Si no existe, agregar created_at
              $datavisitageneral['created_at'] = $now;
          }

          $datavisitageneral = [
              'folio' => $folio,
              'linea' => $linea,
              'finvisita' => $now,
              'usuario' => $usuario,
              'estado' => 1,
              'sincro' => 0,
              'updated_at' => $now
          ];
          DB::table('t1_visitasrealizadas')->updateOrInsert(
              [
                  'folio' => $folio,
                  'linea' => $linea,
              ],
              $datavisitageneral
          );

      return response()->json(['message' => $existsvisitas]);
  }
  

}
