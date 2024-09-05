<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_sincronizacion;

Route::get('/t1_principalhogard', [c_sincronizacion::class, 'fc_t1_principalhogard'])->name('t1_principalhogard');

Route::get('/t1_hogarcondicionesalimentariasd', [c_sincronizacion::class, 'fc_t1_hogarcondicionesalimentariasd'])->name('t1_hogarcondicionesalimentariasd');
Route::get('/t1_hogarcondicioneshabitabilidadd', [c_sincronizacion::class, 'fc_t1_hogarcondicioneshabitabilidadd'])->name('t1_hogarcondicioneshabitabilidadd');
Route::get('/t1_hogarconformacionfamiliard', [c_sincronizacion::class, 'fc_t1_hogarconformacionfamiliard'])->name('t1_hogarconformacionfamiliard');
Route::get('/t1_hogardatoseconomicosd', [c_sincronizacion::class, 'fc_t1_hogardatoseconomicosd'])->name('t1_hogardatoseconomicosd');
Route::get('/t1_hogardatosgeograficosd', [c_sincronizacion::class, 'fc_t1_hogardatosgeograficosd'])->name('t1_hogardatosgeograficosd');
Route::get('/t1_hogarentornofamiliard', [c_sincronizacion::class, 'fc_t1_hogarentornofamiliard'])->name('t1_hogarentornofamiliard');
Route::get('/t1_integrantesfinancierod', [c_sincronizacion::class, 'fc_t1_integrantesfinancierod'])->name('t1_integrantesfinancierod');
Route::get('/t1_integrantesfisicoyemocionald', [c_sincronizacion::class, 'fc_t1_integrantesfisicoyemocionald'])->name('t1_integrantesfisicoyemocionald');
Route::get('/t1_integranteshogard', [c_sincronizacion::class, 'fc_t1_integranteshogard'])->name('t1_integranteshogard');
Route::get('/t1_integrantesidentitariod', [c_sincronizacion::class, 'fc_t1_integrantesidentitariod'])->name('t1_integrantesidentitariod');
Route::get('/t1_integrantesintelectuald', [c_sincronizacion::class, 'fc_t1_integrantesintelectuald'])->name('t1_integrantesintelectuald');
Route::get('/t1_integranteslegald', [c_sincronizacion::class, 'fc_t1_integranteslegald'])->name('t1_integranteslegald');


Route::get('/sincroprivacionesd', [c_sincronizacion::class, 'fc_sincroprivacionesd'])->name('sincroprivacionesd');
