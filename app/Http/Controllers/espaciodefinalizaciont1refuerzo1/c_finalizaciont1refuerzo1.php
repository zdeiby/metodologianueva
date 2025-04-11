<?php

namespace App\Http\Controllers\espaciodefinalizaciont1refuerzo1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_herramientas;
use App\Models\visitaslineas\m_l1e1;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;
use Intervention\Image\Facades\Image;


class c_finalizaciont1refuerzo1 extends Controller
{



// IR A LA VISTA BIENESTAR FISICO Y EMOCIONAL


    public function fc_actualizacionnovedadest1refuerzo1(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

         $herramientas = new m_herramientas();

            $tabla = 't1_v1actualizacionnovedades';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $linea= 300;
            $paso= 30050;
           
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


            return view('espaciodefinalizaciont1refuerzo1/v_actualizacionnovedadest1refuerzo1',  $datos,['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                    'foliomenu'=>$encodedFolio[0],
                                                                     'tabla'=>$tabla, 'linea'=>$linea,
                                                                     'paso'=>$paso,
                                                                    
                                                                    ]);
    }



    public function fc_informevisitat1refuerzo1(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

         $herramientas = new m_herramientas();

            $tabla = 't1_informesvisitas';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $linea= 300;
            $paso= 30050;
           
            $informacion = DB::table($tabla)
                            ->where('folio', $encodedFolio)
                            ->where('linea', $linea)
                            ->where('paso', $paso)
                            ->get();

             $datos = [
                 'informe' => '',
                 'siguiente' => 'style="display:none"', 
            ];

            
             foreach ($informacion as $registro) {
                 // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
                 
                 $datos['informe'] = $registro->informe;

                 $datos['siguiente'] = (($registro->estado == '1')?'style="display:"':'style="display:none"');


             }


            return view('espaciodefinalizaciont1refuerzo1/v_informevisitat1refuerzo1',  $datos,['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                    'foliomenu'=>$encodedFolio[0],
                                                                     'tabla'=>$tabla, 'linea'=>$linea,
                                                                     'paso'=>$paso,
                                                                    
                                                                    ]);
    }
   

    public function fc_finalizaciont1refuerzo1(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

         $herramientas = new m_herramientas();

            $tabla = 't1_v1finalizacion';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $linea= 300;
            $paso= 30050;
           
           
            $informacion = DB::table($tabla)
                            ->where('folio', $encodedFolio)
                            ->where('linea', $linea)
                            ->where('paso', $paso)
                            ->get();

             $datos = [
                
                 'url_firma'=>'',
                 'siguiente' => 'style="display:none"', 
            ];

          
             foreach ($informacion as $registro) {
                 // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
 
                 
                 $datos['url_firma'] ='data:image/jpeg;base64,' . base64_encode($registro->url_firma);


                 $datos['siguiente'] = (($registro->estado == '1')?'style="display:"':'style="display:none"');


             }

        

            return view('espaciodefinalizaciont1refuerzo1/v_finalizaciont1refuerzo1',  $datos,['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                    'foliomenu'=>$encodedFolio[0],
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
          $imageData = $request->input('url_firma');
      
          // Verificar si la imagen está en formato Base64 con prefijo "data:image"
          if (preg_match('/^data:image\/(\w+);base64,/', $imageData, $matches)) {
              $imageFormat = strtolower($matches[1]); // Obtener el formato (jpg, png, etc.)
              $imageData = preg_replace('/^data:image\/\w+;base64,/', '', $imageData); // Remover el prefijo
          } else {
              return response()->json(['error' => 'Formato de imagen no válido.'], 400);
          }
      
          // Decodificar los datos Base64 a binario
          $imageBinary = base64_decode($imageData);
          if ($imageBinary === false) {
              return response()->json(['error' => 'Error al decodificar la imagen en formato Base64.'], 400);
          }
      
          // Crear la imagen con Intervention Image desde el binario
          $image = Image::make($imageBinary);
      
          // Redimensionar y reducir la calidad de la imagen
          $image->resize(400, 300, function ($constraint) {
              $constraint->aspectRatio(); // Mantener la relación de aspecto
              $constraint->upsize(); // Evitar que se escale si es más pequeña
          });
      
          // Codificar la imagen en binario en el formato original
          $processedImageData = (string) $image->encode($imageFormat, 50); // Ajuste de calidad
      
          $now = Carbon::now();
          $data = $request->except(['folio', 'tabla', 'linea', 'paso', '_token']);
      
          // Guardar el binario de la imagen en la base de datos
          $data['url_firma'] = $processedImageData; // Guardamos el binario
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
              ['folio' => $folio, 'linea' => $linea, 'paso' => $paso],
              $data
          );
      
          return response()->json(["request" => 'ok']);
      }
      
      

      public function fc_finalizarvisitat1refuerzo1(Request $request){
        $now = Carbon::now();
        $folio = $request->input('folio');
        $linea = $request->input('linea');
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


    public function fc_guardaractualizacionynovedadeshogar(Request $request)
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
            ['folio' => $folio, 'linea' => $linea,'paso' => $paso], // Condición de búsqueda
            $data // Datos a insertar o actualizar
        );
   
        return response()->json(["request" => $data]); // Responder con los datos procesados
    }

    

}
