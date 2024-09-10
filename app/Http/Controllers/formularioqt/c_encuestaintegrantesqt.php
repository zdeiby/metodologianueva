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

    $informacion = DB::table($tabla)
               ->where('idintegrante', $decodeIntegrante)
               ->where('folio', $encodedFolio)
               ->get();

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



            $datos = [
                'indicadorbl1_1' => '',
                'indicadorbl1_2' => '',
                'indicadorbl1_3' => '',
                'indicadorbl2_1' => '',
                'indicadorbl2_2' => '',
                'indicadorbl3_1' => '',
                'indicadorbl3_2' => '',
                'indicadorbl4_1' => '',
                'indicadorbl4_2' => '',
                'indicadorbl4_3' => '',
                'indicadorbl5_1' => '',
                'indicadorbl5_2' => '',
                'indicadorbl5_3' => '',
                'indicadorbl6_1' => '',
                'indicadorbl6_2' => '',
                'indicadorbl6_3' => '',
                'indicadorbl7_1' => '',
                'indicadorbl7_2' => '',
                'indicadorbl8_1' => '',
                'indicadorbl8_2' => '',
                'indicadorbl8_3' => '',
                'indicadorbl9_1' => '',
                'indicadorbl9_2' => '',
                'indicadorbl9_3' => '',
                'indicadorbl10_1' => '',
                'indicadorbl10_2' => '',
                'siguiente' => 'style="display:none"'
            ];

            foreach ($informacion as $registro) {
                // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
                $datos['indicadorbl1_1'] = $registro->indicadorbl1_1;
                $datos['indicadorbl1_2'] = $registro->indicadorbl1_2;
                $datos['indicadorbl1_3'] = $registro->indicadorbl1_3;
                $datos['indicadorbl2_1'] = $registro->indicadorbl2_1;
                $datos['indicadorbl2_2'] = $registro->indicadorbl2_2;
                $datos['indicadorbl3_1'] = $registro->indicadorbl3_1;
                $datos['indicadorbl3_2'] = $registro->indicadorbl3_2;
                $datos['indicadorbl4_1'] = $registro->indicadorbl4_1;
                $datos['indicadorbl4_2'] = $registro->indicadorbl4_2;
                $datos['indicadorbl4_3'] = $registro->indicadorbl4_3;
                $datos['indicadorbl5_1'] = $registro->indicadorbl5_1;
                $datos['indicadorbl5_2'] = $registro->indicadorbl5_2;
                $datos['indicadorbl5_3'] = $registro->indicadorbl5_3;
                $datos['indicadorbl6_1'] = $registro->indicadorbl6_1;
                $datos['indicadorbl6_2'] = $registro->indicadorbl6_2;
                $datos['indicadorbl6_3'] = $registro->indicadorbl6_3;
                $datos['indicadorbl7_1'] = $registro->indicadorbl7_1;
                $datos['indicadorbl7_2'] = $registro->indicadorbl7_2;
                $datos['indicadorbl8_1'] = $registro->indicadorbl8_1;
                $datos['indicadorbl8_2'] = $registro->indicadorbl8_2;
                $datos['indicadorbl8_3'] = $registro->indicadorbl8_3;
                $datos['indicadorbl9_1'] = $registro->indicadorbl9_1;
                $datos['indicadorbl9_2'] = $registro->indicadorbl9_2;
                $datos['indicadorbl9_3'] = $registro->indicadorbl9_3;
                $datos['indicadorbl10_1'] = $registro->indicadorbl10_1;
                $datos['indicadorbl10_2'] = $registro->indicadorbl10_2;
            
                $datos['siguiente'] = (($registro->estado == '1') ? 'style="display:"' : 'style="display:none"');
            }
            
            





     return view('formularioqt/v_legalqt', $datos,['variable'=>$folio, 'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0] , 'integrantecodificado'=>$integrante ,  'tabla'=>$tabla,'indicador_bl_1'=>$indicador_bl_1,'indicador_bl_2'=>$indicador_bl_2,
    'indicador_bl_3'=>$indicador_bl_3, 'indicador_bl_4'=>$indicador_bl_4, 'indicador_bl_5'=>$indicador_bl_5,'indicador_bl_6'=>$indicador_bl_6,'indicador_bl_7'=>$indicador_bl_7,
'indicador_bl_8'=>$indicador_bl_8, 'indicador_bl_10'=>$indicador_bl_10
    ]);
    } 

    public function fc_enfamiliaqt(Request $request,$folio, $integrante){
        $tabla = 't1_enfamiliaqt';
        $hashids = new Hashids('', 10); 
        $encodedFolio = $hashids->decode($folio);
        $decodeIntegrante = $hashids->decode($integrante);

        $informacion = DB::table($tabla)
        ->where('idintegrante', $decodeIntegrante)
        ->where('folio', $encodedFolio)
        ->get();

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




                        $datos = [
                            'indicador_bef1_1' => '',
                            'indicador_bef1_2' => '',
                            'indicador_bef1_3' => '',
                            'indicador_bef1_4' => '',
                            'indicador_bef2_1' => '',
                            'indicador_bef2_2' => '',
                            'indicador_bef2_3' => '',
                            'indicador_bef3_1' => '',
                            'indicador_bef3_2' => '',
                            'indicador_bef3_3' => '',
                            'indicador_bef4_1' => '',
                            'indicador_bef4_2' => '',
                            'indicador_bef4_3' => '',
                            'indicador_bef4_4' => '',
                            'indicador_bef5_1' => '',
                            'indicador_bef5_2' => '',
                            'indicador_bef5_3' => '',
                            'indicador_bef5_4' => '',
                            'siguiente' => 'style="display:none"'
                        ];
                        
                        foreach ($informacion as $registro) {
                            // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
                            $datos['indicador_bef1_1'] = $registro->indicador_bef1_1;
                            $datos['indicador_bef1_2'] = $registro->indicador_bef1_2;
                            $datos['indicador_bef1_3'] = $registro->indicador_bef1_3;
                            $datos['indicador_bef1_4'] = $registro->indicador_bef1_4;
                            $datos['indicador_bef2_1'] = $registro->indicador_bef2_1;
                            $datos['indicador_bef2_2'] = $registro->indicador_bef2_2;
                            $datos['indicador_bef2_3'] = $registro->indicador_bef2_3;
                            $datos['indicador_bef3_1'] = $registro->indicador_bef3_1;
                            $datos['indicador_bef3_2'] = $registro->indicador_bef3_2;
                            $datos['indicador_bef3_3'] = $registro->indicador_bef3_3;
                            $datos['indicador_bef4_1'] = $registro->indicador_bef4_1;
                            $datos['indicador_bef4_2'] = $registro->indicador_bef4_2;
                            $datos['indicador_bef4_3'] = $registro->indicador_bef4_3;
                            $datos['indicador_bef4_4'] = $registro->indicador_bef4_4;
                            $datos['indicador_bef5_1'] = $registro->indicador_bef5_1;
                            $datos['indicador_bef5_2'] = $registro->indicador_bef5_2;
                            $datos['indicador_bef5_3'] = $registro->indicador_bef5_3;
                            $datos['indicador_bef5_4'] = $registro->indicador_bef5_4;
                        
                            $datos['siguiente'] = (($registro->estado == '1') ? 'style="display:"' : 'style="display:none"');
                        }

                        return view('formularioqt/v_enfamiliaqt',$datos,['variable'=>$folio, 'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0] , 'integrantecodificado'=>$integrante ,  'tabla'=>$tabla,
                    'indicador_bef_1'=>$indicador_bef_1,'indicador_bef_2'=>$indicador_bef_2,'indicador_bef_3'=>$indicador_bef_3,'indicador_bef_4'=>$indicador_bef_4,
                    ]);
                    } 

    public function fc_intelectualqt(Request $request,$folio, $integrante){
        $tabla = 't1_intelectualqt';
        $hashids = new Hashids('', 10); 
        $encodedFolio = $hashids->decode($folio);
        $decodeIntegrante = $hashids->decode($integrante);

        $informacion = DB::table($tabla)
        ->where('idintegrante', $decodeIntegrante)
        ->where('folio', $encodedFolio)
        ->get();

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



            $datos = [
                'indicador_bi1_1' => '',
                'indicador_bi1_2' => '',
                'indicador_bi1_3' => '',
                'indicador_bi2_1' => '',
                'indicador_bi2_2' => '',
                'indicador_bi2_3' => '',
                'indicador_bi2_4' => '',
                'indicador_bi3_1' => '',
                'indicador_bi3_2' => '',
                'indicador_bi3_3' => '',
                'indicador_bi3_4' => '',
                'indicador_bi4_1' => '',
                'indicador_bi4_2' => '',
                'indicador_bi4_3' => '',
                'indicador_bi4_4' => '',
                'indicador_bi5_1' => '',
                'indicador_bi5_2' => '',
                'indicador_bi5_3' => '',
                'indicador_bi5_4' => '',
                'indicador_bi5_5' => '',
                'indicador_bi5_6' => '',
                'indicador_bi6_1' => '',
                'indicador_bi6_2' => '',
                'indicador_bi6_3' => '',
                'indicador_bi6_4' => '',
                'indicador_bi6_5' => '',
                'indicador_bi6_6' => '',
                'siguiente' => 'style="display:none"'
            ];
            
            foreach ($informacion as $registro) {
                // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
                $datos['indicador_bi1_1'] = $registro->indicador_bi1_1;
                $datos['indicador_bi1_2'] = $registro->indicador_bi1_2;
                $datos['indicador_bi1_3'] = $registro->indicador_bi1_3;
                $datos['indicador_bi2_1'] = $registro->indicador_bi2_1;
                $datos['indicador_bi2_2'] = $registro->indicador_bi2_2;
                $datos['indicador_bi2_3'] = $registro->indicador_bi2_3;
                $datos['indicador_bi2_4'] = $registro->indicador_bi2_4;
                $datos['indicador_bi3_1'] = $registro->indicador_bi3_1;
                $datos['indicador_bi3_2'] = $registro->indicador_bi3_2;
                $datos['indicador_bi3_3'] = $registro->indicador_bi3_3;
                $datos['indicador_bi3_4'] = $registro->indicador_bi3_4;
                $datos['indicador_bi4_1'] = $registro->indicador_bi4_1;
                $datos['indicador_bi4_2'] = $registro->indicador_bi4_2;
                $datos['indicador_bi4_3'] = $registro->indicador_bi4_3;
                $datos['indicador_bi4_4'] = $registro->indicador_bi4_4;
                $datos['indicador_bi5_1'] = $registro->indicador_bi5_1;
                $datos['indicador_bi5_2'] = $registro->indicador_bi5_2;
                $datos['indicador_bi5_3'] = $registro->indicador_bi5_3;
                $datos['indicador_bi5_4'] = $registro->indicador_bi5_4;
                $datos['indicador_bi5_5'] = $registro->indicador_bi5_5;
                $datos['indicador_bi5_6'] = $registro->indicador_bi5_6;
                $datos['indicador_bi6_1'] = $registro->indicador_bi6_1;
                $datos['indicador_bi6_2'] = $registro->indicador_bi6_2;
                $datos['indicador_bi6_3'] = $registro->indicador_bi6_3;
                $datos['indicador_bi6_4'] = $registro->indicador_bi6_4;
                $datos['indicador_bi6_5'] = $registro->indicador_bi6_5;
                $datos['indicador_bi6_6'] = $registro->indicador_bi6_6;
            
                $datos['siguiente'] = (($registro->estado == '1') ? 'style="display:"' : 'style="display:none"');
            }
            




            




        return view('formularioqt/v_intelectualqt',$datos,['variable'=>$folio, 'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0] , 'integrantecodificado'=>$integrante ,  'tabla'=>$tabla,
        'indicador_bi_2'=>$indicador_bi_2,'indicador_bi_4'=>$indicador_bi_4,'indicador_bi_5'=>$indicador_bi_5,'indicador_bi_6'=>$indicador_bi_6
    ]);
    } 

    public function fc_financieroqt(Request $request,$folio, $integrante){
        $tabla = 't1_financieroqt';
        $hashids = new Hashids('', 10); 
        $encodedFolio = $hashids->decode($folio);
        $decodeIntegrante = $hashids->decode($integrante);
        $informacion = DB::table($tabla)
        ->where('idintegrante', $decodeIntegrante)
        ->where('folio', $encodedFolio)
        ->get();


        $datos = [
            'indicador_bf1_1' => '',
            'indicador_bf1_2' => '',
            'indicador_bf1_3' => '',
            'indicador_bf1_4' => '',
            'indicador_bf2_1' => '',
            'indicador_bf2_2' => '',
            'indicador_bf2_3' => '',
            'indicador_bf3_1' => '',
            'indicador_bf3_2' => '',
            'indicador_bf3_3' => '',
            'indicador_bf4_1' => '',
            'indicador_bf4_2' => '',
            'indicador_bf4_3' => '',
            'indicador_bf4_4' => '',
            'indicador_bf4_5' => '',
            'indicador_bf5_1' => '',
            'indicador_bf5_2' => '',
            'indicador_bf5_3' => '',
            'indicador_bf5_4' => '',
        
            'siguiente' => 'style="display:none"'
        ];
        
        foreach ($informacion as $registro) {
            // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
            $datos['indicador_bf1_1'] = $registro->indicador_bf1_1;
            $datos['indicador_bf1_2'] = $registro->indicador_bf1_2;
            $datos['indicador_bf1_3'] = $registro->indicador_bf1_3;
            $datos['indicador_bf1_4'] = $registro->indicador_bf1_4;
            $datos['indicador_bf2_1'] = $registro->indicador_bf2_1;
            $datos['indicador_bf2_2'] = $registro->indicador_bf2_2;
            $datos['indicador_bf2_3'] = $registro->indicador_bf2_3;
            $datos['indicador_bf3_1'] = $registro->indicador_bf3_1;
            $datos['indicador_bf3_2'] = $registro->indicador_bf3_2;
            $datos['indicador_bf3_3'] = $registro->indicador_bf3_3;
            $datos['indicador_bf4_1'] = $registro->indicador_bf4_1;
            $datos['indicador_bf4_2'] = $registro->indicador_bf4_2;
            $datos['indicador_bf4_3'] = $registro->indicador_bf4_3;
            $datos['indicador_bf4_4'] = $registro->indicador_bf4_4;
            $datos['indicador_bf4_5'] = $registro->indicador_bf4_5;
            $datos['indicador_bf5_1'] = $registro->indicador_bf5_1;
            $datos['indicador_bf5_2'] = $registro->indicador_bf5_2;
            $datos['indicador_bf5_3'] = $registro->indicador_bf5_3;
            $datos['indicador_bf5_4'] = $registro->indicador_bf5_4;
  
        
            // Controla la visualización del siguiente elemento
            $datos['siguiente'] = (($registro->estado == '1') ? 'style="display:"' : 'style="display:none"');
        }
        


        return view('formularioqt/v_financieroqt', $datos,['variable'=>$folio, 'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0] , 'integrantecodificado'=>$integrante, 'tabla'=>$tabla ]);
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
