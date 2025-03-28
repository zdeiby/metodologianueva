<?php

namespace App\Http\Controllers\ffes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_herramientas;
use App\Models\visitaslineas\m_l1e1;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;



class c_caracterizacionhogar extends Controller
{

// IR A LA VISTA BIENESTAR FISICO Y EMOCIONAL

    public function fc_caracterizacionhogar(Request $request){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
            return view('ffes/v_caracterizacionhogar',['variable'=>'', 'folio'=>''
                                                                    ]);
    }



}
