<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;


class c_visitatipo1pasosrefuerzo1 extends Controller
{
    public function fc_visitatipo1pasosrefuerzo1(Request $request, $folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

        session()->forget(['folio', 'linea']);
      //  $folioDesencriptado = decrypt($folio);
        $hashids = new Hashids('', 10); 
        $folioDesencriptado = $hashids->decode($folio)[0];
       
        $foliocodificado = $folio;
      $linea='300';
      $paso='30010';

      session(['folio' => $folioDesencriptado, 'linea' => $linea]);

      $lineaanterior= 200;
      $pasoanterior= 20040;

      $prioridades = DB::table('t1_ordenprioridadesqt')
        ->select('categoria', 'prioridad')
        ->orderBy('prioridad', 'asc') // Ordenar de menor a mayor prioridad
        ->get();

   
      $paso30010='30010';
      $existel300p30010 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso30010)
      ->exists();

      //dd($existel300p30010);

      $paso30020='30020';
      $existel300p30020 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso30020)
      ->exists();
      $paso30030='30030';
      $existel300p30030 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso30030)
      ->exists();

      $paso30040='30040';
      $existel300p30040 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso30040)
      ->exists();

      $paso30050='30050';
      $existel300p30050 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso30050)
      ->exists();



       $paso30060='30060';
       $existel300p30060 = DB::table('t1_pasosvisita')
       ->where('folio', $folioDesencriptado)
       ->where('linea', $linea)
       ->where('paso', $paso30060)
       ->exists();

    //   $casilla = DB::table('t1_casillamatriz')
    //   ->where('folio', $folioDesencriptado)
    //   ->get();

    //   $integrantehogar = DB::table('t1_principalhogar')
    //   ->join('t1_integranteshogar', 't1_principalhogar.idintegrantetitular', '=', 't1_integranteshogar.idintegrante')
    //   ->where('t1_principalhogar.folio', $folioDesencriptado)
    //   ->select('t1_principalhogar.*', 't1_integranteshogar.*') // Selecciona los campos que desees
    //   ->first();

                    $categorias = DB::table('t1_ordenprioridadesqt')
                    ->join('t_bienestares', 't1_ordenprioridadesqt.categoria', '=', 't_bienestares.id')
                    ->where('t1_ordenprioridadesqt.folio', $folioDesencriptado)
                    ->where('t1_ordenprioridadesqt.linea', $lineaanterior)
                    ->where('t1_ordenprioridadesqt.prioridad', 2)
                    ->select('t_bienestares.descripcion','t1_ordenprioridadesqt.categoria')
                    ->get();

      $hashids = new Hashids('', 10);

      $decodeFolio = $hashids->decode($folio);
      $foliobr=strval($decodeFolio[0]);
      $foliobycript= encrypt($foliobr);
      $indicadoreshogar = DB::table('t1_indicadores_hogar')
      ->where('folio',$decodeFolio[0])
      ->first();

    // calculo de indicadores para BSE
    include(app_path('Http/Complementoscontrollers/calculodeindicadoresporhogar.php'));
    //

        return view('v_visitatipo1pasosrefuerzo1',["variable"=>$decodeFolio[0], "folioencriptado"=>$folio, 'foliobycript'=>$foliobycript, 'indicadoreshogar'=>$indicadoreshogar,
        'porcentaje_rojo_bse'=>$porcentaje_rojo_bse, 'porcentaje_verde_bse'=>$porcentaje_verde_bse, // 'porcentaje_gris_bse'=>$porcentaje_gris_bse,
        'porcentaje_rojo_bl'=>$porcentaje_rojo_bl, 'porcentaje_verde_bl'=>$porcentaje_verde_bl, //'porcentaje_gris_bl'=>$porcentaje_gris_bl,
        'porcentaje_rojo_bef'=>$porcentaje_rojo_bef, 'porcentaje_verde_bef'=>$porcentaje_verde_bef,// 'porcentaje_gris_bef'=>$porcentaje_gris_bef,
        'porcentaje_rojo_bi'=>$porcentaje_rojo_bi, 'porcentaje_verde_bi'=>$porcentaje_verde_bi, //'porcentaje_gris_bi'=>$porcentaje_gris_bi,
        'porcentaje_rojo_bf'=>$porcentaje_rojo_bf, 'porcentaje_verde_bf'=>$porcentaje_verde_bf, //'porcentaje_gris_bf'=>$porcentaje_gris_bf, 
        'v_visitatipo1pasos',
        "folioDesencriptado"=>$folioDesencriptado, 'foliocodificado'=>$foliocodificado,  'existel300p30010' => $existel300p30010 ? 1 : 0,
        'existel300p30020' => $existel300p30020 ? 1 : 0, 'existel300p30030' => $existel300p30030 ? 1 : 0,  'existel300p30040' => $existel300p30040 ? 1 : 0,
        'existel300p30050' => $existel300p30050 ? 1 : 0,  'existel300p30060' => $existel300p30060 ? 1 : 0,
        'prioridades'=>$prioridades,
        'folio'=>$decodeFolio[0], 'descripcion'=>$categorias[0]->descripcion, 'foliomenu'=>$decodeFolio[0],
        'linea'=>$linea,
        'paso'=>$paso,
      ]);

      }

