<?php

namespace App\Http\Controllers;
use App\Models\m_index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

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



public function fc_sincroprivacionesd(Request $request) {
    $tabla = $request->input('tabla');
    $pdoccogestor = session('cedula');
    $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_sincroprivacionesd?pdoccogestor='.$pdoccogestor.'&tabla='.urlencode($tabla); 
     
    // Realizar la solicitud GET usando file_get_contents
    $response = file_get_contents($url);

    // Decodificar el JSON
    $data = json_decode($response, true);

    foreach ($data as $item) {
        // Extraer el folio del objeto
        $folio = $item['folio']; // Asegúrate de que 'folio' sea el nombre correcto del campo en tu JSON

        // Extraer el idintegrante si existe
        $idIntegrante = isset($item['idintegrante']) ? $item['idintegrante'] : null;
        $paso =         isset($item['paso'])         ? $item['paso'] : null;
        $linea =        isset($item['linea'])        ? $item['linea'] : null;

        // Remover el folio y idintegrante del array para evitar duplicados en el updateOrInsert
        $dataToUpdate = $item;
        unset($dataToUpdate['folio']);
        if ($idIntegrante !== null) {
            unset($dataToUpdate['idintegrante']);
        }

        if ($paso !== null) {
            unset($dataToUpdate['paso']);
        }

        if ($linea !== null) {
            unset($dataToUpdate['linea']);
        }


        // Usar updateOrInsert para insertar o actualizar según el caso
        $condition = ['folio' => $folio];
        if ($idIntegrante !== null) {
            $condition['idintegrante'] = $idIntegrante;
        }

        if ($paso !== null) {
            $condition['paso'] = $paso;
        }

        if ($linea !== null) {
            $condition['linea'] = $linea;
        }


        DB::table($tabla)->updateOrInsert(
            $condition,
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


// FIN SINCRO ABAJO 

// INICIO SINCRO ARRIBA

public function fc_t1_principalhogar()
{
     // Obtener los datos desde la tabla t1_principalhogar donde sincro = 0
     $datos = DB::table('t1_principalhogar')
     ->where('sincro', 0) // Filtra los registros donde sincro es 0
     ->get()
     ->toArray(); // Convertir la colección a un array

 // URL de la API que va a recibir los datos
 $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_principalhogar';

 // Enviar la solicitud POST a la API con los datos obtenidos
 $response = Http::post($url, $datos);

 // Manejar la respuesta de la API
 if ($response->successful()) {
    DB::table('t1_principalhogar')
    ->where('sincro', 0)
    ->update(['sincro' => 1]);
     return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]);
 } else {
     return response()->json(['error' => 'Error al enviar datos a la API'], $response->status());
 }
}





public function fc_sincroprivaciones(Request $request)
{
    $tabla = $request->input('tabla');
     // Obtener los datos desde la tabla t1_principalhogar donde sincro = 0
     $datos = DB::table($tabla)
     ->where('sincro', 0) // Filtra los registros donde sincro es 0
     ->get()
     ->toArray(); // Convertir la colección a un array

 // URL de la API que va a recibir los datos
 $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_sincroprivaciones';

 // Enviar la solicitud POST a la API con los datos obtenidos
 $datos_con_tabla = [
    'tabla' => $tabla, // Incluye el nombre de la tabla
    'datos' => $datos  // Los datos obtenidos de la base de datos
];
 $response = Http::post($url, $datos_con_tabla);

 // Manejar la respuesta de la API
 if ($response->successful()) {
    DB::table($tabla)
    ->where('sincro', 0)
    ->update(['sincro' => 1]);
     return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]);
 } else {
     return response()->json(['error' => 'Error al enviar datos a la API'], $response->status());
 }
}


public function fc_t1_hogarcondicionesalimentarias(){ $datos = DB::table('t1_hogarcondicionesalimentarias')->where('sincro', 0) ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_hogarcondicionesalimentarias'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_hogarcondicionesalimentarias') ->where('sincro', 0) ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_hogarcondicioneshabitabilidad(){ $datos = DB::table('t1_hogarcondicioneshabitabilidad')->where('sincro', 0) ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_hogarcondicioneshabitabilidad'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_hogarcondicioneshabitabilidad') ->where('sincro', 0) ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_hogarconformacionfamiliar(){ $datos = DB::table('t1_hogarconformacionfamiliar')->where('sincro', 0) ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_hogarconformacionfamiliar'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_hogarconformacionfamiliar') ->where('sincro', 0) ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_hogardatoseconomicos(){ $datos = DB::table('t1_hogardatoseconomicos')->where('sincro', 0) ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_hogardatoseconomicos'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_hogardatoseconomicos') ->where('sincro', 0) ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_hogardatosgeograficos(){ $datos = DB::table('t1_hogardatosgeograficos')->where('sincro', 0) ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_hogardatosgeograficos'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_hogardatosgeograficos') ->where('sincro', 0) ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_hogarentornofamiliar(){ $datos = DB::table('t1_hogarentornofamiliar')->where('sincro', 0) ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_hogarentornofamiliar'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_hogarentornofamiliar') ->where('sincro', 0) ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_integrantesfinanciero(){ $datos = DB::table('t1_integrantesfinanciero')->where('sincro', 0) ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_integrantesfinanciero'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_integrantesfinanciero') ->where('sincro', 0) ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_integrantesfisicoyemocional(){ $datos = DB::table('t1_integrantesfisicoyemocional')->where('sincro', 0) ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_integrantesfisicoyemocional'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_integrantesfisicoyemocional') ->where('sincro', 0) ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_integranteshogar(){ $datos = DB::table('t1_integranteshogar')->where('sincro', 0) ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_integranteshogar'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_integranteshogar') ->where('sincro', 0) ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_integrantesidentitario(){ $datos = DB::table('t1_integrantesidentitario')->where('sincro', 0) ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_integrantesidentitario'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_integrantesidentitario') ->where('sincro', 0) ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_integrantesintelectual(){ $datos = DB::table('t1_integrantesintelectual')->where('sincro', 0) ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_integrantesintelectual'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_integrantesintelectual') ->where('sincro', 0) ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_integranteslegal(){ $datos = DB::table('t1_integranteslegal')->where('sincro', 0) ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_integranteslegal'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_integranteslegal') ->where('sincro', 0) ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }

// FIN SINCRO ARRIBA


}














