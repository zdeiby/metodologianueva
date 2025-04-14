<?php

namespace App\Http\Controllers\ffes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_integrantes;
use App\Models\m_index;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;
use Illuminate\Support\Arr;
use Illuminate\Support\Str; 

class c_integrantesffes extends Controller
{
    public function fc_integrantes(Request $request, $folio){
      if (!session('nombre')) {
        // Si no existe la sesión 'usuario', redirigir al login
        return redirect()->route('login');
    }

    
      $modelo= new m_integrantes();
      $modeloHogar= new m_index();
      $hashids = new Hashids('', 10);
      $decodedFolio = $hashids->decode($folio)[0];
      $jefes=$modelo-> m_veredadrepjefe($decodedFolio);
      $hogar= $modeloHogar->m_leerprincipalhogarconfolio_ffes($decodedFolio);
      $folioEncriptadolargo = encrypt($decodedFolio);
      
        return view('ffes/v_integrantesffes',["folio"=>$folio,"variable"=>$decodedFolio, 'jefes' => $jefes, 'hogar'=>$hogar, 'folioEncriptado'=>$folioEncriptadolargo]);
      }

    public function fc_leerintegrantes(Request $request){
        $folio=$request->input('folio');
       // $folioencriptado=$request->input('folioencriptado');
        $modelo= new m_integrantes();
        $integrantes=$modelo-> m_leerintegrantes_ffes($folio);
        $hashids = new Hashids('', 10);
        $folioencriptado = $hashids->encode($folio);

        $foliosintegrante='';
      foreach ($integrantes as $value) {
        $foliosintegrante .='<tr class="table-primary">
                <td class="align-middle">'.$value->nombre1.' '.$value->nombre2.' '.$value->apellido1.' '.$value->apellido2.'</td>
                <td class="align-middle">'.$value->documento.'</td>
                <td class="align-middle">'.$value->edad.'</td>
                <td class="align-middle text-center">'.(($value->jefedelhogar == '1')?'SI':'NO').'</td>
                <td class="align-middle text-center">'.(($value->representante == '1')?'SI':'NO').'</td>
               <!-- <td class="align-middle">
               <button class="btn  btn-sm" style="background:#2fa4e7; color:white"  '.(($value->estado == '1' && $value->estado2 == '1')?'':'disabled').' '.(($value->validacion == '0')?'':'disabled').'
                onclick="responderencuesta('.$folio.','.$value->idintegrante.',`'.$folioencriptado.'`,`'.$value->nombre1.' '.$value->nombre2.' '.$value->apellido1.' '.$value->apellido2.'`)">
                    Realizar Encuesta
                  </button></td> -->
                   <td class="align-middle">
                  <button  class="habilitado btn btn-success btn-sm" '.(($value->validacion == '0')?'':'disabled').' onclick="editarintegrantes(`'.$folioencriptado.'`,`'. $hashids->encode($value->idintegrante).'`,`'.$folioencriptado.'`)">
                    Caracterización
                  </button>
                  </td>
                <td style="width:100px !important"><img src="' .(($value->avatar)? asset('avatares/'.$value->avatar. '.png'):(($value->sexo =="13")?asset('avatares/mujer_avatar.png'):asset('avatares/hombre_avatar.png'))) . '" width="100%" alt=""></td>
                <!--  <td class="align-middle align-center" style="text-align: center !important;">
                  <button class="btn btn-danger btn-sm" onclick="eliminarintegrantes('.$folio.','.$value->idintegrante.')">
                    x
                  </button></td> -->
                </tr>
            
            ';
            }
            return response()->json(["foliosintegrante"=>$foliosintegrante]);
    }


    public function fc_finalizarintegrantesffes(Request $request){
      $now = Carbon::now();
      $folio = $request->input('folio');
      $linea = 100;  // poner linea 
      $paso = 10025;  // poner paso
      $usuario = $request->input('usuario'); // Este campo no es clave primaria

      // Datos a insertar o actualizar
      $data = [
          'folio' => $folio,
          'linea' => $linea,
          'paso' => $paso,
          'usuario' => $usuario,
          'estado' => 1,
          'sincro' => 0,
          'updated_at' => $now
      ];

      // Verificar si el registro existe
      $exists = DB::table('t1_pasosvisita')
          ->where('folio', $folio)
          ->where('linea', $linea)
          ->where('paso', $paso)
          ->exists();

      if (!$exists) {
          // Si no existe, agregar created_at
          $data['created_at'] = $now;
      }

      // Usar updateOrInsert para guardar o actualizar el registro, sin incluir 'usuario' en las condiciones
      DB::table('t1_pasosvisita')->updateOrInsert(
          [
              'folio' => $folio,
              'linea' => $linea,
              'paso' => $paso,
          ],
          $data
      );
      return response()->json(['message' =>  'ok']);
  }
  

}