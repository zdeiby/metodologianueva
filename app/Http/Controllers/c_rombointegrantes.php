<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\m_login;

class c_rombointegrantes extends Controller
{
    public function fc_rombointegrantes(Request $request, $cedula){
        return view('v_rombointegrantes',["variable"=>$cedula]);
      }

}
