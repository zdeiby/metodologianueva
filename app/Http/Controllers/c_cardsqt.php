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
    include(app_path('Http/Complementoscontrollers/calculodeindicadoresporhogar.php'));
    //

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
            $indicadoresintegrantes = DB::table('t1_indicadores_integrantes')
            ->where('folio',$folio)
            ->where('idintegrante',$value->idintegrante)
            ->first();

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
                                        <td style="width: 32%;  background-color: #1E293A; color: white; padding: 10px;font-size:12px">BIENESTAR FINANCIERO</td>
                                        <td style="width: 10%;   text-align: center;font-size:12px">0%</td>
                                        <td style="width: 50%;background-color: #1E293A; color: white;" >
                                           <div class="progress" style="height: 20px; display: flex;">
                                                        <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_rojo_bl_integrante.'%; background-color: #FF0000;" aria-valuenow="'.$porcentaje_rojo_bl_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_rojo_bl_integrante.'%</div>
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_verde_bl_integrante.'%; background-color: #00FF00;" aria-valuenow="'.$porcentaje_verde_bl_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_verde_bl_integrante.'%</div>
                                                        
                                                        <!-- Barra gris -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_gris_bl_integrante.'%; background-color: #808080;" aria-valuenow="'.$porcentaje_gris_bl_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_gris_bl_integrante.'%</div>
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
                                                        <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_rojo_bi_integrante.'%; background-color: #FF0000;" aria-valuenow="'.$porcentaje_rojo_bi_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_rojo_bi_integrante.'%</div>
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_verde_bi_integrante.'%; background-color: #00FF00;" aria-valuenow="'.$porcentaje_verde_bi_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_verde_bi_integrante.'%</div>
                                                        
                                                        <!-- Barra gris -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_gris_bi_integrante.'%; background-color: #808080;" aria-valuenow="'.$porcentaje_gris_bi_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_gris_bi_integrante.'%</div>
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
                                                        <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_rojo_bse_integrante.'%; background-color: #FF0000;" aria-valuenow="'.$porcentaje_rojo_bse_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_rojo_bse_integrante.'%</div>
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_verde_bse_integrante.'%; background-color: #00FF00;" aria-valuenow="'.$porcentaje_verde_bse_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_verde_bse_integrante.'%</div>
                                                        
                                                        <!-- Barra gris -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_gris_bse_integrante.'%; background-color: #808080;" aria-valuenow="'.$porcentaje_gris_bse_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_gris_bse_integrante.'%</div>
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
                                                        <!-- Barra roja -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_rojo_bf_integrante.'%; background-color: #FF0000;" aria-valuenow="'.$porcentaje_rojo_bf_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_rojo_bf_integrante.'%</div>
                                                        
                                                        <!-- Barra verde -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_verde_bf_integrante.'%; background-color: #00FF00;" aria-valuenow="'.$porcentaje_verde_bf_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_verde_bf_integrante.'%</div>
                                                        
                                                        <!-- Barra gris -->
                                                        <div class="progress-bar" role="progressbar" style="width: '.$porcentaje_gris_bf_integrante.'%; background-color: #808080;" aria-valuenow="'.$porcentaje_gris_bf_integrante.'" aria-valuemin="0" aria-valuemax="100">'.$porcentaje_gris_bf_integrante.'%</div>
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
