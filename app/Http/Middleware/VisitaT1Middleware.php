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

        $rutasT1R2 = [
            'momentoconcientet1refuerzo2',
            'bienestarenfamiliat1refuerzo2',
            'accionmovilizadoraqtt1refuerzo2',
            'accionmovilizadoracompromisost1refuerzo2',
            'ficherodeoportunidadest1refuerzo2',
            'ficherodeoportunidadeshogart1refuerzo2',
            'informevisitat1refuerzo2',
            'finalizaciont1refuerzo2',
            'rombovisitatipo1refuerzo2',
            'indicadorest1refuerzo2'
        ];


         $rutas1T1 = [
            'momentoconciente',
            'bienestarenfamilia',
            'accionmovilizadoraqt',
            'accionmovilizadoracompromisos',
            'ficherodeoportunidades',
            'ficherodeoportunidadeshogar',
            'informevisita',
            'finalizacion',
            'rombovisitatipo1',
            'actualizacionnovedades',
            'informevisitat1'
        ];

        $rutasTriaje = [
            'rombointegrantes',
            'integrantes',
            'editarintegrantes',
            'encuestaintegrantesfisicoemocional',
            'encuestaintegrantesintelectual',
            'encuestaintegrantesfinanciero',
            'encuestaintegranteslegal',
            'encuestahogarconformacionfamiliar',
            'encuestahogardatosgeograficos',
            'encuestahogarhabitabilidad',
            'encuestahogaralimentos',
            'hogarentornofamiliar',
            // 'editarintegrantesgeneral',

           
        ];

         $rutasTriajeP2 = [
             'editarintegrantesgeneral',
            'triaje_p1_p2',
            'caracterizacion_integrantes',
            'primera_infancia',
            'mecanismos_proteccion',
            'caracterizacion_hogar_p1',
            'caracterizacion_hogar_p2',
            'caracterizacion_hogar_p3',
            'caracterizacion_hogar_p4',
            'test_triaje_p1_p2',
            'test_caracterizacion_integrantes',
            'test_primera_infancia',
            'cardsqt',
            'bienestarsaludemocionalqt',
            'legalqt',
            'enfamiliaqt',
            'intelectualqt',
            'financieroqt',
           
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



        if (in_array($rutaActual, $rutasT1R2)) {
            view()->share('esVisitaT1R2', true);

              // 🔐 Desencriptar folio desde la URL tipo /rombovisitatipo1refuerzo1/{folio}
            $folioCodificado = request()->route('folio'); // viene desde la URL
            $hashids = new Hashids('', 10);
            $folio = $folioCodificado ? $hashids->decode($folioCodificado)[0] ?? null : null;
            $linea = '400';
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
                        
                        view()->share('duracionT1R2', $duracion);
                        view()->share('activarContadorT1R2', $activarContador);
                        view()->share('totalSegundosT1R2', $totalSegundos);
        }


          if (in_array($rutaActual, $rutas1T1)) {
            view()->share('esVisita1T1', true);

              // 🔐 Desencriptar folio desde la URL tipo /rombovisitatipo1refuerzo1/{folio}
            $folioCodificado = request()->route('folio'); // viene desde la URL
            $hashids = new Hashids('', 10);
            $folio = $folioCodificado ? $hashids->decode($folioCodificado)[0] ?? null : null;
            $linea = '200';
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
                        
                        view()->share('duracion1T1', $duracion);
                        view()->share('activarContador1T1', $activarContador);
                        view()->share('totalSegundos1T1', $totalSegundos);
        }


        if (in_array($rutaActual, $rutasTriaje)) {
            view()->share('esVisitaTriaje', true);

              // 🔐 Desencriptar folio desde la URL tipo /rombovisitatipo1refuerzo1/{folio}
            $folioCodificado = request()->route('folio'); // viene desde la URL
            $hashids = new Hashids('', 10);
            $folio = $folioCodificado ? decrypt($folioCodificado) : null;
            $linea = '100';
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
                        
                        view()->share('duracionTriaje', $duracion);
                        view()->share('activarContadorTriaje', $activarContador);
                        view()->share('totalSegundosTriaje', $totalSegundos);
        }

          if (in_array($rutaActual, $rutasTriajeP2)) {
            view()->share('esVisitaTriajeP2', true);

              // 🔐 Desencriptar folio desde la URL tipo /rombovisitatipo1refuerzo1/{folio}
            $folioCodificado = request()->route('folio'); // viene desde la URL
            $hashids = new Hashids('', 10);
            $folio = $folioCodificado ? $hashids->decode($folioCodificado)[0] ?? null : null;
            $linea = '100';
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
                        
                        view()->share('duracionTriajeP2', $duracion);
                        view()->share('activarContadorTriajeP2', $activarContador);
                        view()->share('totalSegundosTriajeP2', $totalSegundos);
        }




        return $next($request);
    }
}
