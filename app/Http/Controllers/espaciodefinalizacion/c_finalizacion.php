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



class c_finalizacion extends Controller
{



// IR A LA VISTA BIENESTAR FISICO Y EMOCIONAL


    public function fc_actualizacionnovedades(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

         $herramientas = new m_herramientas();

            $tabla = 't1_v1actualizacionnovedades';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $linea= 200;
            $paso= 20060;
           
            $informacion = DB::table($tabla)
                            ->where('folio', $encodedFolio)
                            ->where('linea', $linea)
                            ->where('paso', $paso)
                            ->get();

             $datos = [
                 'actualizacion' => '',
                 'siguiente' => 'style="display:none"', 
            ];

            
             foreach ($informacion as $registro) {
                 // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
                 
                 $datos['actualizacion'] = $registro->actualizacion;

                 $datos['siguiente'] = (($registro->estado == '1')?'style="display:"':'style="display:none"');


             }


            return view('espaciodefinalizacion/v_actualizacionnovedades',  $datos,['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                     'tabla'=>$tabla, 'linea'=>$linea,
                                                                     'paso'=>$paso,
                                                                    
                                                                    ]);
    }


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


    public function fc_finalizacion(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

         $herramientas = new m_herramientas();

            $tabla = 't1_v1finalizacion';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $linea= 200;
            $paso= 20060;
           
           
            $informacion = DB::table($tabla)
                            ->where('folio', $encodedFolio)
                            ->get();

             $datos = [
                 'informe' => '',
                 'url_firma'=>'',
                 'siguiente' => 'style="display:none"', 
            ];

            
             foreach ($informacion as $registro) {
                 // Asigna los valores de los indicadores a sus respectivas claves en el array $datos

                 $datos['informe'] = $registro->informe;
                 $datos['url_firma'] = $registro->url_firma;


                 $datos['siguiente'] = (($registro->estado == '1')?'style="display:"':'style="display:none"');


             }

        

            return view('espaciodefinalizacion/v_finalizacion',  $datos,['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                     'tabla'=>$tabla,'linea'=>$linea,
                                                                     'paso'=>$paso
                                                                    ]);
    }



    
     public function fc_guardarfinalizaciones(Request $request)
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


     


     public function fc_agregarpasohogargeneral(Request $request){
        $now = Carbon::now();
        $folio = $request->input('folio');
        //$tabla = $request->input('tabla');
        $linea = $request->input('linea');
        $paso = $request->input('paso');
        $now = Carbon::now();
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
    
        return response()->json(['message' => $folio]);
      }


      
      public function fc_guardarfirma(Request $request)
      {
          $folio = $request->input('folio');
          $tabla = $request->input('tabla');
          $linea = $request->input('linea');
          $paso = $request->input('paso');
 
          $now = Carbon::now();
          $data = $request->except(['folio', 'tabla','linea','paso','_token']);
        
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
              ['folio' => $folio, 'linea' => $linea,'paso' => $paso], // Condición de búsqueda
              $data // Datos a insertar o actualizar
          );
     
          return response()->json(["request" => $data]); // Responder con los datos procesados
      }


      public function fc_finalizarvisita(Request $request){
        $now = Carbon::now();
        $folio = $request->input('folio');
        $linea = 200;  // poner linea 
        //$paso = 20060;  // poner paso
        $usuario = $request->input('usuario'); // Este campo no es clave primaria
  
        $existsvisitas = DB::table('t1_visitasrealizadas')
        ->where('folio', $folio)
        ->where('linea', $linea)
        ->exists();
  
            if (!$existsvisitas) {
                // Si no existe, agregar created_at
                $datavisitageneral['created_at'] = $now;
            }
  
            $cif = DB::table('t_usuario')
              ->select('cif')
              ->where('documento', $usuario)
              ->first();
  
  
            $datavisitageneral = [
                'folio' => $folio,
                'linea' => $linea,
                'finvisita' => $now,
                'usuario' => $usuario,
                'cif' =>$cif->cif,
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
