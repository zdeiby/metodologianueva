<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;


class c_visitatipo1pasosrefuerzo3 extends Controller
{
    public function fc_visitatipo1pasosrefuerzo3(Request $request, $folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

        session()->forget(['folio', 'linea']);
      //  $folioDesencriptado = decrypt($folio);
        $hashids = new Hashids('', 10); 
        $folioDesencriptado = $hashids->decode($folio)[0];
       
        $foliocodificado = $folio;
        $linea='500';
        $paso='50010';

      session(['folio' => $folioDesencriptado, 'linea' => $linea]);

      $lineaanterior= 200;
      $pasoanterior= 40040;

      $metodologia = DB::table('t1_principalhogar')
      ->where('folio', $folioDesencriptado)
      ->value('metodologia');

      $prioridades = DB::table('t1_ordenprioridadesqt')
        ->select('categoria', 'prioridad')
        ->orderBy('prioridad', 'asc') // Ordenar de menor a mayor prioridad
        ->get();

   
      $paso50010='50010';
      $existel500p50010 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso50010)
      ->exists();

      //dd($existel300p30010);

      $paso50020='50020';
      $existel500p50020 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso50020)
      ->exists();
      $paso50030='50030';
      $existel500p50030 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso50030)
      ->exists();

      $paso50040='50040';
      $existel500p50040 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso50040)
      ->exists();

      $paso50050='50050';
      $existel500p50050 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso50050)
      ->exists();



       $paso50060='50060';
       $existel500p50060 = DB::table('t1_pasosvisita')
       ->where('folio', $folioDesencriptado)
       ->where('linea', $linea)
       ->where('paso', $paso50060)
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
                    ->where('t1_ordenprioridadesqt.prioridad', 4)
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

        return view('v_visitatipo1pasosrefuerzo3',["variable"=>$decodeFolio[0], "folioencriptado"=>$folio, 'foliobycript'=>$foliobycript, 'indicadoreshogar'=>$indicadoreshogar,
        'porcentaje_rojo_bse'=>$porcentaje_rojo_bse, 'porcentaje_verde_bse'=>$porcentaje_verde_bse, // 'porcentaje_gris_bse'=>$porcentaje_gris_bse,
        'porcentaje_rojo_bl'=>$porcentaje_rojo_bl, 'porcentaje_verde_bl'=>$porcentaje_verde_bl, //'porcentaje_gris_bl'=>$porcentaje_gris_bl,
        'porcentaje_rojo_bef'=>$porcentaje_rojo_bef, 'porcentaje_verde_bef'=>$porcentaje_verde_bef,// 'porcentaje_gris_bef'=>$porcentaje_gris_bef,
        'porcentaje_rojo_bi'=>$porcentaje_rojo_bi, 'porcentaje_verde_bi'=>$porcentaje_verde_bi, //'porcentaje_gris_bi'=>$porcentaje_gris_bi,
        'porcentaje_rojo_bf'=>$porcentaje_rojo_bf, 'porcentaje_verde_bf'=>$porcentaje_verde_bf, //'porcentaje_gris_bf'=>$porcentaje_gris_bf, 
        'v_visitatipo1pasos',
        "folioDesencriptado"=>$folioDesencriptado, 'foliocodificado'=>$foliocodificado,  'existel500p50010' => $existel500p50010 ? 1 : 0,
        'existel500p50020' => $existel500p50020 ? 1 : 0, 'existel500p50030' => $existel500p50030 ? 1 : 0,  'existel500p50040' => $existel500p50040 ? 1 : 0,
        'existel500p50050' => $existel500p50050 ? 1 : 0,  'existel500p50060' => $existel500p50060 ? 1 : 0,
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