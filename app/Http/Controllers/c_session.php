<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_session extends Controller
{
    public function borrarcookies(Request $request)
    {
        $request->session()->invalidate(); // Invalida la sesión actual
        $request->session()->regenerateToken(); // Regenera el token de CSRF

        // Borra todas las cookies
        try{
            $response = new \Illuminate\Http\Response('Logout successful');
            $response->withCookie(cookie()->forget(''));    
        }catch (\Exception $e) {
        }

        return redirect()->route('login');
    }
}
