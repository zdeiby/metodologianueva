<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

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
        }

        return $next($request);
    }
}
