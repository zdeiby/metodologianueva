<?php

namespace App\Http\Controllers\formularioqt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_login;
use App\Models\visitaslineas\m_l1e1;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;


class c_encuestaintegrantesqt extends Controller
{

// IR A LA VISTA BIENESTAR FISICO Y EMOCIONAL

    public function fc_bienestarsaludemocionalqt(Request $request,$folio, $integrante){
            $tabla = 't1_saludemocionalqt';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $decodeIntegrante = $hashids->decode($integrante);
            $informacion = DB::table($tabla)
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $t1_indicador_bse_1 = DB::table('t1_indicador_bse_1')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bse_1='';
            foreach ($t1_indicador_bse_1 as $indicador) {
                $indicador_bse_1=$indicador->codigoindicadorDA;
            }

            //indicador bse 3
            $t1_indicador_bse_3 = DB::table('t1_indicador_bse_3')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bse_3='';
            foreach ($t1_indicador_bse_3 as $indicador) {
                $indicador_bse_3=$indicador->codigoindicadorDA;
            }

            //indicador_bse_4
            $t1_indicador_bse_4 = DB::table('t1_indicador_bse_4')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bse_4='';
            foreach ($t1_indicador_bse_4 as $indicador4) {
                $indicador_bse_4=$indicador4->codigoindicadorDA;
            }

             //indicador_bse_5
            $t1_indicador_bse_5 = DB::table('t1_indicador_bse_5')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bse_5='';
            foreach ($t1_indicador_bse_5 as $indicador) {
                $indicador_bse_5=$indicador->codigoindicadorDA;
            }

             //indicador_bse_6
                $t1_indicador_bse_6 = DB::table('t1_indicador_bse_6')
                ->where('idintegrante', $decodeIntegrante)
                ->where('folio', $encodedFolio)
                ->get();

                $indicador_bse_6='';
                foreach ($t1_indicador_bse_6 as $indicador) {
                    $indicador_bse_6=$indicador->codigoindicadorDA;
                }


                                //indicador_bse_7
                $t1_indicador_bse_7 = DB::table('t1_indicador_bse_7')
                ->where('folio', $encodedFolio)
                ->get();

                $indicador_bse_7='';
                foreach ($t1_indicador_bse_7 as $indicador) {
                    $indicador_bse_7=$indicador->codigoindicadorDA;
                }


                


                    


            
            $datos = [
                'indicadorbse1_1' => '',
                'indicadorbse1_2' => '',
                'indicadorbse1_3' => '',
                'indicadorbse2_1' => '',
                'indicadorbse2_2' => '',
                'indicadorbse2_3' => '',
                'indicadorbse3_1' => '',
                'indicadorbse3_2' => '',
                'indicadorbse3_3' => '',
                'indicadorbse4_1' => '',
                'indicadorbse4_2' => '',
                'indicadorbse4_3' => '',
                'indicadorbse5_1' => '',
                'indicadorbse5_2' => '',
                'indicadorbse5_3' => '',
                'indicadorbse6_1' => '',
                'indicadorbse6_2' => '',
                'indicadorbse6_3' => '',
                'indicadorbse7_1' => '',
                'indicadorbse7_2' => '',
                'siguiente' => 'style="display:none"'
            ];
            
            foreach ($informacion as $registro) {
                // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
                $datos['indicadorbse1_1'] = $registro->indicadorbse1_1;
                $datos['indicadorbse1_2'] = $registro->indicadorbse1_2;
                $datos['indicadorbse1_3'] = $registro->indicadorbse1_3;
                $datos['indicadorbse2_1'] = $registro->indicadorbse2_1;
                $datos['indicadorbse2_2'] = $registro->indicadorbse2_2;
                $datos['indicadorbse2_3'] = $registro->indicadorbse2_3;
                $datos['indicadorbse3_1'] = $registro->indicadorbse3_1;
                $datos['indicadorbse3_2'] = $registro->indicadorbse3_2;
                $datos['indicadorbse3_3'] = $registro->indicadorbse3_3;
                $datos['indicadorbse4_1'] = $registro->indicadorbse4_1;
                $datos['indicadorbse4_2'] = $registro->indicadorbse4_2;
                $datos['indicadorbse4_3'] = $registro->indicadorbse4_3;
                $datos['indicadorbse5_1'] = $registro->indicadorbse5_1;
                $datos['indicadorbse5_2'] = $registro->indicadorbse5_2;
                $datos['indicadorbse5_3'] = $registro->indicadorbse5_3;
                $datos['indicadorbse6_1'] = $registro->indicadorbse6_1;
                $datos['indicadorbse6_2'] = $registro->indicadorbse6_2;
                $datos['indicadorbse6_3'] = $registro->indicadorbse6_3;
                $datos['indicadorbse7_1'] = $registro->indicadorbse7_1;
                $datos['indicadorbse7_2'] = $registro->indicadorbse7_2;

                $datos['siguiente'] = (($registro->estado == '1')?'style="display:"':'style="display:none"');


            }
            
            

            return view('formularioqt/v_bienestarsaludemocionalqt',  $datos,['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0] ,
                                                                    'integrantecodificado'=>$integrante , 
                                                                     'tabla'=>$tabla, 'indicador_bse_1'=>$indicador_bse_1 , 'indicador_bse_3'=>$indicador_bse_3, 'indicador_bse_4'=>$indicador_bse_4, 'indicador_bse_5'=>$indicador_bse_5,
                                                                     'indicador_bse_6'=>$indicador_bse_6, 'indicador_bse_7'=>$indicador_bse_7
                                                                    ]);
    }


