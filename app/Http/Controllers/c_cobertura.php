<?php

namespace App\Http\Controllers;
use App\Models\m_index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Hashids\Hashids;
use Illuminate\Support\Str; 

class c_cobertura extends Controller
{
    public function fc_index(Request $request){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
      $modelo= new m_index();
      $pphogar=$modelo->m_leerprincipalhogar();
      $folios='';
      $estacion='';
      $hashids = new Hashids('', 10);

    //   }
    

    $folios = array_map(function ($item) use ($hashids) {

            $metodologia = DB::table('t1_principalhogar')
             ->where('folio', $item->folio)
             ->value('metodologia');

        $grupoHTML = '';

            if (in_array($item->casillamatriz, [1, 2, 4, 5])) {
                $grupoHTML = '<div class="badge-grupo grupo-1" title="Alta vulnerabilidad: pobreza extrema en IPM e ingresos">Grupo 1</div>';
            } elseif (in_array($item->casillamatriz, [3, 6])) {
                $grupoHTML = '<div class="badge-grupo grupo-2" title="Vulnerabilidad moderada en ingresos o en IPM">Grupo 2</div>';
            } elseif (in_array($item->casillamatriz, [7, 8])) {
                $grupoHTML = '<div class="badge-grupo grupo-3" title="Vulnerabilidad moderada solo en IPM">Grupo 3</div>';
            } elseif ($item->casillamatriz == 9) {
                $grupoHTML = '<div class="badge-grupo grupo-4" title="Baja vulnerabilidad o no vulnerable">Grupo 4</div>';
            } else {
                $grupoHTML = '<div class="badge-grupo grupo-na" title="Sin información de visita inicial">Sin visita inicial</div>';
            }

      $encodedFolio = $hashids->encode($item->folio);
        return [
            'folio' => $item->folio ?? '',
            'documento' => $item->documento ?? '',
            'nombre' => ($item->nombre1 ?? '') . ' ' . ($item->nombre2 ?? '') . ' ' . ($item->apellido1 ?? '') . ' ' . ($item->apellido2 ?? ''),
            'celular' => $item->celular ?? '',
            'telefono' => $item->telefono ?? '',
            'barrio' => $item->barrio ?? '',
            'comuna' => $item->comuna ?? '',
            'direccion' => $item->direccion ?? '',
            'estacion' =>  $item->ultimo_idestacion ?? 'Gestión no especificada',
          'grupo' => $grupoHTML,



            'gestion' => ($item->casillamatriz == 9 && $metodologia != 2)
                ? '<button type="submit" style="width:100px" class="btn btn-success btn-sm">Baja vulnerabilidad</button>'
                : '<button type="submit"  class="btn btn-primary btn-sm"  onclick="habeasdata(\'' . encrypt($item->folio) . '\', \'' . $item->folio . '\')" id="' . $item->folio . 'boton">Gestiónar</button>',
            'actualizar' => '<button type="submit"  class="btn btn-primary btn-sm" style="background:#ff8403 !important; border: 1px solid #ff8403"  onclick="actualizar(\'' . $encodedFolio . '\', \'' . $item->folio . '\')" id="' . $item->folio . 'actualizar">Actualizar</button>',
        ];
    }, $pphogar);

if(session('nombre') !== null){
        $nombre = session('nombre');
        $cedula = session('cedula');

        $sesion=['nombre'=> $nombre,
                'cedula'=>$cedula];
                
      
        return view('v_cobertura',["variable"=>$sesion,"folios"=>$folios,"estacion"=>$estacion]);
        }else{
            return redirect()->route('login');
        }
        
    }

    public function fc_leerprincipalhogar(Request $request){
         $folio=$request->input('folio');
         $principalhogar=  DB::table('t1_principalhogar')
         ->where('folio', $request->input('folio'))
         ->first();
         return response()->json(["principalhogar" => $principalhogar]);
    }

    public function fc_guardarhabeasdata(Request $request){
      $affectedRows = DB::table('t1_principalhogar')
                      ->where('folio', $request->input('folio'))
                      ->update(['habeasdata' => 1]);
      return response()->json(["ok" => 'ok']);
 }


}
