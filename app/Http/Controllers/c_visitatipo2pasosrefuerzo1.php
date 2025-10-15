<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;
use App\Models\m_index;


class c_visitatipo2pasosrefuerzo1 extends Controller
{
    public function fc_visitatipo2pasosrefuerzo1(Request $request, $folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }

        session()->forget(['folio', 'linea']);
      //  $folioDesencriptado = decrypt($folio);
        $hashids = new Hashids('', 10); 
        $folioDesencriptado = $hashids->decode($folio)[0];
       
        $foliocodificado = $folio;
        $linea='600';
        $paso='60010';

      session(['folio' => $folioDesencriptado, 'linea' => $linea]);

      $lineaanterior= 200;
      $pasoanterior= 50040;

      $metodologia = DB::table('t1_principalhogar')
      ->where('folio', $folioDesencriptado)
      ->value('metodologia');

      $prioridades = DB::table('t1_ordenprioridadesqt')
        ->select('categoria', 'prioridad')
        ->orderBy('prioridad', 'asc') // Ordenar de menor a mayor prioridad
        ->get();

   
      $paso60010='60010';
      $existel600p60010 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso60010)
      ->exists();

      //dd($existel300p30010);

      $paso60020='60020';
      $existel600p60020 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso60020)
      ->exists();
      $paso60030='60030';
      $existel600p60030 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso60030)
      ->exists();

      $paso60040='60040';
      $existel600p60040 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso60040)
      ->exists();

      $paso60050='60050';
      $existel600p60050 = DB::table('t1_pasosvisita')
      ->where('folio', $folioDesencriptado)
      ->where('linea', $linea)
      ->where('paso', $paso60050)
      ->exists();



       $paso60060='60060';
       $existel600p60060 = DB::table('t1_pasosvisita')
       ->where('folio', $folioDesencriptado)
       ->where('linea', $linea)
       ->where('paso', $paso60060)
       ->exists();

        $modelo = new m_index();
       $alertas =  $modelo->obtenerAlertasPorFolio($folioDesencriptado, 1);

       

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

       $indicadores = DB::table('vw_indicadores_hogar_detalle_ffes_mef_uno_a_uno')
            ->where('folio', $decodeFolio[0])
            ->where('codigoindicadorDA', 0)
            ->groupBy('folio', 'id_bienestar', 'id_indicador')
            ->get();

          //  dd($indicadores);


    // calculo de indicadores para BSE
    include(app_path('Http/Complementoscontrollers/calculodeindicadoresporhogar.php'));
    //

        return view('v_visitatipo2pasosrefuerzo1',["variable"=>$decodeFolio[0], "folioencriptado"=>$folio, 'foliobycript'=>$foliobycript, 'indicadoreshogar'=>$indicadoreshogar,
        'porcentaje_rojo_bse'=>$porcentaje_rojo_bse, 'porcentaje_verde_bse'=>$porcentaje_verde_bse, // 'porcentaje_gris_bse'=>$porcentaje_gris_bse,
        'porcentaje_rojo_bl'=>$porcentaje_rojo_bl, 'porcentaje_verde_bl'=>$porcentaje_verde_bl, //'porcentaje_gris_bl'=>$porcentaje_gris_bl,
        'porcentaje_rojo_bef'=>$porcentaje_rojo_bef, 'porcentaje_verde_bef'=>$porcentaje_verde_bef,// 'porcentaje_gris_bef'=>$porcentaje_gris_bef,
        'porcentaje_rojo_bi'=>$porcentaje_rojo_bi, 'porcentaje_verde_bi'=>$porcentaje_verde_bi, //'porcentaje_gris_bi'=>$porcentaje_gris_bi,
        'porcentaje_rojo_bf'=>$porcentaje_rojo_bf, 'porcentaje_verde_bf'=>$porcentaje_verde_bf, //'porcentaje_gris_bf'=>$porcentaje_gris_bf, 
        'v_visitatipo1pasos',
        "folioDesencriptado"=>$folioDesencriptado, 'foliocodificado'=>$foliocodificado,  'existel600p60010' => $existel600p60010 ? 1 : 0,
        'existel600p60020' => $existel600p60020 ? 1 : 0, 'existel600p60030' => $existel600p60030 ? 1 : 0,  'existel600p60040' => $existel600p60040 ? 1 : 0,
        'existel600p60050' => $existel600p60050 ? 1 : 0,  'existel600p60060' => $existel600p60060 ? 1 : 0,
        'prioridades'=>$prioridades,
        'folio'=>$decodeFolio[0], 'descripcion'=>$categorias[0]->descripcion, 'foliomenu'=>$decodeFolio[0],
        'linea'=>$linea,
        'paso'=>$paso, 'metodologia'=>$metodologia,'alertas'=>$alertas, 'indicadores'=>$indicadores
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