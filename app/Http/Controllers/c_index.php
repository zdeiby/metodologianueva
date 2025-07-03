<?php

namespace App\Http\Controllers;
use App\Models\m_index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class c_index extends Controller
{
    public function fc_index(Request $request){
        if (!session('nombre')) {
            // Si no existe la sesión 'usuario', redirigir al login
            return redirect()->route('login');
        }
      $modelo= new m_index();
      $pphogar=$modelo->m_leerprincipalhogar();

      
if(session('nombre') !== null){

    // Normalizamos las prioridades a minúsculas y sin espacios
        $hogares = collect($pphogar)->map(function ($hogar) {
            $hogar->prioridad_visita = trim(strtolower($hogar->prioridad_visita ?? ''));
            return $hogar;
        });

        

        // Contamos según el valor de prioridad
        $datos['prioridadAlta'] = $hogares->where('prioridad_visita', 'alta')->count();
        $datos['prioridadMediaAlta'] = $hogares->where('prioridad_visita', 'media alta')->count();
        $datos['prioridadMedia'] = $hogares->where('prioridad_visita', 'media')->count();
        $datos['prioridadBaja'] = $hogares->where('prioridad_visita', 'baja')->count();

//dd($prioridadMediaAlta);
      
    $datos['numerodefolios'] = DB::table('t1_principalhogar')->count();
    $datos['numerodevisitasrealiadas'] = DB::table('t1_visitasrealizadas')->where('estado',1)->count();
    $datos['numerodevisitasabiertas'] = DB::table('t1_visitasrealizadas')->where('estado',0)->count();


    $datos['numerodevisitassinrealizar'] = DB::table('t1_principalhogar')
    ->leftJoin('t1_visitasrealizadas', 't1_principalhogar.folio', '=', 't1_visitasrealizadas.folio')
    ->whereNull('t1_visitasrealizadas.folio') // Solo trae los que no están en t1_visitasrealizadas
    ->count();

    
     // PARA SACAR las visitas por mes del año actual 

     $startDate = Carbon::now()->startOfYear();  // Primer día del año actual
        $endDate = Carbon::now()->endOfYear();      // Último día del año actual
        $meses = [];

        while ($startDate->lte($endDate)) {
            $meses[] = $startDate->locale('es')->translatedFormat('F');   // Obtener nombre del mes en español
            $startDate->addMonth();                 // Ir al mes siguiente
        }

        // 2. Hacer la consulta de visitas para el año actual
        $visitasPorMes = DB::table('t1_visitasrealizadas')
            ->select(DB::raw("DATE_FORMAT(finvisita, '%Y-%m') as mes, COUNT(*) as total_visitas"))
            ->whereYear('finvisita', Carbon::now()->year)  // Filtrar por el año actual
            ->groupBy('mes')
            ->orderBy('mes')
            ->get();

        // 3. Combinar los meses con los resultados, asignando 0 a los que no tengan visitas
        $datos['numerodevisitaspormes'] =    $resultadoFinal = collect($meses)->map(function($mes, $index) use ($visitasPorMes) {
            // Obtener el mes en formato 'YYYY-MM' para comparar
            $mesComparacion = Carbon::now()->startOfYear()->addMonths($index)->format('Y-m');
            $visita = $visitasPorMes->firstWhere('mes', $mesComparacion);  // Buscar el mes en los resultados de visitas
            return [
                'mes' => ucfirst($mes),  // Poner la primera letra en mayúscula
                'total_visitas' => $visita ? $visita->total_visitas : 0,  // Asignar 0 si no hay visitas
            ];
        });


        // $indicador_bse_3='';
        // foreach ($t1_indicador_bse_3 as $indicador) {
        //     $indicador_bse_3=$indicador->codigoindicadorDA;
        // }
      
        return view('v_index',$datos);
        }else{
            return redirect()->route('login');
        }
        
    }


}
