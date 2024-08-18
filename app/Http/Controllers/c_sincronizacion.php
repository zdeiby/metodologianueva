<?php

namespace App\Http\Controllers;
use App\Models\m_index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class c_sincronizacion extends Controller
{
    public function fc_sincronizacion(Request $request){
        $existspph = DB::table('dbmetodologia.t1_principalhogar')->exists();
        return view('v_sincronizacion',["existspph"=>$existspph]);
        
    }

//sincro Abajo 

public function fc_t1_principalhogard(){
    $pdoccogestor = session('cedula');
    $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_sincronizacionhogard?pdoccogestor=' . $pdoccogestor;    
     // Realizar la solicitud GET usando file_get_contents
     $response = file_get_contents($url);

     // Decodificar el JSON si es necesario
     $data = json_decode($response, true);

     foreach ($data as $item) {
        // Extraer el folio del objeto
        $folio = $item['folio']; // Asegúrate de que 'id' sea el nombre correcto del campo en tu JSON

        // Remover el folio del array para evitar duplicados en el updateOrInsert
        $dataToUpdate = $item;
        unset($dataToUpdate['folio']); // Si 'id' es el identificador principal y no quieres que sea actualizado

        // Usar updateOrInsert para insertar o actualizar según el caso
        DB::table('t1_principalhogar')->updateOrInsert(
            ['folio' => $folio],
            $dataToUpdate
        );
    }

    return response()->json($data);
}


public function fc_t1_hogarcondicionesalimentariasd(){  $pdoccogestor = session('cedula');  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_hogarcondicionesalimentariasd?pdoccogestor=' . $pdoccogestor;       $response = file_get_contents($url);   $data = json_decode($response, true); foreach ($data as $item) { $folio = $item['folio'];$dataToUpdate = $item; unset($dataToUpdate['folio']); DB::table('t1_hogarcondicionesalimentarias')->updateOrInsert(['folio' => $folio], $dataToUpdate);  } return response()->json($data); }
public function fc_t1_hogarcondicioneshabitabilidadd(){  $pdoccogestor = session('cedula');  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_hogarcondicioneshabitabilidadd?pdoccogestor=' . $pdoccogestor;       $response = file_get_contents($url);   $data = json_decode($response, true); foreach ($data as $item) { $folio = $item['folio'];$dataToUpdate = $item; unset($dataToUpdate['folio']); DB::table('t1_hogarcondicioneshabitabilidad')->updateOrInsert(['folio' => $folio], $dataToUpdate);  } return response()->json($data);}
public function fc_t1_hogarconformacionfamiliard(){  $pdoccogestor = session('cedula');  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_hogarconformacionfamiliard?pdoccogestor=' . $pdoccogestor;       $response = file_get_contents($url);   $data = json_decode($response, true); foreach ($data as $item) { $folio = $item['folio'];$dataToUpdate = $item; unset($dataToUpdate['folio']); DB::table('t1_hogarconformacionfamiliar')->updateOrInsert(['folio' => $folio], $dataToUpdate);  } return response()->json($data);}
public function fc_t1_hogardatoseconomicosd(){  $pdoccogestor = session('cedula');  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_hogardatoseconomicosd?pdoccogestor=' . $pdoccogestor;       $response = file_get_contents($url);   $data = json_decode($response, true); foreach ($data as $item) { $folio = $item['folio'];$dataToUpdate = $item; unset($dataToUpdate['folio']); DB::table('t1_hogardatoseconomicos')->updateOrInsert(['folio' => $folio], $dataToUpdate);  } return response()->json($data);}
public function fc_t1_hogardatosgeograficosd(){  $pdoccogestor = session('cedula');  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_hogardatosgeograficosd?pdoccogestor=' . $pdoccogestor;       $response = file_get_contents($url);   $data = json_decode($response, true); foreach ($data as $item) { $folio = $item['folio'];$dataToUpdate = $item; unset($dataToUpdate['folio']); DB::table('t1_hogardatosgeograficos')->updateOrInsert(['folio' => $folio], $dataToUpdate);  } return response()->json($data);}
public function fc_t1_hogarentornofamiliard(){  $pdoccogestor = session('cedula');  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_hogarentornofamiliard?pdoccogestor=' . $pdoccogestor;       $response = file_get_contents($url);   $data = json_decode($response, true); foreach ($data as $item) { $folio = $item['folio'];$dataToUpdate = $item; unset($dataToUpdate['folio']); DB::table('t1_hogarentornofamiliar')->updateOrInsert(['folio' => $folio], $dataToUpdate);  } return response()->json($data);}
public function fc_t1_integrantesfinancierod(){  $pdoccogestor = session('cedula');  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_integrantesfinancierod?pdoccogestor=' . $pdoccogestor;       $response = file_get_contents($url);   $data = json_decode($response, true); foreach ($data as $item) { $folio = $item['folio']; $idintegrante = $item['idintegrante']; $dataToUpdate = $item; unset($dataToUpdate['folio']); unset($dataToUpdate['idintegrante']); DB::table('t1_integrantesfinanciero')->updateOrInsert(['folio' => $folio, 'idintegrante' => $idintegrante], $dataToUpdate);  } return response()->json($data);}

public function fc_t1_integrantesfisicoyemocionald(){ $pdoccogestor = session('cedula'); $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_integrantesfisicoyemocionald?pdoccogestor=' . $pdoccogestor; $response = file_get_contents($url); $data = json_decode($response, true); foreach ($data as $item) { $folio = $item['folio']; $idintegrante = $item['idintegrante']; $dataToUpdate = $item; unset($dataToUpdate['folio']); unset($dataToUpdate['idintegrante']); DB::table('t1_integrantesfisicoyemocional')->updateOrInsert(['folio' => $folio, 'idintegrante' => $idintegrante], $dataToUpdate); } return response()->json($data); }
public function fc_t1_integranteshogard(){ $pdoccogestor = session('cedula'); $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_integranteshogard?pdoccogestor=' . $pdoccogestor; $response = file_get_contents($url); $data = json_decode($response, true); foreach ($data as $item) { $folio = $item['folio']; $idintegrante = $item['idintegrante']; $dataToUpdate = $item; unset($dataToUpdate['folio']); unset($dataToUpdate['idintegrante']); DB::table('t1_integranteshogar')->updateOrInsert(['folio' => $folio, 'idintegrante' => $idintegrante], $dataToUpdate); } return response()->json($data); }
public function fc_t1_integrantesidentitariod(){ $pdoccogestor = session('cedula'); $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_integrantesidentitariod?pdoccogestor=' . $pdoccogestor; $response = file_get_contents($url); $data = json_decode($response, true); foreach ($data as $item) { $folio = $item['folio']; $idintegrante = $item['idintegrante']; $dataToUpdate = $item; unset($dataToUpdate['folio']); unset($dataToUpdate['idintegrante']); DB::table('t1_integrantesidentitario')->updateOrInsert(['folio' => $folio, 'idintegrante' => $idintegrante], $dataToUpdate); } return response()->json($data); }
public function fc_t1_integrantesintelectuald(){ $pdoccogestor = session('cedula'); $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_integrantesintelectuald?pdoccogestor=' . $pdoccogestor; $response = file_get_contents($url); $data = json_decode($response, true); foreach ($data as $item) { $folio = $item['folio']; $idintegrante = $item['idintegrante']; $dataToUpdate = $item; unset($dataToUpdate['folio']); unset($dataToUpdate['idintegrante']); DB::table('t1_integrantesintelectual')->updateOrInsert(['folio' => $folio, 'idintegrante' => $idintegrante], $dataToUpdate); } return response()->json($data); }
public function fc_t1_integranteslegald(){ $pdoccogestor = session('cedula'); $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_integranteslegald?pdoccogestor=' . $pdoccogestor; $response = file_get_contents($url); $data = json_decode($response, true); foreach ($data as $item) { $folio = $item['folio']; $idintegrante = $item['idintegrante']; $dataToUpdate = $item; unset($dataToUpdate['folio']); unset($dataToUpdate['idintegrante']); DB::table('t1_integranteslegal')->updateOrInsert(['folio' => $folio, 'idintegrante' => $idintegrante], $dataToUpdate); } return response()->json($data); }



}














