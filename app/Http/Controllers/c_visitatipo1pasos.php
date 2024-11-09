<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;


class c_visitatipo1pasos extends Controller
{
    public function fc_visitatipo1pasos(Request $request, $folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
      //  $folioDesencriptado = decrypt($folio);
        $hashids = new Hashids('', 10); 
        $folioDesencriptado = $hashids->decode($folio)[0];
        $foliocodificado = $folio;
      $linea='200';
   
      $paso20010='20010';
      $existel200p20010 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso20010)
      ->exists();
      $paso20020='20020';
      $existel200p20020 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso20020)
      ->exists();
      $paso20030='20030';
      $existel200p20030 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso20030)
      ->exists();

      $paso20040='20040';
      $existel200p20040 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso20040)
      ->exists();

      $paso20050='20050';
      $existel200p20050 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso20050)
      ->exists();

    //   $paso20060='20060';
    //   $existel200p20060 = DB::table('t1_pasosvisita')
    //   ->where('folio', $folioDesencriptado)
    //   ->where('linea', $linea)
    //   ->where('paso', $paso20060)
    //   ->exists();

    //   $casilla = DB::table('t1_casillamatriz')
    //   ->where('folio', $folioDesencriptado)
    //   ->get();

    //   $integrantehogar = DB::table('t1_principalhogar')
    //   ->join('t1_integranteshogar', 't1_principalhogar.idintegrantetitular', '=', 't1_integranteshogar.idintegrante')
    //   ->where('t1_principalhogar.folio', $folioDesencriptado)
    //   ->select('t1_principalhogar.*', 't1_integranteshogar.*') // Selecciona los campos que desees
    //   ->first();


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

        return view('v_visitatipo1pasos',["variable"=>$decodeFolio[0], "folioencriptado"=>$folio, 'foliobycript'=>$foliobycript, 'indicadoreshogar'=>$indicadoreshogar,
        'porcentaje_rojo_bse'=>$porcentaje_rojo_bse, 'porcentaje_verde_bse'=>$porcentaje_verde_bse, // 'porcentaje_gris_bse'=>$porcentaje_gris_bse,
        'porcentaje_rojo_bl'=>$porcentaje_rojo_bl, 'porcentaje_verde_bl'=>$porcentaje_verde_bl, //'porcentaje_gris_bl'=>$porcentaje_gris_bl,
        'porcentaje_rojo_bef'=>$porcentaje_rojo_bef, 'porcentaje_verde_bef'=>$porcentaje_verde_bef,// 'porcentaje_gris_bef'=>$porcentaje_gris_bef,
        'porcentaje_rojo_bi'=>$porcentaje_rojo_bi, 'porcentaje_verde_bi'=>$porcentaje_verde_bi, //'porcentaje_gris_bi'=>$porcentaje_gris_bi,
        'porcentaje_rojo_bf'=>$porcentaje_rojo_bf, 'porcentaje_verde_bf'=>$porcentaje_verde_bf, //'porcentaje_gris_bf'=>$porcentaje_gris_bf, 
        'v_visitatipo1pasos',
        "folioDesencriptado"=>$folioDesencriptado, 'foliocodificado'=>$foliocodificado,  'existel200p20010' => $existel200p20010 ? 1 : 0,
      'existel200p20020' => $existel200p20020 ? 1 : 0, 'existel200p20030' => $existel200p20030 ? 1 : 0,  'existel200p20040' => $existel200p20040 ? 1 : 0,
      'existel200p20050' => $existel200p20050 ? 1 : 0,  //'existel200p20060' => $existel200p20060 ? 1 : 0,
      ]);

      }

      public function fc_guardarprioridad(Request $request){
        $now = Carbon::now();

        $orden = $request->input('order');

//dd($orden);
        $folio = $orden[0]['folio'];
        $linea = 200;  // poner linea 
        $paso = 20010;  // poner paso
        $usuario =  $orden[0]['usuario']; // Este campo no es clave primaria
    
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
    
        DB::table('t1_pasosvisita')->updateOrInsert(
            [
                'folio' => $folio,
                'linea' => $linea,
                'paso' => $paso,
            ],
            $data
        );

      
        foreach ($orden as $item) {

            $exists = DB::table('t1_ordenprioridadesqt')
            ->where('folio',  $item['folio'])
            ->where('categoria', $item['categoria'])
            ->exists();
    
         $datosparatabla= [
            'prioridad' => $item['prioridad'],
            'usuario' => $item['usuario'],
            'linea' => $linea,
            'estado' => $data['estado'],
            'sincro' => $data['sincro'],
            'updated_at' => $now,

        ];

        if (!$existsvisitas) {
            // Si no existe, agregar created_at
            $datavisitageneral['created_at'] = $now;
        }

        DB::table('t1_ordenprioridadesqt')->updateOrInsert(
            [
                'folio' =>  $item['folio'],
                'categoria' =>  $item['categoria'],
                
            ],
            
                $datosparatabla
            
        );
    }
    
    
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
        DB::select('CALL sp_indicadores_hogar(?)', [$folio]);

        $integranteshogar=  DB::table('t1_integranteshogar')
        ->where('folio',$folio)
        ->get();

    foreach ($integranteshogar as $integrante) {
        $idintegrante = $integrante->idintegrante;
        DB::select('CALL sp_indicadores_integrantes(?,?)', [$folio,$idintegrante]);  
      }
       return response()->json(['message' => $folio]);

    }
}