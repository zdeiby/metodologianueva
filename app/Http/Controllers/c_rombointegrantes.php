<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class c_rombointegrantes extends Controller
{
    public function fc_rombointegrantes(Request $request, $folio){
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

        return view('v_rombointegrantes',["variable"=>$folio,  'existel100p1000' => $existel100p1000 ? 1 : 0 , 'existel100p10000' => $existel100p10000 ? 1 : 0, 
      'existel100p100000' => $existel100p100000 ? 1 : 0, 'existel100p1000000' => $existel100p1000000 ? 1 : 0]);
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
