<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;


class c_visitatipo1pasosrefuerzo2 extends Controller
{
    public function fc_visitatipo1pasosrefuerzo2(Request $request, $folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

        session()->forget(['folio', 'linea']);
      //  $folioDesencriptado = decrypt($folio);
        $hashids = new Hashids('', 10); 
        $folioDesencriptado = $hashids->decode($folio)[0];
       
        $foliocodificado = $folio;
        $linea='400';
        $paso='40010';

      session(['folio' => $folioDesencriptado, 'linea' => $linea]);

      $lineaanterior= 200;
      $pasoanterior= 30040;

      $metodologia = DB::table('t1_principalhogar')
      ->where('folio', $folioDesencriptado)
      ->value('metodologia');

      $prioridades = DB::table('t1_ordenprioridadesqt')
        ->select('categoria', 'prioridad')
        ->orderBy('prioridad', 'asc') // Ordenar de menor a mayor prioridad
        ->get();

   
      $paso40010='40010';
      $existel400p40010 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso40010)
      ->exists();

      //dd($existel300p30010);

      $paso40020='40020';
      $existel400p40020 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso40020)
      ->exists();
      $paso40030='40030';
      $existel400p40030 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso40030)
      ->exists();

      $paso40040='40040';
      $existel400p40040 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso40040)
      ->exists();

      $paso40050='40050';
      $existel400p40050 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso40050)
      ->exists();



       $paso40060='40060';
       $existel400p40060 = DB::table('t1_pasosvisita')
       ->where('folio', $folioDesencriptado)
       ->where('linea', $linea)
       ->where('paso', $paso40060)
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
                    ->where('t1_ordenprioridadesqt.prioridad', 3)
                    ->select('t_bienestares.descripcion','t1_ordenprioridadesqt.categoria')
                    ->get();
//dd($categorias);
      $hashids = new Hashids('', 10);

      $decodeFolio = $hashids->decode($folio);
      $foliobr=strval($decodeFolio[0]);
      $foliobycript= encrypt($foliobr);
      $indicadoreshogar = ''; /*DB::table('t1_indicadores_hogar')
      ->where('folio',$decodeFolio[0])
      ->first();*/
      if($metodologia == 2){
        $indicadoreshogar = DB::table('t1_indicadores_hogar_ffes')
            ->where('folio',$decodeFolio[0])
            ->first();
    }else{
        $indicadoreshogar = DB::table('t1_indicadores_hogar')
        ->where('folio',$decodeFolio[0])
        ->first();
    }
      //  dd($existel400p40020);

    // calculo de indicadores para BSE
    include(app_path('Http/Complementoscontrollers/calculodeindicadoresporhogar.php'));
    //

        return view('v_visitatipo1pasosrefuerzo2',["variable"=>$decodeFolio[0], "folioencriptado"=>$folio, 'foliobycript'=>$foliobycript, 'indicadoreshogar'=>$indicadoreshogar,
        'porcentaje_rojo_bse'=>$porcentaje_rojo_bse, 'porcentaje_verde_bse'=>$porcentaje_verde_bse, // 'porcentaje_gris_bse'=>$porcentaje_gris_bse,
        'porcentaje_rojo_bl'=>$porcentaje_rojo_bl, 'porcentaje_verde_bl'=>$porcentaje_verde_bl, //'porcentaje_gris_bl'=>$porcentaje_gris_bl,
        'porcentaje_rojo_bef'=>$porcentaje_rojo_bef, 'porcentaje_verde_bef'=>$porcentaje_verde_bef,// 'porcentaje_gris_bef'=>$porcentaje_gris_bef,
        'porcentaje_rojo_bi'=>$porcentaje_rojo_bi, 'porcentaje_verde_bi'=>$porcentaje_verde_bi, //'porcentaje_gris_bi'=>$porcentaje_gris_bi,
        'porcentaje_rojo_bf'=>$porcentaje_rojo_bf, 'porcentaje_verde_bf'=>$porcentaje_verde_bf, //'porcentaje_gris_bf'=>$porcentaje_gris_bf, 
        'v_visitatipo1pasos',
        "folioDesencriptado"=>$folioDesencriptado, 'foliocodificado'=>$foliocodificado,  'existel400p40010' => $existel400p40010 ? 1 : 0,
        'existel400p40020' => $existel400p40020 ? 1 : 0, 'existel400p40030' => $existel400p40030 ? 1 : 0,  'existel400p40040' => $existel400p40040 ? 1 : 0,
        'existel400p40050' => $existel400p40050 ? 1 : 0,  'existel400p40060' => $existel400p40060 ? 1 : 0,
        'prioridades'=>$prioridades,
        'folio'=>$decodeFolio[0], 'descripcion'=>$categorias[0]->descripcion, 'foliomenu'=>$decodeFolio[0],
        'linea'=>$linea,
        'paso'=>$paso, 'metodologia'=>$metodologia,
      ]);

      }


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

        $inicio = Carbon::now();
        $totalSegundos = $inicio->diffInSeconds(Carbon::now());
    
        // 🎯 Respuesta JSON
        return response()->json(['message' => "Registro exitoso para folio: {$folio}",  'totalSegundos' => $totalSegundos]);
    }




}