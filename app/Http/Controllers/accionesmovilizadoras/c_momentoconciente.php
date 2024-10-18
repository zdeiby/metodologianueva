<?php

namespace App\Http\Controllers\accionesmovilizadoras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_herramientas;
use App\Models\visitaslineas\m_l1e1;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;



class c_momentoconciente extends Controller
{



// IR A LA VISTA BIENESTAR FISICO Y EMOCIONAL

    public function fc_momentoconciente(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

         $herramientas = new m_herramientas();

            $tabla = 't1_momentoconciente';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $linea= 200;
            $paso= 20020;
           
           
            $informacion = DB::table($tabla)
                            ->where('folio', $encodedFolio)
                            ->get();

             $datos = [
                 'momentoconciente' => '',
                 'siguiente' => 'style="display:none"', 
            ];

            
             foreach ($informacion as $registro) {
                 // Asigna los valores de los indicadores a sus respectivas claves en el array $datos

                 $datos['momentoconciente'] = $registro->momentoconciente;

                 $datos['siguiente'] = (($registro->estado == '1')?'style="display:"':'style="display:none"');


             }

            $datos['t_accionesmovilizadoras1'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','1');
            $datos['t_accionesmovilizadoras2'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','2');
            $datos['t_accionesmovilizadoras3'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','3');
            $datos['t_accionesmovilizadoras4'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','4');
            $datos['t_accionesmovilizadoras5'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','5');
        

            return view('accionesmovilizadoras/v_momentoconciente',  $datos,['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                     'tabla'=>$tabla,'linea'=>$linea,
                                                                     'paso'=>$paso
                                                                    ]);
    }


    public function fc_bienestarenfamilia(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

         $herramientas = new m_herramientas();

            $tabla = 't1_accionmovilizadoraqt';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $linea= 200;
            $paso= 20030;
            $bienestar= 3;
           
            $informacion = DB::table($tabla)
                            ->where('folio', $encodedFolio)
                            ->where('linea', $linea)
                            ->where('paso', $paso)
                            ->where('bienestar', $bienestar)
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

            $datos['t_accionesmovilizadoras1'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','1');
            $datos['t_accionesmovilizadoras2'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','2');
            $datos['t_accionesmovilizadoras3'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','3');
            $datos['t_accionesmovilizadoras4'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','4');
            $datos['t_accionesmovilizadoras5'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','5');
        

            return view('accionesmovilizadoras/v_bienestarenfamilia',  $datos,['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                     'tabla'=>$tabla, 'linea'=>$linea,
                                                                     'paso'=>$paso,
                                                                     'bienestar'=>$bienestar,
                                                                    ]);
    }


    public function fc_accionmovilizadoraqt(Request $request,$folio){
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


            return view('accionesmovilizadoras/v_accionmovilizadoraqt',  $datos,['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                     'tabla'=>$tabla,
                                                                      'descripcion'=>$categorias[0]->descripcion,
                                                                      'linea'=>$linea,
                                                                     'paso'=>$paso,
                                                                     'bienestar'=>$bienestar,
                                                                    ]);
    }



    
     public function fc_guardaraccionesmovilizadoras(Request $request)
     {
         $folio = $request->input('folio');
         $tabla = $request->input('tabla');
         $linea = $request->input('linea');
         $paso = $request->input('paso');
         $now = Carbon::now();
         $data = $request->except(['folio', 'tabla','linea','paso']);
       
          // Añadir created_at y updated_at
         $data['updated_at'] = $now;
         $data['sincro'] = 0;
         $data['estado'] = 1;

         $exists = DB::table($tabla)
         ->where('folio', $folio)
         ->exists();

         if (!$exists) {
             $data['created_at'] = $now;
         }

         DB::table($tabla)->updateOrInsert(
             ['folio' => $folio, 'linea'=> $linea, 'paso'=>$paso], // Condición de búsqueda
             $data // Datos a insertar o actualizar
         );
    
         return response()->json(["request" => $data]); // Responder con los datos procesados
     }

  
}
