<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\c_login;
use App\Http\Controllers\c_index;
use App\Http\Controllers\c_prueba;
use App\Http\Controllers\c_register;
use App\Http\Controllers\c_session;
use App\Http\Controllers\c_rombo;
use App\Http\Controllers\c_rombointegrantes;
use App\Http\Controllers\c_integrantes;
use App\Http\Controllers\c_editarintegrantes;
use App\Http\Controllers\c_encuestaintegrantes;
use App\Http\Controllers\vistaslineas\c_l1e1;
use App\Http\Controllers\c_sincronizacion;

//RUTAS GET
Route::get('/',[c_index::class, 'fc_index'])->name('index');
Route::get('/leerintegrantes',[c_integrantes::class,'fc_leerintegrantes'])->name('leerintegrantes');
Route::get('/eliminarintegrantes',[c_integrantes::class, 'fc_eliminarintegrantes'])->name('eliminarintegrantes');
Route::get('/leerprincipalhogar',[c_prueba::class, 'fc_leerprincipalhogar'])->name('leerprincipalhogar');
Route::get('/guardarhabeasdata',[c_prueba::class, 'fc_guardarhabeasdata'])->name('guardarhabeasdata');



Route::get('/cobertura',[c_prueba::class, 'fc_index'])->name('prueba');

Route::get('/sincronizacion',[c_sincronizacion::class, 'fc_sincronizacion'])->name('sincronizacion');


Route::get('/login',[c_login::class, 'fc_login'])->name('login');


Route::get('/editarintegrantes',[c_editarintegrantes::class, 'fc_editarintegrantes'])->name('editarintegrantes');
Route::get('/responderencuesta',[c_editarintegrantes::class, 'fc_responderencuesta'])->name('responderencuesta'); 
Route::get('/guardarintegrante',[c_editarintegrantes::class, 'fc_guardarintegrante'])->name('guardarintegrante');   
Route::get('/guardaravatar',[c_editarintegrantes::class, 'fc_guardaravatar'])->name('guardaravatar');
Route::get('/guardaridentitario',[c_editarintegrantes::class, 'fc_guardaridentitario'])->name('guardaridentitario');    
Route::get('/consultarrepresentante',[c_editarintegrantes::class, 'fc_consultarrepresentante'])->name('consultarrepresentante');

Route::get('/encuestaintegrantesfisicoemocional',[c_encuestaintegrantes::class, 'fc_encuestaintegrantesfisicoemocional'])->name('encuestaintegrantesfisicoemocional');
Route::get('/encuestaintegrantesintelectual',[c_encuestaintegrantes::class, 'fc_encuestaintegrantesintelectual'])->name('encuestaintegrantesintelectual');   
Route::get('/encuestaintegrantesfinanciero',[c_encuestaintegrantes::class, 'fc_encuestaintegrantesfinanciero'])->name('encuestaintegrantesfinanciero');
Route::get('/encuestaintegranteslegal',[c_encuestaintegrantes::class, 'fc_encuestaintegranteslegal'])->name('encuestaintegranteslegal');


Route::get('/fisicoyemocional',[c_encuestaintegrantes::class, 'fc_fisicoyemocional'])->name('fisicoyemocional');
Route::get('/intelectual',[c_encuestaintegrantes::class, 'fc_intelectual'])->name('intelectual');
Route::get('/financiero',[c_encuestaintegrantes::class, 'fc_financiero'])->name('financiero');
Route::get('/legal',[c_encuestaintegrantes::class, 'fc_legal'])->name('legal');
Route::get('/leerpreguntas',[c_encuestaintegrantes::class, 'fc_leerpreguntas'])->name('leerpreguntas');

Route::get('/conformacionfamiliar',[c_l1e1::class, 'fc_conformacionfamiliar'])->name('conformacionfamiliar');
Route::get('/datoseconomicos',[c_l1e1::class, 'fc_datoseconomicos'])->name('datoseconomicos');
Route::get('/condicioneshabitabilidad',[c_l1e1::class, 'fc_condicioneshabitabilidad'])->name('condicioneshabitabilidad');
Route::get('/accesoalimentos',[c_l1e1::class, 'fc_accesoalimentos'])->name('accesoalimentos');
Route::post('/entornofamiliar',[c_l1e1::class, 'fc_entornofamiliar'])->name('entornofamiliar');

Route::get('/leerpreguntashogar',[c_l1e1::class, 'fc_leerpreguntashogar'])->name('leerpreguntashogar');
Route::get('/leerpreguntashogarfamiliar',[c_l1e1::class, 'fc_leerpreguntashogarfamiliar'])->name('leerpreguntashogarfamiliar');
Route::get('/leerpreguntashogareconomicos',[c_l1e1::class, 'fc_leerpreguntashogareconomicos'])->name('leerpreguntashogareconomicos');
Route::get('/leerpreguntashogarhabitabilidad',[c_l1e1::class, 'fc_leerpreguntashogarhabitabilidad'])->name('leerpreguntashogarhabitabilidad');
Route::get('/leerpreguntashogaralimentos',[c_l1e1::class, 'fc_leerpreguntashogaralimentos'])->name('leerpreguntashogaralimentos');
Route::get('/leerpreguntashogarentornofamiliar',[c_l1e1::class, 'fc_leerpreguntashogarentornofamiliar'])->name('leerpreguntashogarentornofamiliar');


Route::get('/verbarrios',[c_l1e1::class, 'fc_verbarrios'])->name('verbarrios');



Route::get('/register',[c_register::class,'fc_register'])->name('register');
Route::get('/encuestahogarconformacionfamiliar/{lineaestacion}',[c_l1e1::class,'fc_encuestahogarconformacionfamiliar'])->name('encuestahogarconformacionfamiliar');
Route::get('/hogarentornofamiliar/{lineaestacion}',[c_l1e1::class,'fc_hogarentornofamiliar'])->name('hogarentornofamiliar');
Route::get('/encuestahogardatosgeograficos/{lineaestacion}',[c_l1e1::class,'fc_encuestahogardatosgeograficos'])->name('encuestahogardatosgeograficos');
Route::get('/encuestahogarhabitabilidad/{lineaestacion}',[c_l1e1::class,'fc_encuestahogarhabitabilidad'])->name('encuestahogarhabitabilidad');     
Route::get('/encuestahogaralimentos/{lineaestacion}',[c_l1e1::class,'fc_encuestahogaralimentos'])->name('encuestahogaralimentos');
Route::get('/rombo/{folio}',[c_rombo::class,'fc_rombo'])->name('rombo');
Route::get('/rombointegrantes/{folio}',[c_rombointegrantes::class,'fc_rombointegrantes'])->name('rombointegrantes');
Route::get('/integrantes/{folio}',[c_integrantes::class,'fc_integrantes'])->name('integrantes');








//RUTAS POST
Route::post('/authregister',[c_register::class,'fc_authregister'])->name('authregister');
Route::post('/auth',[c_login::class,'fc_auth'])->name('inicio');
Route::post('/cargarfolios',[c_index::class, 'fc_leerfolios'])->name('cargarfolios');
//Route::post('/l1e1',[c_l1e1::class,'fc_l1e1'])->name('iral1e1');
Route::post('/logout', [c_session::class,'borrarcookies'])->name('logout');




//rutas de la sincronización

// Incluir las rutas principales
require __DIR__.'/sincroabajo.php';