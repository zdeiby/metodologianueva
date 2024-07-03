<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\m_login;

class c_rombo extends Controller
{
    public function fc_rombo(Request $request, $cedula){
        return view('v_rombo',["variable"=>$cedula]);
      }

}
