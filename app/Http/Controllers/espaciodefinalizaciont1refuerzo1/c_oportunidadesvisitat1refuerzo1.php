<?php

namespace App\Http\Controllers\espaciodefinalizaciont1refuerzo1;

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


class c_oportunidadesvisitat1refuerzo1 extends Controller
{

    public function fc_ficherodeoportunidadest1refuerzo1(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
       
         $herramientas = new m_herramientas();

           $tabla = 't1_oportunidad_integrantes';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $linea= 300;
            $paso= 30040;
    
         


            return view('espaciodefinalizaciont1refuerzo1/v_ficherodeoportunidadest1refuerzo1', ['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                    'foliomenu'=>$encodedFolio[0],
                                                                     'tabla'=>$tabla,
                                                                
                                                                      'linea'=>$linea,
                                                                     'paso'=>$paso,
                                                                   
                                                                    ]);
    }


    public function fc_ficherodeoportunidadeshogart1refuerzo1(Request $request,$folio){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
       
         $herramientas = new m_herramientas();

            $tabla = 't1_accionmovilizadoraqt';
            $hashids = new Hashids('', 10); 
            $encodedFolio = $hashids->decode($folio);
            $linea= 300;
            $paso= 30040;
            $modelo = new m_oportunidades();
            // $oportunidad = $modelo-> m_listadooportunidades();



            return view('espaciodefinalizaciont1refuerzo1/v_ficherodeoportunidadeshogart1refuerzo1',  ['variable'=>$folio,
                                                                    'folio'=>$encodedFolio[0],
                                                                    'foliomenu'=>$encodedFolio[0],
                                                                     'tabla'=>$tabla,
                                                                   
                                                                      'linea'=>$linea,
                                                                     'paso'=>$paso,
                                                                     
                                                                    ]);
    }


    

}
