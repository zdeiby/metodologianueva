<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_sincronizacion;

Route::get('/t1_principalhogar', [c_sincronizacion::class, 'fc_t1_principalhogar'])->name('t1_principalhogar');

Route::get('/t1_hogarcondicionesalimentarias', [c_sincronizacion::class, 'fc_t1_hogarcondicionesalimentarias'])->name('t1_hogarcondicionesalimentarias');
Route::get('/t1_hogarcondicioneshabitabilidad', [c_sincronizacion::class, 'fc_t1_hogarcondicioneshabitabilidad'])->name('t1_hogarcondicioneshabitabilidad');
Route::get('/t1_hogarconformacionfamiliar', [c_sincronizacion::class, 'fc_t1_hogarconformacionfamiliar'])->name('t1_hogarconformacionfamiliar');
Route::get('/t1_hogardatoseconomicos', [c_sincronizacion::class, 'fc_t1_hogardatoseconomicos'])->name('t1_hogardatoseconomicos');
Route::get('/t1_hogardatosgeograficos', [c_sincronizacion::class, 'fc_t1_hogardatosgeograficos'])->name('t1_hogardatosgeograficos');
Route::get('/t1_hogarentornofamiliar', [c_sincronizacion::class, 'fc_t1_hogarentornofamiliar'])->name('t1_hogarentornofamiliar');
Route::get('/t1_integrantesfinanciero', [c_sincronizacion::class, 'fc_t1_integrantesfinanciero'])->name('t1_integrantesfinanciero');
Route::get('/t1_integrantesfisicoyemocional', [c_sincronizacion::class, 'fc_t1_integrantesfisicoyemocional'])->name('t1_integrantesfisicoyemocional');
Route::get('/t1_integranteshogar', [c_sincronizacion::class, 'fc_t1_integranteshogar'])->name('t1_integranteshogar');
Route::get('/t1_integrantesidentitario', [c_sincronizacion::class, 'fc_t1_integrantesidentitario'])->name('t1_integrantesidentitario');
Route::get('/t1_integrantesintelectual', [c_sincronizacion::class, 'fc_t1_integrantesintelectual'])->name('t1_integrantesintelectual');
Route::get('/t1_integranteslegal', [c_sincronizacion::class, 'fc_t1_integranteslegal'])->name('t1_integranteslegal');
Route::get('/sincroprivaciones', [c_sincronizacion::class, 'fc_sincroprivaciones'])->name('sincroprivaciones');

