<?php

namespace App\Http\Controllers;
use App\Models\m_index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class c_cards extends Controller
{
    public function fc_cards(Request $request){
     
        return view('v_cards',["variable"=>'variable']);
        
        
    }


}
