<?php

namespace App\Http\Controllers\espaciodefinalizacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_herramientas;
use App\Models\visitaslineas\m_l1e1;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;



class c_oportunidadesvisita extends Controller
{

    public function fc_ficherodeoportunidades(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
       
         $herramientas = new m_herramientas();

            $tabla = 't1_accionmovilizadoraqt';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $linea= 200;
            $paso= 20040;
    
            $categorias = DB::table('t1_ordenprioridadesqt')
            ->join('t_bienestares', 't1_ordenprioridadesqt.categoria', '=', 't_bienestares.id')
            ->where('t1_ordenprioridadesqt.folio', $encodedFolio)
            ->where('t1_ordenprioridadesqt.prioridad', 1)
            ->select('t_bienestares.descripcion','t1_ordenprioridadesqt.categoria')
            ->get();
    
            $bienestar= $categorias[0]->categoria;
    
           
            $informacion = DB::table($tabla)
                            ->where('folio', $encodedFolio)
                            ->get();

             $datos = [
                'accionmovilizadora' => '',
                 'siguiente' => 'style="display:none"', 
            ];

            
             foreach ($informacion as $registro) {
                 // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
                 $datos['accionmovilizadora'] = $registro->accionmovilizadora;

                 $datos['siguiente'] = (($registro->estado == '1')?'style="display:"':'style="display:none"');


             }

            //  $datos['t_accionesmovilizadora'] ='';
            if($bienestar == '1'){
                $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','1');
            }else if($bienestar == '2'){
                $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','2');
            }else if($bienestar == '3'){
                $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','3');
            }else if($bienestar == '4'){
                $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','4');
            }else if($bienestar == '5'){
                $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','5');
            }


            return view('espaciodefinalizacion/v_ficherodeoportunidades',  $datos,['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                     'tabla'=>$tabla,
                                                                      'descripcion'=>$categorias[0]->descripcion,
                                                                      'linea'=>$linea,
                                                                     'paso'=>$paso,
                                                                     'bienestar'=>$bienestar,
                                                                    ]);
    }


    public function fc_ficherodeoportunidadeshogar(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
       
         $herramientas = new m_herramientas();

            $tabla = 't1_accionmovilizadoraqt';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $linea= 200;
            $paso= 20040;
    
            $categorias = DB::table('t1_ordenprioridadesqt')
            ->join('t_bienestares', 't1_ordenprioridadesqt.categoria', '=', 't_bienestares.id')
            ->where('t1_ordenprioridadesqt.folio', $encodedFolio)
            ->where('t1_ordenprioridadesqt.prioridad', 1)
            ->select('t_bienestares.descripcion','t1_ordenprioridadesqt.categoria')
            ->get();
    
            $bienestar= $categorias[0]->categoria;
    
           
            $informacion = DB::table($tabla)
                            ->where('folio', $encodedFolio)
                            ->get();

             $datos = [
                'accionmovilizadora' => '',
                 'siguiente' => 'style="display:none"', 
            ];

            
             foreach ($informacion as $registro) {
                 // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
                 $datos['accionmovilizadora'] = $registro->accionmovilizadora;

                 $datos['siguiente'] = (($registro->estado == '1')?'style="display:"':'style="display:none"');


             }

            //  $datos['t_accionesmovilizadora'] ='';
            if($bienestar == '1'){
                $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','1');
            }else if($bienestar == '2'){
                $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','2');
            }else if($bienestar == '3'){
                $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','3');
            }else if($bienestar == '4'){
                $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','4');
            }else if($bienestar == '5'){
                $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','5');
            }


            return view('espaciodefinalizacion/v_ficherodeoportunidadeshogar',  $datos,['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                     'tabla'=>$tabla,
                                                                      'descripcion'=>$categorias[0]->descripcion,
                                                                      'linea'=>$linea,
                                                                     'paso'=>$paso,
                                                                     'bienestar'=>$bienestar,
                                                                    ]);
    }


    

}
