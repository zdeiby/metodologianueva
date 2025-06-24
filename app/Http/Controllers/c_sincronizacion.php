<?php

namespace App\Http\Controllers;
use App\Models\m_index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Http\Complementoscontrollers\Sql;

class c_sincronizacion extends Controller
{
    use Sql; 



    public function fc_sincronizacion(Request $request){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
        $existspph = DB::table('t1_principalhogar')->exists();
        
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
     $this->truncateTable('t1_principalhogar');
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
    $this->truncateTable($tabla);
    // Realizar la solicitud GET usando file_get_contents
    $response = file_get_contents($url);

    // Decodificar el JSON
    $data = json_decode($response, true);

    foreach ($data as $item) {
        // Extraer el folio del objeto
        $folio = $item['folio']; // Asegúrate de que 'folio' sea el nombre correcto del campo en tu JSON

        // Extraer las llaves primarias
        $idIntegrante = isset($item['idintegrante']) ? $item['idintegrante'] : null;
        $paso =         isset($item['paso'])         ? $item['paso'] : null;
        $linea =        isset($item['linea'])        ? $item['linea'] : null;
        $momentoconciente =        isset($item['momentoconciente'])        ? $item['momentoconciente'] : null;
        $categoria =        isset($item['categoria'])        ? $item['categoria'] : null;
        $numerocompromiso =        isset($item['numerocompromiso'])        ? $item['numerocompromiso'] : null;
        $created_at =        isset($item['created_at'])        ? $item['created_at'] : null;
        $idoportunidad =        isset($item['idoportunidad'])        ? $item['idoportunidad'] : null;
        $numero_compromiso =        isset($item['numero_compromiso'])        ? $item['numero_compromiso'] : null;
        $estrategia_implementa_reducir_estres =        isset($item['estrategia_implementa_reducir_estres'])        ? $item['estrategia_implementa_reducir_estres'] : null;
 
        
        // Remover el folio y idintegrante del array para evitar duplicados en el updateOrInsert
        $dataToUpdate = $item;
        unset($dataToUpdate['folio']);
        if ($idIntegrante !== null) {
            unset($dataToUpdate['idintegrante']);
        }
        //remueve las primarias para insertar
        if ($paso !== null) {
            unset($dataToUpdate['paso']);
        }

        if ($linea !== null) {
            unset($dataToUpdate['linea']);
        }

        if ($momentoconciente !== null) {
            unset($dataToUpdate['momentoconciente']);
        }

        if ($categoria !== null) {
            unset($dataToUpdate['categoria']);
        }

        if ($numerocompromiso !== null) {
            unset($dataToUpdate['numerocompromiso']);
        }

        if ($idoportunidad !== null) {
            unset($dataToUpdate['idoportunidad']);
        }

        if ($numero_compromiso !== null) {
            unset($dataToUpdate['numero_compromiso']);
        }

        if ($estrategia_implementa_reducir_estres !== null) {
            unset($dataToUpdate['estrategia_implementa_reducir_estres']);
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
        if ($momentoconciente !== null) {
            $condition['momentoconciente'] = $momentoconciente;
        }

        if ($categoria !== null) {
            $condition['categoria'] = $categoria;
        }
        if ($numerocompromiso !== null) {
            $condition['numerocompromiso'] = $numerocompromiso;
        }

        if ($numero_compromiso !== null) {
            $condition['numero_compromiso'] = $numero_compromiso;
        }

        if ($estrategia_implementa_reducir_estres !== null) {
            $condition['estrategia_implementa_reducir_estres'] = $estrategia_implementa_reducir_estres;
        }


        

        if($tabla == 't3_oportunidad_integranteshogar_historico'){
            $condition['created_at'] = $created_at;
            unset($dataToUpdate['created_at']);
 
        }

        if ($idoportunidad !== null) {
            $condition['idoportunidad'] = $idoportunidad;
        }

        if($tabla == 't1_oportunidad_integrantes'){
            unset($condition['linea']);
            $dataToUpdate['linea']= $linea;
        }
        if($tabla == 't1_oportunidad_hogares'){
            unset($condition['linea']);
            $dataToUpdate['linea']= $linea;
            unset($condition['idintegrante']);
            $dataToUpdate['idintegrante']= $idIntegrante;
        }
        

        if (isset($dataToUpdate['url_firma'])) {
            // Convertir Base64 a binario si es necesario
            $dataToUpdate['url_firma'] = base64_decode(
                preg_replace('/^data:image\/\w+;base64,/', '', $dataToUpdate['url_firma'])
            );
        }

       // dd( $condition);
        
        DB::table($tabla)->updateOrInsert(
            $condition,
            $dataToUpdate
        );
    }

    return response()->json($data);
}



// public function fc_sincroprivacionesd(Request $request) {
//     $tabla = $request->input('tabla');
//     $pdoccogestor = session('cedula');
//     $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_sincroprivacionesd?pdoccogestor='.$pdoccogestor.'&tabla='.urlencode($tabla); 
//     $this->truncateTable($tabla);
//     // Realizar la solicitud GET usando file_get_contents
//     $response = file_get_contents($url);

//     // Decodificar el JSON
//     $data = json_decode($response, true);

//     foreach ($data as $item) {
//         // Extraer el folio del objeto
//         $folio = $item['folio']; // Asegúrate de que 'folio' sea el nombre correcto del campo en tu JSON

//         // Extraer el idintegrante si existe
//         $idIntegrante = isset($item['idintegrante']) ? $item['idintegrante'] : null;
//         $paso =         isset($item['paso'])         ? $item['paso'] : null;
//         $linea =        isset($item['linea'])        ? $item['linea'] : null;
//         $momentoconciente =        isset($item['momentoconciente'])        ? $item['momentoconciente'] : null;
//         $categoria =        isset($item['categoria'])        ? $item['categoria'] : null;
//         $numerocompromiso =        isset($item['numerocompromiso'])        ? $item['numerocompromiso'] : null;

        
        
//         // Remover el folio y idintegrante del array para evitar duplicados en el updateOrInsert
//         $dataToUpdate = $item;
//         unset($dataToUpdate['folio']);
//         if ($idIntegrante !== null) {
//             unset($dataToUpdate['idintegrante']);
//         }

//         if ($paso !== null) {
//             unset($dataToUpdate['paso']);
//         }

//         if ($linea !== null) {
//             unset($dataToUpdate['linea']);
//         }

//         if ($momentoconciente !== null) {
//             unset($dataToUpdate['momentoconciente']);
//         }

//         if ($categoria !== null) {
//             unset($dataToUpdate['categoria']);
//         }

//         if ($numerocompromiso !== null) {
//             unset($dataToUpdate['numerocompromiso']);
//         }


//         // Usar updateOrInsert para insertar o actualizar según el caso
//         $condition = ['folio' => $folio];
//         if ($idIntegrante !== null) {
//             $condition['idintegrante'] = $idIntegrante;
//         }

//         if ($paso !== null) {
//             $condition['paso'] = $paso;
//         }

//         if ($linea !== null) {
//             $condition['linea'] = $linea;
//         }
//         if ($momentoconciente !== null) {
//             $condition['momentoconciente'] = $momentoconciente;
//         }

//         if ($categoria !== null) {
//             $condition['categoria'] = $categoria;
//         }
//         if ($numerocompromiso !== null) {
//             $condition['numerocompromiso'] = $numerocompromiso;
//         }

//         if (isset($dataToUpdate['url_firma'])) {
//             // Convertir Base64 a binario si es necesario
//             $dataToUpdate['url_firma'] = base64_decode(
//                 preg_replace('/^data:image\/\w+;base64,/', '', $dataToUpdate['url_firma'])
//             );
//         }
        
//         DB::table($tabla)->updateOrInsert(
//             $condition,
//             $dataToUpdate
//         );
//     }

//     return response()->json($data);
// }


public function fc_t1_hogarcondicionesalimentariasd(){  $pdoccogestor = session('cedula');  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_hogarcondicionesalimentariasd?pdoccogestor=' . $pdoccogestor;       $response = file_get_contents($url);   $data = json_decode($response, true);$this->truncateTable('t1_hogarcondicionesalimentarias'); foreach ($data as $item) { $folio = $item['folio'];$dataToUpdate = $item; unset($dataToUpdate['folio']);  DB::table('t1_hogarcondicionesalimentarias')->updateOrInsert(['folio' => $folio], $dataToUpdate);  } return response()->json($data); }
public function fc_t1_hogarcondicioneshabitabilidadd(){  $pdoccogestor = session('cedula');  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_hogarcondicioneshabitabilidadd?pdoccogestor=' . $pdoccogestor;       $response = file_get_contents($url);   $data = json_decode($response, true);$this->truncateTable('t1_hogarcondicioneshabitabilidad'); foreach ($data as $item) { $folio = $item['folio'];$dataToUpdate = $item; unset($dataToUpdate['folio']);  DB::table('t1_hogarcondicioneshabitabilidad')->updateOrInsert(['folio' => $folio], $dataToUpdate);  } return response()->json($data);}
public function fc_t1_hogarconformacionfamiliard(){  $pdoccogestor = session('cedula');  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_hogarconformacionfamiliard?pdoccogestor=' . $pdoccogestor;       $response = file_get_contents($url);   $data = json_decode($response, true);$this->truncateTable('t1_hogarconformacionfamiliar'); foreach ($data as $item) { $folio = $item['folio'];$dataToUpdate = $item; unset($dataToUpdate['folio']);  DB::table('t1_hogarconformacionfamiliar')->updateOrInsert(['folio' => $folio], $dataToUpdate);  } return response()->json($data);}
public function fc_t1_hogardatoseconomicosd(){  $pdoccogestor = session('cedula');  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_hogardatoseconomicosd?pdoccogestor=' . $pdoccogestor;       $response = file_get_contents($url);   $data = json_decode($response, true);$this->truncateTable('t1_hogardatoseconomicos');  foreach ($data as $item) { $folio = $item['folio'];$dataToUpdate = $item; unset($dataToUpdate['folio']); DB::table('t1_hogardatoseconomicos')->updateOrInsert(['folio' => $folio], $dataToUpdate);  } return response()->json($data);}
public function fc_t1_hogardatosgeograficosd(){  $pdoccogestor = session('cedula');  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_hogardatosgeograficosd?pdoccogestor=' . $pdoccogestor;       $response = file_get_contents($url);   $data = json_decode($response, true);$this->truncateTable('t1_hogardatosgeograficos'); foreach ($data as $item) { $folio = $item['folio'];$dataToUpdate = $item; unset($dataToUpdate['folio']);  DB::table('t1_hogardatosgeograficos')->updateOrInsert(['folio' => $folio], $dataToUpdate);  } return response()->json($data);}
public function fc_t1_hogarentornofamiliard(){  $pdoccogestor = session('cedula');  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_hogarentornofamiliard?pdoccogestor=' . $pdoccogestor;       $response = file_get_contents($url);   $data = json_decode($response, true);$this->truncateTable('t1_hogarentornofamiliar'); foreach ($data as $item) { $folio = $item['folio'];$dataToUpdate = $item; unset($dataToUpdate['folio']);  DB::table('t1_hogarentornofamiliar')->updateOrInsert(['folio' => $folio], $dataToUpdate);  } return response()->json($data);}
public function fc_t1_integrantesfinancierod(){  $pdoccogestor = session('cedula');  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_integrantesfinancierod?pdoccogestor=' . $pdoccogestor;       $response = file_get_contents($url);   $data = json_decode($response, true);$this->truncateTable('t1_integrantesfinanciero');  foreach ($data as $item) { $folio = $item['folio']; $idintegrante = $item['idintegrante']; $dataToUpdate = $item; unset($dataToUpdate['folio']); unset($dataToUpdate['idintegrante']); DB::table('t1_integrantesfinanciero')->updateOrInsert(['folio' => $folio, 'idintegrante' => $idintegrante], $dataToUpdate);  } return response()->json($data);}

public function fc_t1_integrantesfisicoyemocionald(){ $pdoccogestor = session('cedula'); $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_integrantesfisicoyemocionald?pdoccogestor=' . $pdoccogestor; $response = file_get_contents($url); $data = json_decode($response, true);$this->truncateTable('t1_integrantesfisicoyemocional'); foreach ($data as $item) { $folio = $item['folio']; $idintegrante = $item['idintegrante']; $dataToUpdate = $item; unset($dataToUpdate['folio']); unset($dataToUpdate['idintegrante']);  DB::table('t1_integrantesfisicoyemocional')->updateOrInsert(['folio' => $folio, 'idintegrante' => $idintegrante], $dataToUpdate); } return response()->json($data); }
public function fc_t1_integranteshogard(){ $pdoccogestor = session('cedula'); $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_integranteshogard?pdoccogestor=' . $pdoccogestor; $response = file_get_contents($url); $data = json_decode($response, true);$this->truncateTable('t1_integranteshogar');  foreach ($data as $item) { $folio = $item['folio']; $idintegrante = $item['idintegrante']; $dataToUpdate = $item; unset($dataToUpdate['folio']); unset($dataToUpdate['idintegrante']); DB::table('t1_integranteshogar')->updateOrInsert(['folio' => $folio, 'idintegrante' => $idintegrante], $dataToUpdate); } return response()->json($data); }
public function fc_t1_integrantesidentitariod(){ $pdoccogestor = session('cedula'); $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_integrantesidentitariod?pdoccogestor=' . $pdoccogestor; $response = file_get_contents($url); $data = json_decode($response, true); $this->truncateTable('t1_integrantesidentitario'); foreach ($data as $item) { $folio = $item['folio']; $idintegrante = $item['idintegrante']; $dataToUpdate = $item; unset($dataToUpdate['folio']); unset($dataToUpdate['idintegrante']); DB::table('t1_integrantesidentitario')->updateOrInsert(['folio' => $folio, 'idintegrante' => $idintegrante], $dataToUpdate); } return response()->json($data); }
public function fc_t1_integrantesintelectuald(){ $pdoccogestor = session('cedula'); $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_integrantesintelectuald?pdoccogestor=' . $pdoccogestor; $response = file_get_contents($url); $data = json_decode($response, true);$this->truncateTable('t1_integrantesintelectual'); foreach ($data as $item) { $folio = $item['folio']; $idintegrante = $item['idintegrante']; $dataToUpdate = $item; unset($dataToUpdate['folio']); unset($dataToUpdate['idintegrante']);  DB::table('t1_integrantesintelectual')->updateOrInsert(['folio' => $folio, 'idintegrante' => $idintegrante], $dataToUpdate); } return response()->json($data); }
public function fc_t1_integranteslegald(){ $pdoccogestor = session('cedula'); $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_t1_integranteslegald?pdoccogestor=' . $pdoccogestor; $response = file_get_contents($url); $data = json_decode($response, true); $this->truncateTable('t1_integranteslegal'); foreach ($data as $item) { $folio = $item['folio']; $idintegrante = $item['idintegrante']; $dataToUpdate = $item; unset($dataToUpdate['folio']); unset($dataToUpdate['idintegrante']); DB::table('t1_integranteslegal')->updateOrInsert(['folio' => $folio, 'idintegrante' => $idintegrante], $dataToUpdate); } return response()->json($data); }


// FIN SINCRO ABAJO 

// INICIO SINCRO ARRIBA

public function fc_t1_principalhogar()
{
     // Obtener los datos desde la tabla t1_principalhogar donde sincro = 0
     $datos = DB::table('t1_principalhogar')
     //->where('sincro', 0)
      // Filtra los registros donde sincro es 0
     ->get()
     ->toArray(); // Convertir la colección a un array

 // URL de la API que va a recibir los datos
 $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_principalhogar';

 // Enviar la solicitud POST a la API con los datos obtenidos
 $response = Http::post($url, $datos);

 // Manejar la respuesta de la API
 if ($response->successful()) {
    DB::table('t1_principalhogar')
    //->where('sincro', 0)
    
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
    //  $datos = DB::table($tabla)
    //  //->where('sincro', 0)
    //   // Filtra los registros donde sincro es 0
    //  ->get()
    //  ->toArray(); // Convertir la colección a un array

    $datos = DB::table($tabla)
    // ->where('sincro', 0) // Si necesitas filtrar registros específicos
    ->get()
    ->map(function ($item) {
        // Codificar url_firma si existe
        if (!empty($item->url_firma)) {
            $item->url_firma = 'data:image/jpeg;base64,' . base64_encode($item->url_firma);
        }
        return (array) $item; // Convertir a un array asociativo
    })
    ->toArray();


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
       //->where('sincro', 0)
       
       ->update(['sincro' => 1]);
        return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]);
    } else {
        return response()->json(['error' => 'Error al enviar datos a la API'], $response->status());
    }
}


public function fc_t1_hogarcondicionesalimentarias(){ $datos = DB::table('t1_hogarcondicionesalimentarias')//->where('sincro', 0)
     ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_hogarcondicionesalimentarias'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_hogarcondicionesalimentarias') //->where('sincro', 0)
     ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_hogarcondicioneshabitabilidad(){ $datos = DB::table('t1_hogarcondicioneshabitabilidad')//->where('sincro', 0)
     ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_hogarcondicioneshabitabilidad'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_hogarcondicioneshabitabilidad') //->where('sincro', 0)
     ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_hogarconformacionfamiliar(){ $datos = DB::table('t1_hogarconformacionfamiliar')//->where('sincro', 0)
     ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_hogarconformacionfamiliar'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_hogarconformacionfamiliar') //->where('sincro', 0)
     ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_hogardatoseconomicos(){ $datos = DB::table('t1_hogardatoseconomicos')//->where('sincro', 0)
     ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_hogardatoseconomicos'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_hogardatoseconomicos') //->where('sincro', 0)
     ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_hogardatosgeograficos(){ $datos = DB::table('t1_hogardatosgeograficos')//->where('sincro', 0)
     ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_hogardatosgeograficos'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_hogardatosgeograficos') //->where('sincro', 0)
     ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_hogarentornofamiliar(){ $datos = DB::table('t1_hogarentornofamiliar')//->where('sincro', 0)
     ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_hogarentornofamiliar'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_hogarentornofamiliar') //->where('sincro', 0)
     ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_integrantesfinanciero(){ $datos = DB::table('t1_integrantesfinanciero')//->where('sincro', 0)
     ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_integrantesfinanciero'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_integrantesfinanciero') //->where('sincro', 0)
     ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_integrantesfisicoyemocional(){ $datos = DB::table('t1_integrantesfisicoyemocional')//->where('sincro', 0)
     ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_integrantesfisicoyemocional'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_integrantesfisicoyemocional') //->where('sincro', 0)
     ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_integranteshogar(){ $datos = DB::table('t1_integranteshogar')//->where('sincro', 0)
     ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_integranteshogar'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_integranteshogar') //->where('sincro', 0)
     ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_integrantesidentitario(){ $datos = DB::table('t1_integrantesidentitario')//->where('sincro', 0)
     ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_integrantesidentitario'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_integrantesidentitario') //->where('sincro', 0)
     ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_integrantesintelectual(){ $datos = DB::table('t1_integrantesintelectual')//->where('sincro', 0)
     ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_integrantesintelectual'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_integrantesintelectual') //->where('sincro', 0)
     ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }
public function fc_t1_integranteslegal(){ $datos = DB::table('t1_integranteslegal')//->where('sincro', 0)
     ->get()->toArray();  $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_t1_integranteslegal'; $response = Http::post($url, $datos); if ($response->successful()) {  DB::table('t1_integranteslegal') //->where('sincro', 0)
     ->update(['sincro' => 1]); return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'], $response->status()); } }

// public function fc_reasignacionarriba(){
//     $datos = DB::table('t1_principalhogar')->select('folio', 'usuario')->where('folioactivo', 1)->get()->toArray(); 
//     // $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_reasignacionarriba'; 
//     $url = 'https://unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_reasignacionarribanew';
//     $response = Http::post($url, $datos);
//      if ($response->successful()) {  
//         return response()->json(['message' => 'Datos enviados con éxito', 'data' =>$response]);
//      } else {  
//         return response()->json(['error' => 'Error al enviar datos a la API']); 
//     } }



    public function fc_reasignacionarriba() {
        $datos = DB::table('t1_principalhogar')->select('folio', 'usuario')
                   ->where('folioactivo', 1)
                   ->get()
                   ->toArray(); // Asegúrate de que esto realmente está devolviendo datos

                   //dd($datos);
    
                   $url = 'https://unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_reasignacionarribanew';

    
        // Usar Http para enviar los datos como JSON
        $response = Http::post($url, [
            'json' => $datos
        ]);
    
        // Verificar si la respuesta fue exitosa
        if ($response->successful()) {
            return response()->json([
                'message' => 'Datos enviados con éxito', 
                'data' => $response->json()
            ]);
        } else {
            return response()->json([
                'error' => 'Error al enviar datos a la API',
                'status' => $response->status(),
                'body' => $response->body()
            ]);
        }
    }
    


    public function fc_reasignacionabajo() {
        $datos = DB::table('t_usuario')->select('documento')
                   ->get()
                   ->toArray(); // Asegúrate de que esto realmente está devolviendo datos

                   //dd($datos);
    
                   $url = 'https://unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincroarriba/fc_reasignacionabajonew';

    
        // Usar Http para enviar los datos como JSON
        $response = Http::post($url, [
            'json' => $datos
        ]);
    
        // Verificar si la respuesta fue exitosa
        if ($response->successful()) {
            return response()->json([
                'message' => 'Datos enviados con éxito', 
                'data' => $response->json()
            ]);
        } else {
            return response()->json([
                'error' => 'Error al enviar datos a la API',
                'status' => $response->status(),
                'body' => $response->body()
            ]);
        }
    }


// public function fc_reasignacionabajo(){ $datos = session('cedula'); $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_reasignacionabajo'; $response = Http::post($url, $datos); if ($response->successful()) {   return response()->json(['message' => 'Datos enviados con éxito', 'data' => $response->json()]); } else {  return response()->json(['error' => 'Error al enviar datos a la API'] , $response->json()); } }

// public function fc_reasignacionabajo() {
//     // Obtener el primer usuario de la tabla
//     $datos = DB::table('t1_principalhogar')->select('usuario')->first();

//     // Verifica si se obtuvo un usuario
//     if (!$datos) {
//         return response()->json(['error' => 'No se encontró usuario'], 404);
//     }

//     $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_reasignacionabajo';

//     // Convertir el objeto a un array
//     $payload = (array) $datos; // Conversión de stdClass a array

//     // Realizar la solicitud POST
//     $response = Http::post($url, $payload);

//     if ($response->successful()) { 
//          return response()->json(['message' => 'Datos enviados con éxito', 'data' => $datos]);
//          } else {  
//             return response()->json(['error' => 'Error al enviar datos a la API']); 
//         }
// }


public function fc_verificarsihayfoliosnuevos() {
    $pdoccogestor = session('cedula');
    $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_verificarsihayfoliosnuevos?pdoccogestor=' . $pdoccogestor;    
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    // Verificar si la respuesta es válida y contiene el conteo
    if (isset($data[0]['conteo'])) {
        // Total enviado desde el servidor (el conteo)
        $totalRemoto = (int) $data[0]['conteo']; // Aseguramos que es un número
        
        // Consultar el total de registros en la tabla local 't1_principalhogar'
        $totalLocal = DB::table('t1_principalhogar')
                        ->where('folioactivo', 1)
                        ->count();
        
        // Comparar los totales
        if ($totalRemoto == $totalLocal) {
            // Si hay más registros en el servidor remoto
            return 1;
        } if(($totalRemoto != $totalLocal)) {
            
            // Si no hay nuevos registros o son iguales
            return 0;
        }
 
    }
    return 'ok';

    }





/// DESCARGA DE BASE DE DATOS DE OPORTUNIDADES 

public function fc_oportunidadesd(Request $request) {
    $tabla = $request->input('tabla');
    $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_oportunidadesd?tabla='.urlencode($tabla); 
   // $this->truncateTable($tabla);
    // Realizar la solicitud GET usando file_get_contents
    $response = file_get_contents($url);

    // Decodificar el JSON
    $data = json_decode($response, true);
//dd( $data );
foreach ($data as $item) {
    // Define la condición como un array con clave-valor
    $condition = ['id_oportunidad' => $item['id_oportunidad']];

    // Crea una copia de $item y elimina 'id_oportunidad'
    $datos = $item;
    unset($datos['id_oportunidad']);

    // Ejecuta updateOrInsert
    DB::table($tabla)->updateOrInsert(
        $condition, // Condiciones para buscar
        $datos      // Datos a actualizar o insertar
    );
}


    return response()->json($data);
}

/// DESCARGA ALIADOS 

public function fc_aliadosd(Request $request) {
    $tabla = $request->input('tabla');
    $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarribad/fc_aliadosd?tabla='.urlencode($tabla); 
   // $this->truncateTable($tabla);
    // Realizar la solicitud GET usando file_get_contents
    $response = file_get_contents($url);

    // Decodificar el JSON
    $data = json_decode($response, true);
//dd( $data );
foreach ($data as $item) {
    // Define la condición como un array con clave-valor
    $condition = ['nit' => $item['nit']];

    // Crea una copia de $item y elimina 'id_oportunidad'
    $datos = $item;
    unset($datos['nit']);

    // Ejecuta updateOrInsert
    DB::table($tabla)->updateOrInsert(
        $condition, // Condiciones para buscar
        $datos      // Datos a actualizar o insertar
    );
}


    return response()->json($data);
}

public function fc_guardarsincro(Request $request) {

    DB::statement("CALL sp_movimiento_indicador_hogar_cruceinstitucional()");
    DB::statement("CALL sp_movimiento_indicador_integrante_cruceinstitucional()");
   // $tabla='t3_sincronizacion';
    $pdoccogestor = session('cedula');
    $url = 'https://unidadfamiliamedellin.com.co/apimetodologia/index.php/c_sincroarriba/fc_guardarsincro?pdoccogestor='.$pdoccogestor.''; 
    // Realizar la solicitud GET usando file_get_contents
    $response = file_get_contents($url);
    return $response;
    }



    }

















