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
   
      $paso10010='10010';
      $existel100p10010 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso10010)
      ->exists();
      $paso10020='10020';
      $existel100p10020 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso10020)
      ->exists();
      $paso10030='10030';
      $existel100p10030 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso10030)
      ->exists();

      $paso10040='10040';
      $existel100p10040 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso10040)
      ->exists();

      $casilla = DB::table('t1_casillamatriz')
      ->where('folio', $folioDesencriptado)
      ->get();

        return view('v_rombointegrantes',["variable"=>$folio, 'foliocodificado'=>$foliocodificado,  'existel100p10010' => $existel100p10010 ? 1 : 0, 
      'existel100p10020' => $existel100p10020 ? 1 : 0, 'existel100p10030' => $existel100p10030 ? 1 : 0,  'existel100p10040' => $existel100p10040 ? 1 : 0, 'casillamatriz'=>$casilla]);
      }

      public function fc_agregarpasoencuadre(Request $request){
        $now = Carbon::now();
        $folio = $request->input('folio');
        $linea = 100;  // poner linea 
        $paso = 10010;  // poner paso
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


        //para agregar fecha de inicio de visita 

        $existsvisitas = DB::table('t1_visitasrealizadas')
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
            DB::table('t1_visitasrealizadas')->updateOrInsert(
                [
                    'folio' => $folio,
                    'linea' => $linea,
                ],
                $datavisitageneral
            );
    
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


      public function fc_agregarpasoresultado(Request $request){
        $now = Carbon::now();
        $folio = $request->input('folio');
        $linea = 100;  // poner linea 
        $paso = 10040;  // poner paso
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

        DB::select('CALL sp_calcular_indicadores(?)', [$folio]);
      //  DB::select('CALL sp_calcular_indicadores(?)', [$folio]);
    
        return response()->json(['message' => $folio]);
      }
      

}
