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
use App\Models\m_herramientas;
use App\Models\m_oportunidades;
use Illuminate\Support\Str;
class c_encuestaintegrantesqt extends Controller
{


   
// IR A LA VISTA BIENESTAR FISICO Y EMOCIONAL

    public function fc_bienestarsaludemocionalqt(Request $request,$folio, $integrante, $vista){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

            $tabla = 't1_saludemocionalqt';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $decodeIntegrante = $hashids->decode($integrante);
            $informacion = DB::table($tabla)
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicadores_tabla = DB::table('t_bienestar_subcategoria_indicador')
            ->get();
            

            $representante = DB::table('t1_integranteshogar')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->where('representante', 1)
            ->exists() ? 'SI' : 'NO';

            $t1_indicador_bse_1 = DB::table('t1_indicador_bse_1')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bse_1='';
            foreach ($t1_indicador_bse_1 as $indicador) {
                $indicador_bse_1=$indicador->codigoindicadorDA;
            }

            $t1_indicador_bse_2 = DB::table('t1_indicador_bse_2')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bse_2='';
            foreach ($t1_indicador_bse_2 as $indicador) {
                $indicador_bse_2=$indicador->codigoindicadorDA;
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
                'siguiente' => 'style="display:none"',
                'vista' => $vista
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
            
            

            return view('formularioqt/v_bienestarsaludemocionalqt',  $datos,['representante'=>$representante,'variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0] ,
                                                                    'integrantecodificado'=>$integrante , 
                                                                     'tabla'=>$tabla, 'indicador_bse_1'=>$indicador_bse_1 ,'indicador_bse_2'=>$indicador_bse_2 , 'indicador_bse_3'=>$indicador_bse_3, 'indicador_bse_4'=>$indicador_bse_4, 'indicador_bse_5'=>$indicador_bse_5,
                                                                     'indicador_bse_6'=>$indicador_bse_6, 'indicador_bse_7'=>$indicador_bse_7,
                                                                     'indicadores_tabla'=>$indicadores_tabla
                                                                    
                                                                    ]);
    }


    public function fc_legalqt(Request $request,$folio, $integrante, $vista){
        $tabla = 't1_legalqt';
    $hashids = new Hashids('', 10); 
    $encodedFolio = $hashids->decode($folio);
    $decodeIntegrante = $hashids->decode($integrante);

    $informacion = DB::table($tabla)
               ->where('idintegrante', $decodeIntegrante)
               ->where('folio', $encodedFolio)
               ->get();


               $representante = DB::table('t1_integranteshogar')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->where('representante', 1)
            ->exists() ? 'SI' : 'NO';

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



            //indicador_bl_9
            $t1_indicador_bl_9 = DB::table('t1_indicador_bl_9')
            
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bl_9='';
            foreach ($t1_indicador_bl_9 as $indicador) {
                $indicador_bl_9=$indicador->codigoindicadorDA;
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
                'siguiente' => 'style="display:none"',
                'vista' => $vista
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
            
            





     return view('formularioqt/v_legalqt', $datos,['representante'=>$representante,'variable'=>$folio, 'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0] , 'integrantecodificado'=>$integrante ,  'tabla'=>$tabla,'indicador_bl_1'=>$indicador_bl_1,'indicador_bl_2'=>$indicador_bl_2,
    'indicador_bl_3'=>$indicador_bl_3, 'indicador_bl_4'=>$indicador_bl_4, 'indicador_bl_5'=>$indicador_bl_5,'indicador_bl_6'=>$indicador_bl_6,'indicador_bl_7'=>$indicador_bl_7,
'indicador_bl_8'=>$indicador_bl_8, 'indicador_bl_9'=>$indicador_bl_9, 'indicador_bl_10'=>$indicador_bl_10
    ]);
    } 

    public function fc_enfamiliaqt(Request $request,$folio, $integrante, $vista){
        $tabla = 't1_enfamiliaqt';
        $hashids = new Hashids('', 10); 
        $encodedFolio = $hashids->decode($folio);
        $decodeIntegrante = $hashids->decode($integrante);

        $informacion = DB::table($tabla)
        ->where('idintegrante', $decodeIntegrante)
        ->where('folio', $encodedFolio)
        ->get();

        $representante = DB::table('t1_integranteshogar')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->where('representante', 1)
            ->exists() ? 'SI' : 'NO';

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


                         //indicador_bef_4
            $t1_indicador_bef_5 = DB::table('t1_indicador_bef_5')
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bef_5='';
            foreach ($t1_indicador_bef_5 as $indicador) {
                $indicador_bef_5=$indicador->codigoindicadorDA;
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
                            'siguiente' => 'style="display:none"',
                            'vista' => $vista
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

                        return view('formularioqt/v_enfamiliaqt',$datos,['representante'=>$representante,'variable'=>$folio, 'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0] , 'integrantecodificado'=>$integrante ,  'tabla'=>$tabla,
                    'indicador_bef_1'=>$indicador_bef_1,'indicador_bef_2'=>$indicador_bef_2,'indicador_bef_3'=>$indicador_bef_3,'indicador_bef_4'=>$indicador_bef_4,'indicador_bef_5'=>$indicador_bef_5,
                    ]);
                    } 

    public function fc_intelectualqt(Request $request,$folio, $integrante, $vista){
        $tabla = 't1_intelectualqt';
        $hashids = new Hashids('', 10); 
        $encodedFolio = $hashids->decode($folio);
        $decodeIntegrante = $hashids->decode($integrante);

        $informacion = DB::table($tabla)
        ->where('idintegrante', $decodeIntegrante)
        ->where('folio', $encodedFolio)
        ->get();

        $representante = DB::table('t1_integranteshogar')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->where('representante', 1)
            ->exists() ? 'SI' : 'NO';

         //indicador_bi_1
         $t1_indicador_bi_1 = DB::table('t1_indicador_bi_1')
         ->where('idintegrante', $decodeIntegrante)
         ->where('folio', $encodedFolio)
         ->get();

         $indicador_bi_1='';
         foreach ($t1_indicador_bi_1 as $indicador) {
             $indicador_bi_1=$indicador->codigoindicadorDA;
         }

            //indicador_bi_2
            $t1_indicador_bi_2 = DB::table('t1_indicador_bi_2')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bi_2='';
            foreach ($t1_indicador_bi_2 as $indicador) {
                $indicador_bi_2=$indicador->codigoindicadorDA;
            }
                 //indicador_bi_3
                 $t1_indicador_bi_3 = DB::table('t1_indicador_bi_3')
                 ->where('idintegrante', $decodeIntegrante)
                 ->where('folio', $encodedFolio)
                 ->get();
     
                 $indicador_bi_3='';
                 foreach ($t1_indicador_bi_3 as $indicador) {
                     $indicador_bi_3=$indicador->codigoindicadorDA;
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
                'siguiente' => 'style="display:none"',
                'vista' => $vista
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
            




            




        return view('formularioqt/v_intelectualqt',$datos,['representante'=>$representante,'variable'=>$folio, 'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0] , 'integrantecodificado'=>$integrante ,  'tabla'=>$tabla,
        'indicador_bi_1'=>$indicador_bi_1,'indicador_bi_2'=>$indicador_bi_2, 'indicador_bi_3'=>$indicador_bi_3,'indicador_bi_4'=>$indicador_bi_4,'indicador_bi_5'=>$indicador_bi_5,'indicador_bi_6'=>$indicador_bi_6
    ]);
    } 

    public function fc_financieroqt(Request $request,$folio, $integrante, $vista){
        $tabla = 't1_financieroqt';
        $hashids = new Hashids('', 10); 
        $encodedFolio = $hashids->decode($folio);
        $decodeIntegrante = $hashids->decode($integrante);
        $informacion = DB::table($tabla)
        ->where('idintegrante', $decodeIntegrante)
        ->where('folio', $encodedFolio)
        ->get();


        $representante = DB::table('t1_integranteshogar')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->where('representante', 1)
            ->exists() ? 'SI' : 'NO';



  //indicador_bf_1
  $t1_indicador_bf_1 = DB::table('t1_indicador_bf_1')
  ->where('idintegrante', $decodeIntegrante)
  ->where('folio', $encodedFolio)
  ->get();

  $indicador_bf_1='';
  foreach ($t1_indicador_bf_1 as $indicador) {
      $indicador_bf_1=$indicador->codigoindicadorDA;
  }


   //indicador_bf_2
 $t1_indicador_bf_2 = DB::table('t1_indicador_bf_2')
 ->where('idintegrante', $decodeIntegrante)
 ->where('folio', $encodedFolio)
 ->get();

 $indicador_bf_2='';
 foreach ($t1_indicador_bf_2 as $indicador) {
     $indicador_bf_2=$indicador->codigoindicadorDA;
 }


  //indicador_bf_3
  $t1_indicador_bf_3 = DB::table('t1_indicador_bf_3')
  ->where('idintegrante', $decodeIntegrante)
  ->where('folio', $encodedFolio)
  ->get();

  $indicador_bf_3='';
  foreach ($t1_indicador_bf_3 as $indicador) {
      $indicador_bf_3=$indicador->codigoindicadorDA;
  }

 //indicador_bf_4
 $t1_indicador_bf_4 = DB::table('t1_indicador_bf_4')
            
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bf_4='';
            foreach ($t1_indicador_bf_4 as $indicador) {
                $indicador_bf_4=$indicador->codigoindicadorDA;
            }


 //indicador_bf_5
 $t1_indicador_bf_5 = DB::table('t1_indicador_bf_5')
            ->where('idintegrante', $decodeIntegrante)
            ->where('folio', $encodedFolio)
            ->get();

            $indicador_bf_5='';
            foreach ($t1_indicador_bf_5 as $indicador) {
                $indicador_bf_5=$indicador->codigoindicadorDA;
            }






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
        
            'siguiente' => 'style="display:none"',
            'vista' => $vista
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
        


        return view('formularioqt/v_financieroqt', $datos,['representante'=>$representante,'variable'=>$folio, 'folio'=>$encodedFolio[0],'integrante'=>$decodeIntegrante[0] , 'integrantecodificado'=>$integrante, 'tabla'=>$tabla,
    'indicador_bf_1'=>$indicador_bf_1,'indicador_bf_2'=>$indicador_bf_2,'indicador_bf_3'=>$indicador_bf_3,'indicador_bf_4'=>$indicador_bf_4,'indicador_bf_5'=>$indicador_bf_5

    ]);
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

    

    public function fc_consultarindicador(Request $request)
    {

        $folio = $request->input('folio');
        $idintegrante = $request->input('idintegrante');
        $tabla = $request->input('tabla');
        $id_bienestar = $request->input('id_bienestar');
        $id_subcategoria = $request->input('id_subcategoria');
        $id_indicador = $request->input('id_indicador');

        $now = Carbon::now();

        $modelo = new m_oportunidades();
        // $oportunidad = $modelo-> m_listadooportunidades();
        $oportunidad = DB::table('t1_oportunidad')
        ->whereBetween(DB::raw('DATE(CURRENT_DATE)'), [DB::raw('DATE(fecha_inicio)'), DB::raw('DATE(fecha_limite_acercamiento)')])
       // ->where('aplica_hogar_integrante','374')
        ->get();
    
        $t1_integranteshogar = $modelo-> m_listadooportunidadesmovimientoindicadores($folio,$idintegrante,$id_bienestar, $id_indicador);
        //dd($oportunidad);
         $oportunidades = '';
         $modal2 ='';
         
             
         foreach ($oportunidad as $value) {
            // Filtrar integrantes relacionados con la oportunidad actual
            $integrantesRelacionados = array_filter($t1_integranteshogar, function ($integrante) use ($value) {
                return $integrante->id_oportunidad == $value->id_oportunidad;
            });
        
            // Solo incluir la oportunidad si tiene integrantes relacionados
            if (!empty($integrantesRelacionados)) {
                $oportunidades .= '
               
                
                <tr>
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

          $modal2 .=  '<div class="modal fade" id="modal-'.$value->id_oportunidad.'" tabindex="-1" aria-labelledby="modalLabel-'.$value->id_oportunidad.'" aria-hidden="true">
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


        $modal='';
        // Excluir 'folio' e 'idintegrante' del request y guardar el resto en $data
        $modal .=  '<div class="modal fade modal-xl" id="modal-'.$id_indicador.'" tabindex="-1" aria-labelledby="modalLabel-'.$id_indicador.'" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel-'.$id_indicador.'">Mover indicador</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="form-group  was-validated" >
                        <label for="ingresos1">Seleccione una opción:</label><br>
                        <select class="form-control form-control-sm " id="ingresos1" name="ingresos1" aria-describedby="validationServer04Feedback" required>
                            <option value="">Seleccione</option>
                            <option value="1">Validación gestor</option>
                            <option value="2">Fichero</option>
                            <option value="3">Por preguntas de validación</option>
                            <option value="4">Por intervención o acción movilizadora del gestor</option>
                        </select>
                    </div>
                    <hr>
                    <div class="text-center">
                        <label class="pb-2">Para mover este indicador por Gestor por favor dar clic en mover indicador.</label><br>
                        <button type="button" class="btn btn-success btn-sm">Mover Indicador</button>
                    </div>
                    <hr>
                                            <div class="" width="100%">
                                <table id="example" class="table table-striped " >
                                    <thead>
                                        <tr>
                                            <th >Nombre de la Oportunidad</th>
                                            <!-- <th>Descripción</th>
                                            <th>Ruta</th> -->
                                            <th>Fecha Inicio oportunidad</th>
                                            <th>Fecha Límite de Acercamiento</th>
                                            <th class="align-middle text-center">Ver Oportunidad</th>
                                            <th class="align-middle text-center">Integrantes que aplican</th>
                                            <th>Acercar oportunidad</th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-size:15px" id="oportunidades">
                    
                                     </tbody>
                                        <tfoot>
                                        
                                        </tfoot>
                                    </table>
                                </div>


                    
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>';
    
        return response()->json(["modal" => $modal, 'oportunidades'=>$oportunidades]); // Responder con los datos procesados
    }




    public function fc_consultarindicadorhogar(Request $request)
    {

        $folio = $request->input('folio');
        $idintegrante = $request->input('idintegrante');
        $tabla = $request->input('tabla');
        $id_bienestar = $request->input('id_bienestar');
        $id_subcategoria = $request->input('id_subcategoria');
        $id_indicador = $request->input('id_indicador');

        $now = Carbon::now();

        $modelo = new m_oportunidades();
        // $oportunidad = $modelo-> m_listadooportunidades();
        $oportunidad = DB::table('t1_oportunidad')
        ->whereBetween(DB::raw('DATE(CURRENT_DATE)'), [DB::raw('DATE(fecha_inicio)'), DB::raw('DATE(fecha_limite_acercamiento)')])
       // ->where('aplica_hogar_integrante','374')
        ->get();
    
        $t1_integranteshogar = $modelo-> m_listadooportunidadesmovimientoindicadoreshogar($folio,$idintegrante,$id_bienestar, $id_indicador);
        //dd($oportunidad);
         $oportunidades = '';
         $modal2 ='';
         
             
         foreach ($oportunidad as $value) {
            // Filtrar integrantes relacionados con la oportunidad actual
            $integrantesRelacionados = array_filter($t1_integranteshogar, function ($integrante) use ($value) {
                return $integrante->id_oportunidad == $value->id_oportunidad;
            });
        
            // Solo incluir la oportunidad si tiene integrantes relacionados
            if (!empty($integrantesRelacionados)) {
                $oportunidades .= '
               
                
                <tr>
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

          $modal2 .=  '<div class="modal fade" id="modal-'.$value->id_oportunidad.'" tabindex="-1" aria-labelledby="modalLabel-'.$value->id_oportunidad.'" aria-hidden="true">
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


        $modal='';
        // Excluir 'folio' e 'idintegrante' del request y guardar el resto en $data
        $modal .=  '<div class="modal fade modal-xl" id="modal-'.$id_indicador.'" tabindex="-1" aria-labelledby="modalLabel-'.$id_indicador.'" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel-'.$id_indicador.'">Mover indicador</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="form-group  was-validated" >
                        <label for="ingresos1">Seleccione una opción:</label><br>
                        <select class="form-control form-control-sm " id="ingresos1" name="ingresos1" aria-describedby="validationServer04Feedback" required>
                            <option value="">Seleccione</option>
                            <option value="1">Validación gestor</option>
                            <option value="2">Fichero</option>
                            <option value="3">Por preguntas de validación</option>
                            <option value="4">Por intervención o acción movilizadora del gestor</option>
                        </select>
                    </div>
                    <hr>
                    <div class="text-center">
                        <label class="pb-2">Para mover este indicador por Gestor por favor dar clic en mover indicador.</label><br>
                        <button type="button" class="btn btn-success btn-sm">Mover Indicador</button>
                    </div>
                    <hr>
                                            <div class="" width="100%">
                                <table id="example" class="table table-striped " >
                                    <thead>
                                        <tr>
                                            <th >Nombre de la Oportunidad</th>
                                            <!-- <th>Descripción</th>
                                            <th>Ruta</th> -->
                                            <th>Fecha Inicio oportunidad</th>
                                            <th>Fecha Límite de Acercamiento</th>
                                            <th class="align-middle text-center">Ver Oportunidad</th>
                                            <th class="align-middle text-center">Integrantes que aplican</th>
                                            <th>Acercar oportunidad</th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-size:15px" id="oportunidades">
                    
                                     </tbody>
                                        <tfoot>
                                        
                                        </tfoot>
                                    </table>
                                </div>


                    
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>';
    
        return response()->json(["modal" => $modal, 'oportunidades'=>$oportunidades]); // Responder con los datos procesados
    }


  
}