    public function fc_legalqt(Request $request,$folio, $integrante){
        $tabla = 't1_legalqt';
    $hashids = new Hashids('', 10); 
    $encodedFolio = $hashids->decode($folio);
    $decodeIntegrante = $hashids->decode($integrante);


     //indicador_bl_1
     $t1_indicador_bl_1 = DB::table('t1_indicador_bl_1')
     ->where('idintegrante', $decodeIntegrante)
     ->where('folio', $encodedFolio)
     ->get();

     $indicador_bl_1='';
     foreach ($t1_indicador_bl_1 as $indicador) {
         $indicador_bl_1=$indicador->codigoindicadorDA;
     }


      //indicador_bl_2
            $t1_indicador_bl_2 = DB::table('t1_indicador_bl_2')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bl_2='';
            foreach ($t1_indicador_bl_2 as $indicador) {
                $indicador_bl_2=$indicador->codigoindicadorDA;
            }


             //indicador_bl_3
 $t1_indicador_bl_3 = DB::table('t1_indicador_bl_3')
 ->where('idintegrante', $decodeIntegrante)
 ->where('folio', $encodedFolio)
 ->get();

 $indicador_bl_3='';
 foreach ($t1_indicador_bl_3 as $indicador) {
     $indicador_bl_3=$indicador->codigoindicadorDA;
 }

  //indicador_bl_4
  $t1_indicador_bl_4 = DB::table('t1_indicador_bl_4')
  ->where('idintegrante', $decodeIntegrante)
  ->where('folio', $encodedFolio)
  ->get();

  $indicador_bl_4='';
  foreach ($t1_indicador_bl_4 as $indicador) {
      $indicador_bl_4=$indicador->codigoindicadorDA;
  }

 //indicador_bl_5
 $t1_indicador_bl_5 = DB::table('t1_indicador_bl_5')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bl_5='';
            foreach ($t1_indicador_bl_5 as $indicador) {
                $indicador_bl_5=$indicador->codigoindicadorDA;
            }

             //indicador_bl_6
 $t1_indicador_bl_6 = DB::table('t1_indicador_bl_6')
 ->where('idintegrante', $decodeIntegrante)
 ->where('folio', $encodedFolio)
 ->get();

 $indicador_bl_6='';
 foreach ($t1_indicador_bl_6 as $indicador) {
     $indicador_bl_6=$indicador->codigoindicadorDA;
 }
        

  //indicador_bl_7
  $t1_indicador_bl_7 = DB::table('t1_indicador_bl_7')
  ->where('idintegrante', $decodeIntegrante)
  ->where('folio', $encodedFolio)
  ->get();

  $indicador_bl_7='';
  foreach ($t1_indicador_bl_7 as $indicador) {
      $indicador_bl_7=$indicador->codigoindicadorDA;
  }

 //indicador_bl_8
 $t1_indicador_bl_8 = DB::table('t1_indicador_bl_8')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bl_8='';
            foreach ($t1_indicador_bl_8 as $indicador) {
                $indicador_bl_8=$indicador->codigoindicadorDA;
            }


 //indicador_bl_10
 $t1_indicador_bl_10 = DB::table('t1_indicador_bl_10')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bl_10='';
            foreach ($t1_indicador_bl_10 as $indicador) {
                $indicador_bl_10=$indicador->codigoindicadorDA;
            }









     return view('formularioqt/v_legalqt',['variable'=>$folio, 'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0] , 'integrantecodificado'=>$integrante ,  'tabla'=>$tabla,'indicador_bl_1'=>$indicador_bl_1,'indicador_bl_2'=>$indicador_bl_2,
    'indicador_bl_3'=>$indicador_bl_3, 'indicador_bl_4'=>$indicador_bl_4, 'indicador_bl_5'=>$indicador_bl_5,'indicador_bl_6'=>$indicador_bl_6,'indicador_bl_7'=>$indicador_bl_7,
'indicador_bl_8'=>$indicador_bl_8, 'indicador_bl_10'=>$indicador_bl_10
    ]);
    } 

