<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;


class c_rombointegrantes extends Controller
{
    public function fc_rombointegrantes(Request $request, $folio){
        $folioDesencriptado = decrypt($folio);
        $hashids = new Hashids('', 10); 
        $foliocodificado = $hashids->encode($folioDesencriptado);
        
      $folioDesencriptado = decrypt($folio);
      $linea='100';
      $paso1000='1000';
      $existel100p1000 = DB::table('dbmetodologia.t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso1000)
      ->exists();
      
      $paso10000='10000';
      $existel100p10000 = DB::table('dbmetodologia.t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso10000)
      ->exists();
      $paso100000='100000';
      $existel100p100000 = DB::table('dbmetodologia.t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso100000)
      ->exists();
      $paso1000000='1000000';
      $existel100p1000000 = DB::table('dbmetodologia.t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso1000000)
      ->exists();

      $casilla = DB::table('t1_casillamatriz')
      ->where('folio', $folioDesencriptado)
      ->get();

        return view('v_rombointegrantes',["variable"=>$folio, 'foliocodificado'=>$foliocodificado,  'existel100p1000' => $existel100p1000 ? 1 : 0 , 'existel100p10000' => $existel100p10000 ? 1 : 0, 
      'existel100p100000' => $existel100p100000 ? 1 : 0, 'existel100p1000000' => $existel100p1000000 ? 1 : 0, 'casillamatriz'=>$casilla]);
      }

      public function fc_agregarpasoencuadre(Request $request){
        $now = Carbon::now();
        $folio = $request->input('folio');
        $linea = 100;  // poner linea 
        $paso = 1000;  // poner paso
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
        $exists = DB::table('dbmetodologia.t1_pasosvisita')
            ->where('folio', $folio)
            ->where('linea', $linea)
            ->where('paso', $paso)
            ->exists();
    
        if (!$exists) {
            // Si no existe, agregar created_at
            $data['created_at'] = $now;
        }


        //para agregar fecha de inicio de visita 

        $existsvisitas = DB::table('dbmetodologia.t1_visitasrealizadas')
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
                'iniciovisita' => $now,
                'usuario' => $usuario,
                'estado' => 0,
                'sincro' => 0,
                'updated_at' => $now
            ];
            DB::table('dbmetodologia.t1_visitasrealizadas')->updateOrInsert(
                [
                    'folio' => $folio,
                    'linea' => $linea,
                ],
                $datavisitageneral
            );
    
        // Usar updateOrInsert para guardar o actualizar el registro, sin incluir 'usuario' en las condiciones
        DB::table('dbmetodologia.t1_pasosvisita')->updateOrInsert(
            [
                'folio' => $folio,
                'linea' => $linea,
                'paso' => $paso,
            ],
            $data
        );
    
        return response()->json(['message' => $folio]);
      }


      public function fc_agregarpasoresultado(Request $request){
        $now = Carbon::now();
        $folio = $request->input('folio');
        $linea = 100;  // poner linea 
        $paso = 1000000;  // poner paso
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
        $exists = DB::table('dbmetodologia.t1_pasosvisita')
            ->where('folio', $folio)
            ->where('linea', $linea)
            ->where('paso', $paso)
            ->exists();
    
        if (!$exists) {
            // Si no existe, agregar created_at
            $data['created_at'] = $now;
        }
    
        // Usar updateOrInsert para guardar o actualizar el registro, sin incluir 'usuario' en las condiciones
        DB::table('dbmetodologia.t1_pasosvisita')->updateOrInsert(
            [
                'folio' => $folio,
                'linea' => $linea,
                'paso' => $paso,
            ],
            $data
        );
    
        return response()->json(['message' => $folio]);
      }
      

}
