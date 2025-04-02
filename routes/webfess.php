<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ffes\c_caracterizacion;
use App\Http\Controllers\ffes\c_caracterizacionhogar;
use App\Http\Controllers\ffes\c_triaje_p1_p2;
use App\Http\Controllers\ffes\c_caracterizacionIntegrantes;
use App\Http\Controllers\ffes\c_caracterizacionIntegrantes_primerInfancia;
use App\Http\Controllers\ffes\c_caracterizacionIntegrantes_mecanismosProteccion;
use App\Http\Controllers\ffes\c_caracterizacion_hogar_p1;
use App\Http\Controllers\ffes\c_caracterizacion_hogar_p2;
use Hashids\Hashids;

// Rutas para caracterización de hogares
// Route::get('/caracterizacionffes',[c_caracterizacion::class,'fc_caracterizacion'])->name('caracterizacionffes');
// Route::get('/caracterizacionffeshogar',[c_caracterizacionhogar::class,'fc_caracterizacionhogar'])->name('caracterizacionffeshogar');

// Rutas para triaje p1 y p2
Route::get('/triaje_p1_p2/{folio}/{idintegrante}',[c_triaje_p1_p2::class, 'fc_triaje_p1_p2'])->name('triaje_p1_p2');
Route::post('/guardar_triaje_p1_p2',[c_triaje_p1_p2::class, 'fc_guardar_triaje_p1_p2'])->name('guardar_triaje_p1_p2');

// Rutas para caracterización de integrantes
Route::get('/caracterizacion_integrantes/{folio}/{idintegrante}',[c_caracterizacionIntegrantes::class, 'fc_caracterizacionIntegrantes'])->name('caracterizacion_integrantes');
Route::post('/guardar_estrategias',[c_caracterizacionIntegrantes::class, 'fc_guardar_estrategias'])->name('guardar.estrategias');

// Rutas para servicios de primera infancia
Route::get('/primera_infancia/{folio}/{idintegrante}',[c_caracterizacionIntegrantes_primerInfancia::class, 'fc_primeraInfancia'])->name('primera_infancia');
Route::post('/guardar_primera_infancia',[c_caracterizacionIntegrantes_primerInfancia::class, 'fc_guardar_primeraInfancia'])->name('guardar.primeraInfancia');

// Rutas para mecanismos de protección
Route::get('/mecanismos_proteccion/{folio}/{idintegrante}',[c_caracterizacionIntegrantes_mecanismosProteccion::class, 'fc_mecanismosProteccion'])->name('mecanismos_proteccion');
Route::post('/guardar_mecanismos_proteccion',[c_caracterizacionIntegrantes_mecanismosProteccion::class, 'fc_guardar_mecanismosProteccion'])->name('guardar.mecanismosProteccion');

// Rutas para caracterización de hogar p1
Route::get('/caracterizacion_hogar_p1/{folio}/{idintegrante}',[c_caracterizacion_hogar_p1::class, 'fc_caracterizacion_hogar_p1'])->name('caracterizacion_hogar_p1');
Route::post('/guardar_caracterizacion_hogar_p1',[c_caracterizacion_hogar_p1::class, 'fc_guardar_caracterizacion_hogar_p1'])->name('guardar_caracterizacion_hogar_p1');
Route::get('/obtener_integrantes_menores/{folio}',[c_caracterizacion_hogar_p1::class, 'fc_obtener_integrantes_menores'])->name('obtener_integrantes_menores');

// Rutas para caracterización de hogar p2
Route::get('/caracterizacion_hogar_p2/{folio}/{idintegrante}',[c_caracterizacion_hogar_p2::class, 'fc_caracterizacion_hogar_p2'])->name('caracterizacion_hogar_p2');
Route::post('/guardar_caracterizacion_hogar_p2',[c_caracterizacion_hogar_p2::class, 'fc_guardar_caracterizacion_hogar_p2'])->name('guardar_caracterizacion_hogar_p2');
Route::get('/obtener_integrantes_menores_p2/{folio}',[c_caracterizacion_hogar_p2::class, 'fc_obtener_integrantes_menores'])->name('obtener_integrantes_menores_p2');

// Rutas temporalmente comentadas hasta implementar los formularios correspondientes
// Route::get('/integrantes/{folio}',[c_caracterizacion::class, 'fc_integrantes'])->name('integrantes');
// Route::get('/siguiente_paso/{folio}/{idintegrante}',[c_caracterizacion::class, 'fc_siguiente_paso'])->name('siguiente.paso');

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

// Ruta temporal para pruebas de caracterización de integrantes (eliminar en producción)
Route::get('/test_caracterizacion_integrantes/{folio_real}/{idintegrante_real}', function($folio_real, $idintegrante_real) {
    $hashids = new Hashids('', 10);
    $folio_encriptado = $hashids->encode($folio_real);
    $idintegrante_encriptado = $hashids->encode($idintegrante_real);
    
    return redirect()->route('caracterizacion_integrantes', [
        'folio' => $folio_encriptado,
        'idintegrante' => $idintegrante_encriptado
    ]);
})->name('test_caracterizacion_integrantes');

// Ruta temporal para pruebas de servicios de primera infancia (eliminar en producción)
Route::get('/test_primera_infancia/{folio_real}/{idintegrante_real}', function($folio_real, $idintegrante_real) {
    $hashids = new Hashids('', 10);
    $folio_encriptado = $hashids->encode($folio_real);
    $idintegrante_encriptado = $hashids->encode($idintegrante_real);
    
    return redirect()->route('primera_infancia', [
        'folio' => $folio_encriptado,
        'idintegrante' => $idintegrante_encriptado
    ]);
})->name('test_primera_infancia');