    public function fc_enfamiliaqt(Request $request,$folio, $integrante){
        $tabla = 't1_enfamiliaqt';
        $hashids = new Hashids('', 10); 
        $encodedFolio = $hashids->decode($folio);
        $decodeIntegrante = $hashids->decode($integrante);



                //indicador_bef_1
            $t1_indicador_bef_1 = DB::table('t1_indicador_bef_1')
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bef_1='';
            foreach ($t1_indicador_bef_1 as $indicador) {
                $indicador_bef_1=$indicador->codigoindicadorDA;
            }


            //indicador_bef_2
            $t1_indicador_bef_2 = DB::table('t1_indicador_bef_2')
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bef_2='';
            foreach ($t1_indicador_bef_2 as $indicador) {
                $indicador_bef_2=$indicador->codigoindicadorDA;
            }


            //indicador_bef_3
            $t1_indicador_bef_3 = DB::table('t1_indicador_bef_3')
                        ->where('folio', $encodedFolio)
                        ->get();

                        $indicador_bef_3='';
                        foreach ($t1_indicador_bef_3 as $indicador) {
                            $indicador_bef_3=$indicador->codigoindicadorDA;
                        }

            //indicador_bef_4
            $t1_indicador_bef_4 = DB::table('t1_indicador_bef_4')
                        ->where('folio', $encodedFolio)
                        ->get();

                        $indicador_bef_4='';
                        foreach ($t1_indicador_bef_4 as $indicador) {
                            $indicador_bef_4=$indicador->codigoindicadorDA;
                        }
















        return view('formularioqt/v_enfamiliaqt',['variable'=>$folio, 'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0] , 'integrantecodificado'=>$integrante ,  'tabla'=>$tabla,
    'indicador_bef_1'=>$indicador_bef_1,'indicador_bef_2'=>$indicador_bef_2,'indicador_bef_3'=>$indicador_bef_3,'indicador_bef_4'=>$indicador_bef_4,
    ]);
    } 

    public function fc_intelectualqt(Request $request,$folio, $integrante){
        $tabla = 't1_intelectualqt';
        $hashids = new Hashids('', 10); 
        $encodedFolio = $hashids->decode($folio);
        $decodeIntegrante = $hashids->decode($integrante);

 //indicador_bi_2
 $t1_indicador_bi_2 = DB::table('t1_indicador_bi_2')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bi_2='';
            foreach ($t1_indicador_bi_2 as $indicador) {
                $indicador_bi_2=$indicador->codigoindicadorDA;
            }


                        //indicador_bi_4
            $t1_indicador_bi_4 = DB::table('t1_indicador_bi_4')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bi_4='';
            foreach ($t1_indicador_bi_4 as $indicador) {
                $indicador_bi_4=$indicador->codigoindicadorDA;
            }


             //indicador_bi_5
 $t1_indicador_bi_5 = DB::table('t1_indicador_bi_5')
 ->where('idintegrante', $decodeIntegrante)
 ->where('folio', $encodedFolio)
 ->get();

 $indicador_bi_5='';
 foreach ($t1_indicador_bi_5 as $indicador) {
     $indicador_bi_5=$indicador->codigoindicadorDA;
 }


  //indicador_bi_6
  $t1_indicador_bi_6 = DB::table('t1_indicador_bi_6')
  ->where('idintegrante', $decodeIntegrante)
  ->where('folio', $encodedFolio)
  ->get();

  $indicador_bi_6='';
  foreach ($t1_indicador_bi_6 as $indicador) {
      $indicador_bi_6=$indicador->codigoindicadorDA;
  }








            




        return view('formularioqt/v_intelectualqt',['variable'=>$folio, 'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0] , 'integrantecodificado'=>$integrante ,  'tabla'=>$tabla,
        'indicador_bi_2'=>$indicador_bi_2,'indicador_bi_4'=>$indicador_bi_4,'indicador_bi_5'=>$indicador_bi_5,'indicador_bi_6'=>$indicador_bi_6
    ]);
    } 

    public function fc_financieroqt(Request $request,$folio, $integrante){
        $tabla = 't1_financieroqt';
        $hashids = new Hashids('', 10); 
        $encodedFolio = $hashids->decode($folio);
        $decodeIntegrante = $hashids->decode($integrante);
        return view('formularioqt/v_financieroqt',['variable'=>$folio, 'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0] , 'integrantecodificado'=>$integrante, 'tabla'=>$tabla ]);
    } 



    
    public function fc_guardarformularioqt(Request $request)
    {
        $folio = $request->input('folio');
        $idintegrante = $request->input('idintegrante');
        $tabla = $request->input('tabla');
        $now = Carbon::now();
        // Excluir 'folio' e 'idintegrante' del request y guardar el resto en $data
        $data = $request->except(['folio', 'idintegrante', 'tabla']);
       
         // Añadir created_at y updated_at
        $data['updated_at'] = $now;
        $data['sincro'] = 0;
        $data['estado'] = 1;

        $exists = DB::table($tabla)
        ->where('idintegrante', $idintegrante)
        ->where('folio', $folio)
        ->exists();

        if (!$exists) {
            $data['created_at'] = $now;
        }

        DB::table($tabla)->updateOrInsert(
            ['folio' => $folio, 'idintegrante' => $idintegrante], // Condición de búsqueda
            $data // Datos a insertar o actualizar
        );
    
        return response()->json(["request" => $data]); // Responder con los datos procesados
    }

  
}