//       public function fc_guardarprioridad(Request $request){
//         $now = Carbon::now();

//         $orden = $request->input('order');

// //dd($orden);
//         $folio = $orden[0]['folio'];
//         $linea = 200;  // poner linea 
//         $paso = 20010;  // poner paso
//         $usuario =  $orden[0]['usuario']; // Este campo no es clave primaria
    
//         // Datos a insertar o actualizar
//         $data = [
//             'folio' => $folio,
//             'linea' => $linea,
//             'paso' => $paso,
//             'usuario' => $usuario,
//             'estado' => 1,
//             'sincro' => 0,
//             'updated_at' => $now
//         ];
    
//         // Verificar si el registro existe
//         $exists = DB::table('t1_pasosvisita')
//             ->where('folio', $folio)
//             ->where('linea', $linea)
//             ->where('paso', $paso)
//             ->exists();
    
//         if (!$exists) {
//             // Si no existe, agregar created_at
//             $data['created_at'] = $now;
//         }


//         //para agregar fecha de inicio de visita 

//         $existsvisitas = DB::table('t1_visitasrealizadas')
//         ->where('folio', $folio)
//         ->where('linea', $linea)
//         ->exists();

//             if (!$existsvisitas) {
//                 // Si no existe, agregar created_at
//                 $datavisitageneral['created_at'] = $now;
//             }

//             $datavisitageneral = [
//                 'folio' => $folio,
//                 'linea' => $linea,
//                 'iniciovisita' => $now,
//                 'usuario' => $usuario,
//                 'estado' => 0,
//                 'sincro' => 0,
//                 'updated_at' => $now
//             ];
//             DB::table('t1_visitasrealizadas')->updateOrInsert(
//                 [
//                     'folio' => $folio,
//                     'linea' => $linea,
//                 ],
//                 $datavisitageneral
//             );
    
//         DB::table('t1_pasosvisita')->updateOrInsert(
//             [
//                 'folio' => $folio,
//                 'linea' => $linea,
//                 'paso' => $paso,
//             ],
//             $data
//         );

      
//         foreach ($orden as $item) {

//             $exists = DB::table('t1_ordenprioridadesqt')
//             ->where('folio',  $item['folio'])
//             ->where('categoria', $item['categoria'])
//             ->exists();
    
//          $datosparatabla= [
//             'prioridad' => $item['prioridad'],
//             'usuario' => $item['usuario'],
//             'linea' => $linea,
//             'estado' => $data['estado'],
//             'sincro' => $data['sincro'],
//             'updated_at' => $now,

//         ];

//         if (!$existsvisitas) {
//             // Si no existe, agregar created_at
//             $datavisitageneral['created_at'] = $now;
//         }

//         DB::table('t1_ordenprioridadesqt')->updateOrInsert(
//             [
//                 'folio' =>  $item['folio'],
//                 'categoria' =>  $item['categoria'],
                
//             ],
            
//                 $datosparatabla
            
