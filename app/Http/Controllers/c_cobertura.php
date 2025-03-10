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
            'gestion' => ($item->casillamatriz == 9)
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
