<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ffes\c_caracterizacion;
use App\Http\Controllers\ffes\c_caracterizacionhogar;
use App\Http\Controllers\ffes\c_triaje_p1_p2;
use Hashids\Hashids;

Route::get('/caracterizacionffes',[c_caracterizacion::class,'fc_caracterizacion'])->name('caracterizacionffes');
Route::get('/caracterizacionffeshogar',[c_caracterizacionhogar::class,'fc_caracterizacionhogar'])->name('caracterizacionffeshogar');

// Rutas para triaje p1 y p2
Route::get('/triaje_p1_p2/{folio}/{idintegrante}',[c_triaje_p1_p2::class, 'fc_triaje_p1_p2'])->name('triaje_p1_p2');
Route::post('/guardar_triaje_p1_p2',[c_triaje_p1_p2::class, 'fc_guardar_triaje_p1_p2'])->name('guardar_triaje_p1_p2');

// Ruta temporal para pruebas (eliminar en producción)
Route::get('/test_triaje_p1_p2/{folio_real}/{idintegrante_real}', function($folio_real, $idintegrante_real) {
    $hashids = new Hashids('', 10);
    $folio_encriptado = $hashids->encode($folio_real);
    $idintegrante_encriptado = $hashids->encode($idintegrante_real);
    
    return redirect()->route('triaje_p1_p2', [
        'folio' => $folio_encriptado,
        'idintegrante' => $idintegrante_encriptado
    ]);
})->name('test_triaje_p1_p2');