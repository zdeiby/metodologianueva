<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_integrantes;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class c_integrantes extends Controller
{
    public function fc_integrantes(Request $request, $cedula){
      if (!session('nombre')) {
        // Si no existe la sesión 'usuario', redirigir al login
        return redirect()->route('login');
    }
      $modelo= new m_integrantes();
      $jefes=$modelo-> m_veredadrepjefe(decrypt($cedula));
        return view('v_integrantes',["variable"=>$cedula, 'jefes' => $jefes]);
      }

    public function fc_leerintegrantes(Request $request){
        $folio=$request->input('folio');
        $folioencriptado=$request->input('folioencriptado');
        $modelo= new m_integrantes();
        $integrantes=$modelo-> m_leerintegrantes($folio);
        

        $foliosintegrante='';
      foreach ($integrantes as $value) {
        $foliosintegrante .='<tr class="table-primary">
                <td class="align-middle">'.$value->nombre1.' '.$value->nombre2.' '.$value->apellido1.' '.$value->apellido2.'</td>
                <td class="align-middle">'.$value->documento.'</td>
                <td class="align-middle">'.$value->edad.'</td>
                <td class="align-middle text-center">'.(($value->jefedelhogar == '1')?'SI':'NO').'</td>
                <td class="align-middle text-center">'.(($value->representante == '1')?'SI':'NO').'</td>
                <td class="align-middle">
               <button class="btn  btn-sm" style="background:#2fa4e7; color:white"  '.(($value->estado == '1' && $value->estado2 == '1')?'':'disabled').' '.(($value->validacion == '0')?'':'disabled').'
                onclick="responderencuesta('.$folio.','.$value->idintegrante.',`'.$folioencriptado.'`,`'.$value->nombre1.' '.$value->nombre2.' '.$value->apellido1.' '.$value->apellido2.'`)">
                    Realizar Encuesta
                  </button></td>
                   <td class="align-middle">
                  <button class="habilitado btn btn-success btn-sm" '.(($value->validacion == '0')?'':'disabled').' onclick="editarintegrantes('.$folio.','.$value->idintegrante.',`'.$folioencriptado.'`)">
                  Editar
                  </button>
                  </td>
                <td style="width:100px !important"><img src="' .(($value->avatar)? asset('avatares/'.$value->avatar. '.png'):(($value->sexo =="13")?asset('avatares/mujer_avatar.png'):asset('avatares/hombre_avatar.png'))) . '" width="100%" alt=""></td>
                  <td class="align-middle align-center" style="text-align: center !important;">
                  <button class="btn btn-danger btn-sm" onclick="eliminarintegrantes('.$folio.','.$value->idintegrante.')">
                    x
                  </button></td>
                </tr>
            
            ';
            }
            return response()->json(["foliosintegrante"=>$foliosintegrante]);
    }

    public function fc_eliminarintegrantes(Request $request){
      $integrantehogar=  DB::table('t1_integranteshogar')
      ->where('folio', $request->input('folio'))
      ->where('idintegrante', $request->input('idintegrante'))
      ->where('representante', '!=', 1)
      ->where('idintegrante', '!=', $request->input('folio').'01')
      ->delete();
      if($integrantehogar ==1){
        DB::table('t1_integrantesidentitario')
            ->where('folio', $request->input('folio'))
            ->where('idintegrante', $request->input('idintegrante'))
            ->delete();
            DB::table('t1_integrantesfinanciero')
            ->where('folio', $request->input('folio'))
            ->where('idintegrante', $request->input('idintegrante'))
            ->delete();
            DB::table('t1_integrantesfisicoyemocional')
            ->where('folio', $request->input('folio'))
            ->where('idintegrante', $request->input('idintegrante'))
            ->delete();
            DB::table('t1_integrantesintelectual')
            ->where('folio', $request->input('folio'))
            ->where('idintegrante', $request->input('idintegrante'))
            ->delete();
            DB::table('t1_integranteslegal')
            ->where('folio', $request->input('folio'))
            ->where('idintegrante', $request->input('idintegrante'))
            ->delete();
      }

  return response()->json(['message' =>  $integrantehogar]);
  }

  public function fc_finalizarintegrantes(Request $request){
      $now = Carbon::now();
      $folio = $request->input('folio');
      $linea = 100;  // poner linea 
      $paso = 10020;  // poner paso
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
