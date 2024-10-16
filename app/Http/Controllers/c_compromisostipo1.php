<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_herramientas;
use App\Models\visitaslineas\m_l1e1;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;



class c_compromisostipo1 extends Controller
{



// IR A LA VISTA BIENESTAR FISICO Y EMOCIONAL

    public function fc_compromiso1(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

         $herramientas = new m_herramientas();

            $tabla = 't1_visitatipo1compromisos';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
           
            $informacion = DB::table($tabla)
                            ->where('folio', $encodedFolio)
                            ->get();

             $datos = [
                 'compromiso1' => '',
                 'siguiente' => 'style="display:none"', 
            ];

            
             foreach ($informacion as $registro) {
                 // Asigna los valores de los indicadores a sus respectivas claves en el array $datos
                 $datos['compromiso1'] = $registro->compromiso1;
                 $datos['siguiente'] = (($registro->estado == '1')?'style="display:"':'style="display:none"');


             }


        

            return view('v_compromisostipo1',  $datos,['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                     'tabla'=>$tabla
                                                                    ]);
    }




    
     public function fc_guardarcompromisos(Request $request)
     {
         $folio = $request->input('folio');
         $tabla = $request->input('tabla');
         $now = Carbon::now();
         $data = $request->except(['folio', 'tabla']);
       
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
             ['folio' => $folio], // Condición de búsqueda
             $data // Datos a insertar o actualizar
         );
    
         return response()->json(["request" => $data]); // Responder con los datos procesados
     }

  
}
