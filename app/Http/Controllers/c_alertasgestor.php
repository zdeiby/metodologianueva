<?php

namespace App\Http\Controllers;
use App\Models\m_index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class c_alertasgestor extends Controller
{
    public function fc_index(Request $request){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
      $modelo= new m_index();
      $pphogar=$modelo->m_leeralertasgestor();
       // dd($pphogar);
      $folios='';
      $estacion='';

       $alertasGet = DB::table('t_alertasgestor')
        ->select('id', 'pregunta', 'descripcion')
         ->get();
       // dd($pphogar);

       // Array con solo preguntas
        $alertas = $alertasGet->pluck('pregunta', 'id')->toArray();

        // Array con descripciones HTML
        $alertasDescripcion = $alertasGet->pluck('descripcion', 'id')->toArray();
       
     
    
    $folios = array_map(function ($item) {

           if (in_array($item->casillamatriz, [1, 2, 4, 5])) {
            $grupoHTML = '<span class="badge rounded-pill bg-danger">Grupo 1</span>';
                } elseif (in_array($item->casillamatriz, [3, 6])) {
                    $grupoHTML = '<span class="badge rounded-pill bg-warning text-dark">Grupo 2</span>';
                } elseif (in_array($item->casillamatriz, [7, 8])) {
                    $grupoHTML = '<span class="badge rounded-pill bg-info text-dark">Grupo 3</span>';
                } elseif ($item->casillamatriz == 9) {
                    $grupoHTML = '<span class="badge rounded-pill bg-success">Grupo 4</span>';
                } else {
                    $grupoHTML = '<span class="badge rounded-pill bg-secondary">Sin visita</span>';
                }

                    
        return [
            'folio' => $item->folio ?? '',
            // 'idintegrante' => $item->idintegrante ?? '',
            // 'cedula' => $item->cedula ?? '',
            'documento' => $item->documento ?? '',
            'nombre' => ($item->nombre1 ?? '') . ' ' . ($item->nombre2 ?? '') . ' ' . ($item->apellido1 ?? '') . ' ' . ($item->apellido2 ?? ''),
            'celular' => $item->celular ?? '',
            'telefono' => $item->telefono ?? '',
            'barrio' => $item->barrio ?? '',
            'comuna' => $item->comuna ?? '',
            'direccion' => $item->direccion ?? '',
            'alerta' => $item->alerta 
            ? '<button class="btn btn-info btn-sm ver-alertas" data-alertas="'.htmlspecialchars($item->alerta).'"      data-folio="'.$item->folio.'" >Ver</button>'
            : '<span class="badge bg-secondary">Sin alertas</span>',

           'registraralerta' => '<button class="btn btn-sm btn-danger registrar-alerta" data-folio="'.$item->folio.'">Registrar 🚨</button>',
           'grupo' => $grupoHTML,
            // 'estadointegrante' => $item->estadointegrante ?? '',
            // 'sisben' => $item->sisben ?? '',
            // 'ruta' => $item->ruta ?? '',
            // 'celular' => $item->celular ?? '',
            // 'telefono' => $item->telefono ?? '',
            // 'barrio' => $item->barrio ?? '',
            // 'comuna' => $item->comuna ?? '',
            // 'direccion' => $item->direccion ?? '',
           
        ];
    }, $pphogar);

if(session('nombre') !== null){
        $nombre = session('nombre');
        $cedula = session('cedula');

        $sesion=['nombre'=> $nombre,
                'cedula'=>$cedula];
                
      
        return view('v_alertasgestor',["variable"=>$sesion,"folios"=>$folios,"estacion"=>$estacion,  "alertas"  => $alertas, 'alertasDescripcion' => $alertasDescripcion]);
        }else{
            return redirect()->route('login');
        }
        
    }



    // public function guardarAlertas(Request $request)
    // {
    //     $folio   = $request->input('folio');
    //     $alertas = $request->input('alertas'); // array de id_alerta
    //     $linea = $request->input('linea');
    //     $paso = $request->input('paso');

    //     if (empty($alertas)) {
    //         return response()->json([
    //             'status'  => 'error',
    //             'message' => 'No se seleccionaron alertas'
    //         ], 400);
    //     }

    //     // Obtener el último numero_alerta para este folio y sumarle 1
    //     $ultimoNumero = DB::table('t1_alertasgestor')
    //         ->where('folio', $folio)
    //         ->max('numero_alerta');

    //     $nuevoNumero = $ultimoNumero ? $ultimoNumero + 1 : 1;

    //     // Insertar todas las alertas seleccionadas
    //     $insertData = [];
    //     foreach ($alertas as $idAlerta) {
    //         $insertData[] = [
    //             'folio'         => $folio,
    //             'numero_alerta' => $nuevoNumero,
    //             'id_alerta'     => $idAlerta,
    //             'linea'     => $linea,
    //             'paso'     => $paso,
    //             'usuario'       => Session::get('cedula'),
    //             'sincro'        => 0,
    //             'created_at'    => now(),
    //             'updated_at'    => now(),
    //         ];
    //     }

    //     DB::table('t1_alertasgestor')->insert($insertData);

    //     return response()->json([
    //         'status'  => 'ok',
    //         'message' => 'Alertas guardadas correctamente',
    //         'numero_alerta' => $nuevoNumero
    //     ]);
    // }


   public function guardarAlertas(Request $request)
{
    $folio   = $request->input('folio');
    $alertas = $request->input('alertas'); // array de id_alerta
    $linea = $request->input('linea');
    $paso = $request->input('paso');

    if (empty($alertas)) {
        return response()->json([
            'status'  => 'error',
            'message' => 'No se seleccionaron alertas'
        ], 400);
    }

    // Inicializar la variable de estado y el número de alerta
    $numeroAlerta = 1;

    // Verificar si existe un registro con folio y linea 600 y estado != 1
    $registro600 = DB::table('t1_visitasrealizadas')
        ->where('folio', $folio)
        ->where('linea', 600)
        ->where('estado', 1)
        ->exists();

    $registro700 = DB::table('t1_visitasrealizadas')
        ->where('folio', $folio)
        ->where('linea', 700)
        ->where('estado', 1)
        ->exists();

    // Si no existe un registro con linea 600 y estado diferente a 1, asignamos alerta 1
    if ($registro600) {
        $numeroAlerta = 2;
    } 
    if ($registro700) {
        $numeroAlerta = 3;
    } 

       foreach ($alertas as $idAlerta) {
        DB::table('t1_alertasgestor')->updateOrInsert(
            [
                'folio' => $folio,
                'linea' => $linea,
                'id_alerta' => $idAlerta,
                'numero_alerta' => $numeroAlerta
            ],
            [
                
                'paso' => $paso,
                'usuario' => Session::get('cedula'),
                'sincro' => 0,
                'updated_at' => now(),
                'created_at' => now()
            ]
        );
    }




    return response()->json([
        'status'  => 'ok',
        'message' => 'Alertas guardadas correctamente',
        'numero_alerta' => $numeroAlerta
    ]);
}



}
