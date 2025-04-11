<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Hashids\Hashids;

class VisitaT1Middleware
{
    public function handle($request, Closure $next)
    {
        $rutasT1 = [
            'momentoconcientet1refuerzo1',
            'bienestarenfamiliat1refuerzo1',
            'accionmovilizadoraqtt1refuerzo1',
            'accionmovilizadoracompromisost1refuerzo1',
            'ficherodeoportunidadest1refuerzo1',
            'ficherodeoportunidadeshogart1refuerzo1',
            'informevisitat1refuerzo1',
            'finalizaciont1refuerzo1',
            'rombovisitatipo1refuerzo1'
        ];


        $rutaActual = Route::currentRouteName();

        if (in_array($rutaActual, $rutasT1)) {
            view()->share('esVisitaT1', true);

              // 🔐 Desencriptar folio desde la URL tipo /rombovisitatipo1refuerzo1/{folio}
            $folioCodificado = request()->route('folio'); // viene desde la URL
            $hashids = new Hashids('', 10);
            $folio = $folioCodificado ? $hashids->decode($folioCodificado)[0] ?? null : null;
            $linea = '300';
            // Consulta de ejemplo: ajusta el nombre de tu tabla y campos
            $registro = DB::table('t1_visitasrealizadas')
                        ->where('folio', $folio)
                        ->where('linea', $linea)
                        ->select('iniciovisita', 'finvisita')
                        ->first();

                        $duracion = '0';
                        $activarContador = false;
                        $totalSegundos = 0; // 👈 lo agregamos aparte

                        if (!empty($registro) && !empty($registro->iniciovisita)) {
                            $inicio = Carbon::parse($registro->iniciovisita);
                            $fin = $registro->finvisita ? Carbon::parse($registro->finvisita) : Carbon::now();

                            if (empty($registro->finvisita)) {
                                $activarContador = true;
                            }

                            $totalMinutos = $inicio->diffInMinutes($fin);
                            $totalSegundos = $inicio->diffInSeconds($fin); // 👈 solo añadimos esto
                            
                            $horas = floor($totalMinutos / 60);
                            $minutos = $totalMinutos % 60;
                            $duracion = sprintf('%02d:%02d', $horas, $minutos);
                        }
                        
                        view()->share('duracionT1', $duracion);
                        view()->share('activarContadorT1', $activarContador);
                        view()->share('totalSegundosT1', $totalSegundos);
        }

        return $next($request);
    }
}
