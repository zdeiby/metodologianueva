<?php

namespace App\Http\Controllers\espaciodefinalizacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_herramientas;
use App\Models\visitaslineas\m_l1e1;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;
use App\Models\m_oportunidades;
use Illuminate\Support\Str;


class c_indicadores extends Controller
{

    public function fc_indicadores(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
       
         $herramientas = new m_herramientas();

           $tabla = 't1_oportunidad_integrantes';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $linea= 200;
            $paso= 20040;

             $rows = DB::table('t1_integranteshogar')
                ->where('folio', $encodedFolio)
                ->get();


                 $options = '<option value="">Seleccione</option>';

                     foreach ($rows as $p) {
                    $options .= '<option value="'.$hashids->encode($p->idintegrante).'">'.
                        ($p->nombre1.' '.$p->nombre2.' '.$p->apellido1.' '.$p->apellido2).
                    '</option>';
                }
    
            return view('espaciodefinalizacion/v_indicadores', ['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                    'foliomenu'=>$encodedFolio[0],
                                                                     'tabla'=>$tabla,
                                                                      'integrantes_options' => $options,
                                                                      'linea'=>$linea,
                                                                     'paso'=>$paso,
                                                                   
                                                                    ]);
    }    

}