//         );
//     }
    
    
//         return response()->json(['message' => $folio]);
//       }




    //   public function fc_agregarpasoresultado(Request $request){
    //     $now = Carbon::now();
    //     $folio = $request->input('folio');
    //     $linea = 100;  // poner linea 
    //     $paso = 10040;  // poner paso
    //     $usuario = $request->input('usuario'); // Este campo no es clave primaria
    
    //     // Datos a insertar o actualizar
    //     $data = [
    //         'folio' => $folio,
    //         'linea' => $linea,
    //         'paso' => $paso,
    //         'usuario' => $usuario,
    //         'estado' => 1,
    //         'sincro' => 0,
    //         'updated_at' => $now
    //     ];
    
    //     // Verificar si el registro existe
    //     $exists = DB::table('t1_pasosvisita')
    //         ->where('folio', $folio)
    //         ->where('linea', $linea)
    //         ->where('paso', $paso)
    //         ->exists();
    
    //     if (!$exists) {
    //         // Si no existe, agregar created_at
    //         $data['created_at'] = $now;
    //     }
    
    //     // Usar updateOrInsert para guardar o actualizar el registro, sin incluir 'usuario' en las condiciones
    //     DB::table('t1_pasosvisita')->updateOrInsert(
    //         [
    //             'folio' => $folio,
    //             'linea' => $linea,
    //             'paso' => $paso,
    //         ],
    //         $data
    //     );

    //     DB::select('CALL sp_calcular_indicadores(?)', [$folio]);
    //     DB::select('CALL sp_indicadores_hogar(?)', [$folio]);

    //     $integranteshogar=  DB::table('t1_integranteshogar')
    //     ->where('folio',$folio)
    //     ->get();

    // foreach ($integranteshogar as $integrante) {
    //     $idintegrante = $integrante->idintegrante;
    //     DB::select('CALL sp_indicadores_integrantes(?,?)', [$folio,$idintegrante]);  
    //   }
    //    return response()->json(['message' => $folio]);

    // }

    public function fc_agregarpasoeiniciovisita(Request $request)
    {
        $now = Carbon::now();
        $folio = $request->input('folio');
        $linea = $request->input('linea');
        $paso = $request->input('paso');
        $usuario = $request->input('usuario'); // Este campo no es clave primaria
    
        // 📌 Verificar si el registro existe en `t1_pasosvisita`
        $existsPasos = DB::table('t1_pasosvisita')
            ->where('folio', $folio)
            ->where('linea', $linea)
            ->where('paso', $paso)
            ->exists();
    
        // 📌 Datos a insertar o actualizar en `t1_pasosvisita`
        $dataPasos = [
            'folio' => $folio,
            'linea' => $linea,
            'paso' => $paso,
            'usuario' => $usuario,
            'estado' => 1,
            'sincro' => 0,
            'updated_at' => $now
        ];
    
        if (!$existsPasos) {
            $dataPasos['created_at'] = $now;
        }
    
        // ✅ Insertar o actualizar en `t1_pasosvisita`
        DB::table('t1_pasosvisita')->updateOrInsert(
            [
                'folio' => $folio,
                'linea' => $linea,
                'paso' => $paso
            ],
            $dataPasos
        );
    
        // 📌 Verificar si el registro existe en `t1_visitasrealizadas`
        $existsVisitas = DB::table('t1_visitasrealizadas')
            ->where('folio', $folio)
            ->where('linea', $linea)
            ->exists();

            $cif = DB::table('t_cif')->orderBy('id', 'asc')->value('id');
       // dd($cif);
    
        // 📌 Datos a insertar o actualizar en `t1_visitasrealizadas`
        $dataVisita = [
            'folio' => $folio,
            'linea' => $linea,
            'iniciovisita' => $now,
            'usuario' => $usuario,
            'cif' => $cif,
            'estado' => 0,
            'sincro' => 0,
            'updated_at' => $now
        ];
    
        if (!$existsVisitas) {
            $dataVisita['created_at'] = $now;
        }
    
        // ✅ Insertar o actualizar en `t1_visitasrealizadas`
        DB::table('t1_visitasrealizadas')->updateOrInsert(
            [
                'folio' => $folio,
                'linea' => $linea
            ],
            $dataVisita
        );
    
        // 🎯 Respuesta JSON
        return response()->json(['message' => "Registro exitoso para folio: {$folio}"]);
    }




}