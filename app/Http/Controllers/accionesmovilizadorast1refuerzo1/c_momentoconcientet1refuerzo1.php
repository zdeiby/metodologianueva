<?php

namespace App\Http\Controllers\accionesmovilizadorast1refuerzo1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_herramientas;
use App\Models\visitaslineas\m_l1e1;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;



class c_momentoconcientet1refuerzo1 extends Controller
{



// IR A LA VISTA BIENESTAR FISICO Y EMOCIONAL

    public function fc_momentoconcientet1refuerzo1(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

         $herramientas = new m_herramientas();

            $tabla = 't1_momentoconciente';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $linea= 300;
            $paso= 30020;

            $lineaanterior= 200;
            $pasoanterior= 20020;
           
           
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

                        // Obtener los IDs seleccionados del primer formulario (momentoant)
                $selectedIds = DB::table('t1_momentoconciente')
                ->where('folio', $encodedFolio)
                ->where('linea', $lineaanterior)
                ->where('paso', $pasoanterior)
                ->pluck('momentoconciente') // Cambia 'momento_id' por la columna que contiene el ID del momento seleccionado
                ->toArray(); // Convertir a array para facilitar la verificación

                // Mostrar los momentos concientes seleccionados del primer formulario
                $lista = DB::table('t_momentosconcientes')->get();
                $momento_conciente = '';
                foreach ($lista as $item) {
                $isChecked = in_array($item->id, $selectedIds) ? 'checked' : '';
                $momento_conciente .= '
                <div class="form-check form-switch d-flex flex-wrap">
                <input type="checkbox" class="form-check-input" id="momentoant" name="momentosant[]" value="' . $item->id . '" required ' . $isChecked . ' disabled>
                <label class="form-check-label" for="item_' . $item->id . '">&nbsp;' . $item->descripcion . '</label>
                </div>
                ';
                }

                // Momento conciente t1r1 (sin mostrar los seleccionados en el primer formulario)
                $selectedIdsT1R1 = DB::table('t1_momentoconciente')
                    ->where('folio', $encodedFolio)
                    ->where('linea', $linea)
                    ->where('paso', $paso)
                    ->pluck('momentoconciente')
                    ->toArray();

                // Filtrar la lista para que no muestre los IDs seleccionados en el primer formulario
                $listaT1R1 = DB::table('t_momentosconcientes')
                ->whereNotIn('id', $selectedIds) // Filtra lo que ya está seleccionado en el primero
                ->get();

                $momento_concientet1r1 = '';
                foreach ($listaT1R1 as $item) {
                $isChecked = in_array($item->id, $selectedIdsT1R1) ? 'checked' : '';
                $momento_concientet1r1 .= '
                <div class="form-check form-switch d-flex flex-wrap">
                <input type="checkbox" class="form-check-input" id="momento" name="momentos[]" value="' . $item->id . '" required ' . $isChecked . '>
                <label class="form-check-label" for="item_' . $item->id . '">&nbsp;' . $item->descripcion . '</label>
                </div>
                ';
                }




        //fin t1r1

            $datos['t_accionesmovilizadoras2'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','2');
            $datos['t_accionesmovilizadoras3'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','3');
            $datos['t_accionesmovilizadoras4'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','4');
            $datos['t_accionesmovilizadoras5'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','5');
        

            return view('accionesmovilizadorast1refuerzo1/v_momentoconcientet1refuerzo1',  $datos,['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                     'tabla'=>$tabla,'linea'=>$linea,
                                                                     'paso'=>$paso, 'momento_conciente'=>$momento_conciente,
                                                                     'momento_concientet1r1'=>$momento_concientet1r1,
                                                                    ]);
    }

            public function fc_bienestarenfamiliat1refuerzo1(Request $request,$folio){
                if (!session('nombre')) {
                    // Si no existe la sesión 'usuario', redirigir al login
                    return redirect()->route('login');
                }
        
                 $herramientas = new m_herramientas();
        
                    $tabla = 't1_accionmovilizadoraqt';
                    $hashids = new Hashids('', 10); 
                    $encodedFolio = $hashids->decode($folio);
                    $lineaanterior= 200;
                    $pasoanterior= 20030;
                    $linea= 300;
                    $paso= 30030;
                    $bienestar= 3;


                    $informacionant = DB::table($tabla)
                                    ->where('folio', $encodedFolio)
                                    ->where('linea', $lineaanterior)
                                    ->where('paso', $pasoanterior)
                                    ->where('bienestar', $bienestar)
                                    ->get();
        
                
                    $informacion = DB::table($tabla)
                                    ->where('folio', $encodedFolio)
                                    ->where('linea', $linea)
                                    ->where('paso', $paso)
                                    ->where('bienestar', $bienestar)
                                    ->get();
        
                     $datos['accionmovilizadora'] = '';
                     $datos['accionmovilizadoraant' ] = '';
                     $datos['compromiso'] ='';
                     $datos['siguiente'] = 'style="display:none"';

                    foreach ($informacionant as $registro) {
                        // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
                        
                        $datos['accionmovilizadoraant'] = $registro->accionmovilizadora;
                        $datos['compromiso'] = $registro->compromiso;
    
                    }
        
                    
                     foreach ($informacion as $registro) {
                         // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
                         
                         $datos['accionmovilizadora'] = $registro->accionmovilizadora;
                        // $datos['compromiso'] = $registro->compromiso;
        
        
                         $datos['siguiente'] = (($registro->estado == '1')?'style="display:"':'style="display:none"');
        
        
                     }
        
                    $datos['t_accionesmovilizadoras1'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','1');
                    $datos['t_accionesmovilizadoras2'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','2');
                    $datos['t_accionesmovilizadoras3'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','3');
                    $datos['t_accionesmovilizadoras4'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','4');
                    $datos['t_accionesmovilizadoras5'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','5');
                
        
                    return view('accionesmovilizadorast1refuerzo1/v_bienestarenfamiliat1refuerzo1',  $datos,['variable'=>$folio,
                                                                            'folio'=>$encodedFolio[0],
                                                                             'tabla'=>$tabla, 'linea'=>$linea,
                                                                             'paso'=>$paso,
                                                                             'bienestar'=>$bienestar,
                                                                            ]);
            }



            public function fc_accionmovilizadoraqtt1refuerzo1(Request $request,$folio){
                if (!session('nombre')) {
                    // Si no existe la sesión 'usuario', redirigir al login
                    return redirect()->route('login');
                }
               
                 $herramientas = new m_herramientas();
        
                    $tabla = 't1_accionmovilizadoraqt';
                    $hashids = new Hashids('', 10); 
                    $encodedFolio = $hashids->decode($folio);
                    $lineaanterior= 200;
                    $pasoanterior= 20040;

                    $linea= 300;
                    $paso= 30040;
            
                    $categoriasant = DB::table('t1_ordenprioridadesqt')
                    ->join('t_bienestares', 't1_ordenprioridadesqt.categoria', '=', 't_bienestares.id')
                    ->where('t1_ordenprioridadesqt.folio', $encodedFolio)
                    ->where('t1_ordenprioridadesqt.linea', $lineaanterior)
                    ->where('t1_ordenprioridadesqt.prioridad', 1)
                    ->select('t_bienestares.descripcion','t1_ordenprioridadesqt.categoria')
                    ->get();

                    $categorias = DB::table('t1_ordenprioridadesqt')
                    ->join('t_bienestares', 't1_ordenprioridadesqt.categoria', '=', 't_bienestares.id')
                    ->where('t1_ordenprioridadesqt.folio', $encodedFolio)
                    ->where('t1_ordenprioridadesqt.linea', $lineaanterior)
                    ->where('t1_ordenprioridadesqt.prioridad', 2)
                    ->select('t_bienestares.descripcion','t1_ordenprioridadesqt.categoria')
                    ->get();
            
                    $bienestarant= $categoriasant[0]->categoria;
                    $bienestar= $categorias[0]->categoria;
            
                   
                    $informacion = DB::table($tabla)
                                    ->where('folio', $encodedFolio)
                                    ->where('linea', $linea)
                                    ->where('paso', $paso)
                                    ->get();

                    $informacionant = DB::table($tabla)
                    ->where('folio', $encodedFolio)
                    ->where('linea', $lineaanterior)
                    ->where('paso', $pasoanterior)
                    ->where('bienestar', $bienestarant)
                    ->get();


                    $datos['accionmovilizadora'] = '';
                    $datos['accionmovilizadoraant' ] = '';
                    $datos['compromiso'] ='';
                    $datos['siguiente'] = 'style="display:none"';

                     foreach ($informacionant as $registro) {
                        // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
                        
                        $datos['accionmovilizadoraant'] = $registro->accionmovilizadora;
                        $datos['compromiso'] = $registro->compromiso;
    
                    }
        
                    
                     foreach ($informacion as $registro) {
                         // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
                         $datos['accionmovilizadora'] = $registro->accionmovilizadora;
                         //   $datos['compromiso'] = $registro->compromiso;
                         $datos['siguiente'] = (($registro->estado == '1')?'style="display:"':'style="display:none"');
        
        
                     }
        
                    //  $datos['t_accionesmovilizadora'] ='';
                    if($bienestar == '1' || $bienestarant == '1'){
                        $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','1');
                    }else if($bienestar == '2'  || $bienestarant == '2'){
                        $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','2');
                    }else if($bienestar == '3' || $bienestarant == '3'){
                        $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','3');
                    }else if($bienestar == '4' || $bienestarant == '4'){
                        $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','4');
                    }else if($bienestar == '5' || $bienestarant == '5'){
                        $datos['t_accionesmovilizadora'] = $herramientas->m_leeracciones('t_accionesmovilizadoras','5');
                    }
        
        
                    return view('accionesmovilizadorast1refuerzo1/v_accionmovilizadoraqtt1refuerzo1',  $datos,['variable'=>$folio,
                                                                            'folio'=>$encodedFolio[0],
                                                                             'tabla'=>$tabla,
                                                                              'descripcion'=>$categorias[0]->descripcion,
                                                                              'descripcionant'=>$categoriasant[0]->descripcion,
                                                                              'linea'=>$linea,
                                                                             'paso'=>$paso,
                                                                             'bienestar'=>$bienestar,
                                                                              'bienestarant'=>$bienestarant,
                                                                             
                                                                            ]);
            }



            public function fc_accionmovilizadoracompromisost1refuerzo1(Request $request,$folio){
                if (!session('nombre')) {
                    // Si no existe la sesión 'usuario', redirigir al login
                    return redirect()->route('login');
                }
               
                 $herramientas = new m_herramientas();
        
                    $tabla = 't1_accionmovilizadoracompromisos';
                    $hashids = new Hashids('', 10); 
                    $encodedFolio = $hashids->decode($folio);
                    $linea= 300;
                    $paso= 30040;

                    $lineaanterior= 200;
                    $pasoanterior= 20040;
            
                    // $categorias = DB::table('t1_ordenprioridadesqt')
                    // ->join('t_bienestares', 't1_ordenprioridadesqt.categoria', '=', 't_bienestares.id')
                    // ->where('t1_ordenprioridadesqt.folio', $encodedFolio)
                    // ->where('t1_ordenprioridadesqt.linea', $linea)
                    // ->where('t1_ordenprioridadesqt.prioridad', 1)
                    // ->select('t_bienestares.descripcion','t1_ordenprioridadesqt.categoria')
                    // ->get();
            
                    // $bienestar= $categorias[0]->categoria;
            
                   
                    $informacion = DB::table($tabla)
                        ->where('folio', $encodedFolio)
                        ->where('linea', $linea)
                        ->where('paso', $paso)
                        ->select('compromiso', 'numero_compromiso') // Solo seleccionamos los campos necesarios
                        ->get();
        
                        $compromisosArray = [1 => '', 2 => '', 3 => '', 4 => ''];
        
                        foreach ($informacion as $compromiso) {
                            $compromisosArray[$compromiso->numero_compromiso] = $compromiso->compromiso;
                        }



                        $informacionant = DB::table($tabla)
                        ->where('folio', $encodedFolio)
                        ->where('linea', $lineaanterior)
                        ->where('paso', $pasoanterior)
                        ->select('compromiso', 'numero_compromiso') // Solo seleccionamos los campos necesarios
                        ->get();
        
                        $compromisosArray2 = [1 => '', 2 => '', 3 => '', 4 => ''];
        
                        foreach ($informacionant as $compromiso) {
                            $compromisosArray2[$compromiso->numero_compromiso] = $compromiso->compromiso;
                        }
        
        
                       // dd($compromisosArray);
                     $datos = [
                        'accionmovilizadora' => '',
                        'compromiso'=>'',
                         'siguiente' => 'style="display:none"', 
                    ];
        
                  // dd($informacion);
        
        
                    return view('accionesmovilizadorast1refuerzo1/v_accionmovilizadoracompromisost1refuerzo1',  $datos,['variable'=>$folio,
                                                                            'folio'=>$encodedFolio[0],
                                                                            'tabla'=>$tabla,
                                                                            'compromisosArray'=>$compromisosArray,
                                                                            'compromisosArray2'=>$compromisosArray2,
                                                                            'linea'=>$linea,
                                                                            'paso'=>$paso,
                                                                            
                                                                            ]);
            }
        



    
     public function fc_guardaraccionesmovilizadorast1refuerzo1(Request $request)
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




      public function fc_guardarmomentoconciente(Request $request)
      {
          $now = Carbon::now();
           // Obtener el array de datos enviados desde la petición
           $momentos = $request->json()->all(); 

          if (count($momentos) > 0) {
            // Utilizar la información del primer elemento para identificar el grupo a eliminar
            $folio = $momentos[0]['folio'];
            $tabla = $momentos[0]['tabla'];
            $linea = $momentos[0]['linea'];
            $paso = $momentos[0]['paso'];
            
            // Eliminar todos los registros que coincidan con folio, linea y paso
            DB::table($tabla)
                ->where('folio', $folio)
                ->where('linea', $linea)
                ->where('paso', $paso)
                ->delete();
        }


          
         
         
          // Recorrer cada objeto en el array
          foreach ($momentos as $momento) {
              $folio = $momento['folio'];
              $tabla = $momento['tabla'];
              $linea = $momento['linea'];
              $paso = $momento['paso'];
              $momentoconciente= $momento['momentoconciente'];
              
              // Extraer solo los datos relevantes, excluyendo folio, tabla, linea y paso
              $data = [
                  'usuario'=> $momento['usuario'],
                  'updated_at' => $now,
                  'sincro' => 0,
                  'estado' => 1
              ];
      
              // Comprobar si ya existe el registro
              $exists = DB::table($tabla)
                  ->where('folio', $folio)
                  ->where('linea', $linea)
                  ->where('paso', $paso)
                  ->exists();
      
              if (!$exists) {
                  $data['created_at'] = $now;
              }
      
              // Insertar o actualizar el registro
              DB::table($tabla)->updateOrInsert(
                  ['folio' => $folio, 'linea' => $linea, 'paso' => $paso, 'momentoconciente'=>$momentoconciente], // Condición de búsqueda
                  $data // Datos a insertar o actualizar
              );
          }
      
          return response()->json(["message" => "Datos guardados correctamente"]); // Responder con éxito
      }



      public function fc_verificarpasost1refuerzo1(Request $request)
      {
          $folio = $request->input('folio');
          $linea = $request->input('linea');
          $pasos = ['30020', '30030', '30040']; // Pasos a verificar
      
          // Realiza la consulta utilizando el Query Builder
          $resultado = DB::table('t1_pasosvisita')
              ->where('folio', $folio)
              ->where('linea', $linea)
              ->whereIn('paso', $pasos)
              ->selectRaw('CASE WHEN COUNT(*) = 3 AND SUM(estado) = 3 THEN 1 ELSE 0 END AS resultado')
              ->value('resultado');
      
          // Responder con el resultado de la validación
          return response()->json(["resultado" => $resultado]);
      }
      
 

}
