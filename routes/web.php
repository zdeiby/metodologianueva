<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\c_login;
use App\Http\Controllers\c_index;
use App\Http\Controllers\c_prueba;
use App\Http\Controllers\c_cobertura;
use App\Http\Controllers\c_sisben;
use App\Http\Controllers\c_register;
use App\Http\Controllers\c_session;
use App\Http\Controllers\c_rombo;
use App\Http\Controllers\c_rombointegrantes;
use App\Http\Controllers\c_integrantes;
use App\Http\Controllers\c_editarintegrantes;
use App\Http\Controllers\c_editarIntegrantesgeneral;
use App\Http\Controllers\c_editarintegrantesdatosgeneral;
use App\Http\Controllers\c_encuestaintegrantes;
use App\Http\Controllers\vistaslineas\c_l1e1;
use App\Http\Controllers\editarintegrantesyhogar\c_editarhogardatosgeograficos;

use App\Http\Controllers\c_sincronizacion; 
use App\Http\Controllers\c_cardsqt;
use App\Http\Controllers\formularioqt\c_encuestaintegrantesqt;
use App\Http\Controllers\c_visitatipo1pasos;   
use App\Http\Controllers\accionesmovilizadoras\c_momentoconciente;
// use App\Http\Controllers\c_compromisostipo1;
use App\Http\Controllers\espaciodefinalizacion\c_finalizacion;
use App\Http\Controllers\c_oportunidades;
use App\Http\Controllers\espaciodefinalizacion\c_oportunidadesvisita;

//refuerzo t1 2
use App\Http\Controllers\c_visitatipo1pasosrefuerzo2; 
use App\Http\Controllers\accionesmovilizadorast1refuerzo2\c_momentoconcientet1refuerzo2;
use App\Http\Controllers\espaciodefinalizaciont1refuerzo2\c_oportunidadesvisitat1refuerzo2;
use App\Http\Controllers\espaciodefinalizaciont1refuerzo2\c_finalizaciont1refuerzo2;

// refuerzo t1 1
use App\Http\Controllers\c_visitatipo1pasosrefuerzo1; 
use App\Http\Controllers\accionesmovilizadorast1refuerzo1\c_momentoconcientet1refuerzo1;
use App\Http\Controllers\espaciodefinalizaciont1refuerzo1\c_oportunidadesvisitat1refuerzo1;
use App\Http\Controllers\espaciodefinalizaciont1refuerzo1\c_finalizaciont1refuerzo1;
//RUTAS GET

//refuerzo t1 3
use App\Http\Controllers\c_visitatipo1pasosrefuerzo3; 
use App\Http\Controllers\accionesmovilizadorast1refuerzo3\c_momentoconcientet1refuerzo3;
use App\Http\Controllers\espaciodefinalizaciont1refuerzo3\c_oportunidadesvisitat1refuerzo3;
use App\Http\Controllers\espaciodefinalizaciont1refuerzo3\c_finalizaciont1refuerzo3;


Route::get('/',[c_index::class, 'fc_index'])->name('index');
Route::get('/leerintegrantes',[c_integrantes::class,'fc_leerintegrantes'])->name('leerintegrantes');
Route::get('/eliminarintegrantes',[c_integrantes::class, 'fc_eliminarintegrantes'])->name('eliminarintegrantes');
Route::get('/leerprincipalhogar',[c_prueba::class, 'fc_leerprincipalhogar'])->name('leerprincipalhogar');
Route::get('/guardarhabeasdata',[c_prueba::class, 'fc_guardarhabeasdata'])->name('guardarhabeasdata');



//Route::get('/cobertura',[c_prueba::class, 'fc_index'])->name('prueba');
Route::get('/cobertura',[c_cobertura::class, 'fc_index'])->name('prueba');
Route::get('/sisben',[c_sisben::class, 'fc_index'])->name('sisben');
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

Route::get('/agregarpasoencuadre',[c_rombointegrantes::class,'fc_agregarpasoencuadre'])->name('agregarpasoencuadre');
Route::get('/finalizarintegrantes',[c_integrantes::class,'fc_finalizarintegrantes'])->name('finalizarintegrantes');
Route::get('/agregarpasohogar',[c_l1e1::class,'fc_agregarpasohogar'])->name('agregarpasohogar');
Route::get('/verficarestadosdehogar',[c_l1e1::class,'fc_verficarestadosdehogar'])->name('verficarestadosdehogar');
Route::get('/agregarpasoresultado',[c_rombointegrantes::class,'fc_agregarpasoresultado'])->name('agregarpasoresultado');



Route::get('/register',[c_register::class,'fc_register'])->name('register');
Route::get('/encuestahogarconformacionfamiliar/{lineaestacion}',[c_l1e1::class,'fc_encuestahogarconformacionfamiliar'])->name('encuestahogarconformacionfamiliar');
Route::get('/hogarentornofamiliar/{lineaestacion}',[c_l1e1::class,'fc_hogarentornofamiliar'])->name('hogarentornofamiliar');
Route::get('/encuestahogardatosgeograficos/{lineaestacion}',[c_l1e1::class,'fc_encuestahogardatosgeograficos'])->name('encuestahogardatosgeograficos');
Route::get('/encuestahogarhabitabilidad/{lineaestacion}',[c_l1e1::class,'fc_encuestahogarhabitabilidad'])->name('encuestahogarhabitabilidad');     
Route::get('/encuestahogaralimentos/{lineaestacion}',[c_l1e1::class,'fc_encuestahogaralimentos'])->name('encuestahogaralimentos');
Route::get('/rombo/{folio}',[c_rombo::class,'fc_rombo'])->name('rombo');
Route::get('/rombointegrantes/{folio}',[c_rombointegrantes::class,'fc_rombointegrantes'])->name('rombointegrantes');
Route::get('/integrantes/{folio}',[c_integrantes::class,'fc_integrantes'])->name('integrantes');
Route::get('/cardsqt/{folio}',[c_cardsqt::class,'fc_cardsqt'])->name('cardsqt');



Route::get('/rombovisitatipo1/{folio}',[c_visitatipo1pasos::class,'fc_visitatipo1pasos'])->name('rombovisitatipo1');
Route::get('/guardarprioridad',[c_visitatipo1pasos::class,'fc_guardarprioridad'])->name('guardarprioridad');



//RUTAS POST
Route::post('/authregister',[c_register::class,'fc_authregister'])->name('authregister');
Route::post('/auth',[c_login::class,'fc_auth'])->name('inicio');
Route::post('/cargarfolios',[c_index::class, 'fc_leerfolios'])->name('cargarfolios');
//Route::post('/l1e1',[c_l1e1::class,'fc_l1e1'])->name('iral1e1');
Route::post('/logout', [c_session::class,'borrarcookies'])->name('logout');




//rutas de la sincronización
// Incluir las rutas principales
require __DIR__.'/sincroabajo.php'; // rutas para la sincronizacion abajo busca las rutas en routes/sincroarriba.php
require __DIR__.'/sincroarriba.php'; // rutas para la sincronizacion arriba   busca las rutas en routes/sincroarriba.php



// RUTAS PARA LA QT

Route::get('/bienestarsaludemocionalqt/{folio}/{idintegrante}/{vista}',[c_encuestaintegrantesqt::class, 'fc_bienestarsaludemocionalqt'])->name('bienestarsaludemocionalqt');
Route::get('/legalqt/{folio}/{idintegrante}/{vista}',[c_encuestaintegrantesqt::class, 'fc_legalqt'])->name('legalqt');
Route::get('/enfamiliaqt/{folio}/{idintegrante}/{vista}',[c_encuestaintegrantesqt::class, 'fc_enfamiliaqt'])->name('enfamiliaqt');
Route::get('/intelectualqt/{folio}/{idintegrante}/{vista}',[c_encuestaintegrantesqt::class, 'fc_intelectualqt'])->name('intelectualqt');
Route::get('/financieroqt/{folio}/{idintegrante}/{vista}',[c_encuestaintegrantesqt::class, 'fc_financieroqt'])->name('financieroqt');
Route::get('/finalizarintegrantesqt',[c_cardsqt::class,'fc_finalizarintegrantesqt'])->name('finalizarintegrantesqt');
Route::get('/consultarindicador',[c_encuestaintegrantesqt::class,'fc_consultarindicador'])->name('consultarindicador');
Route::get('/consultarindicadorhogar',[c_encuestaintegrantesqt::class,'fc_consultarindicadorhogar'])->name('consultarindicadorhogar');
Route::get('/moverindicadorgestor',[c_encuestaintegrantesqt::class,'fc_moverindicadorgestor'])->name('moverindicadorgestor');
Route::get('/moverindicadorgestorhogar',[c_encuestaintegrantesqt::class,'fc_moverindicadorgestorhogar'])->name('moverindicadorgestorhogar');

Route::get('/moverporpregunta13',[c_encuestaintegrantesqt::class,'fc_moverporpregunta13'])->name('moverporpregunta13');
Route::get('/moverporpregunta17',[c_encuestaintegrantesqt::class,'fc_moverporpregunta17'])->name('moverporpregunta17');
Route::get('/moverporpregunta31',[c_encuestaintegrantesqt::class,'fc_moverporpregunta31'])->name('moverporpregunta31');
Route::get('/moverporpregunta32',[c_encuestaintegrantesqt::class,'fc_moverporpregunta32'])->name('moverporpregunta32');
Route::get('/moverporpregunta34',[c_encuestaintegrantesqt::class,'fc_moverporpregunta34'])->name('moverporpregunta34');
Route::get('/moverporpregunta41',[c_encuestaintegrantesqt::class,'fc_moverporpregunta41'])->name('moverporpregunta41');
Route::get('/moverporpregunta54',[c_encuestaintegrantesqt::class,'fc_moverporpregunta54'])->name('moverporpregunta54');
Route::get('/moverporpregunta55',[c_encuestaintegrantesqt::class,'fc_moverporpregunta55'])->name('moverporpregunta55');

Route::get('/moverporpregunta33',[c_encuestaintegrantesqt::class,'fc_moverporpregunta33'])->name('moverporpregunta33');
Route::get('/moverporpregunta27',[c_encuestaintegrantesqt::class,'fc_moverporpregunta27'])->name('moverporpregunta27');

Route::get('/moverporpregunta29',[c_encuestaintegrantesqt::class,'fc_moverporpregunta29'])->name('moverporpregunta29');
Route::get('/moverporpregunta35',[c_encuestaintegrantesqt::class,'fc_moverporpregunta35'])->name('moverporpregunta35');


Route::get('/moverporpregunta18',[c_encuestaintegrantesqt::class,'fc_moverporpregunta18'])->name('moverporpregunta18'); //ffes
Route::get('/moverporpregunta19',[c_encuestaintegrantesqt::class,'fc_moverporpregunta19'])->name('moverporpregunta19'); //ffes



Route::get('/guardarformularioqt',[c_encuestaintegrantesqt::class, 'fc_guardarformularioqt'])->name('guardarformularioqt');
Route::get('/leerintegrantesqt',[c_cardsqt::class,'fc_leerintegrantesqt'])->name('leerintegrantesqt'); 

Route::get('/leerintegrantesqtrombo',[c_rombo::class,'fc_leerintegrantesqt_rombo'])->name('leerintegrantesqtrombo'); 


//rutas para las acciones movilizadoras

Route::get('/momentoconciente/{folio}',[c_momentoconciente::class, 'fc_momentoconciente'])->name('momentoconciente');
Route::get('/guardaraccionesmovilizadoras',[c_momentoconciente::class, 'fc_guardaraccionesmovilizadoras'])->name('guardaraccionesmovilizadoras');
Route::get('/bienestarenfamilia/{folio}',[c_momentoconciente::class, 'fc_bienestarenfamilia'])->name('bienestarenfamilia');
Route::get('/accionmovilizadoraqt/{folio}',[c_momentoconciente::class, 'fc_accionmovilizadoraqt'])->name('accionmovilizadoraqt');
Route::get('/accionmovilizadoracompromisos/{folio}',[c_momentoconciente::class, 'fc_accionmovilizadoracompromisos'])->name('accionmovilizadoracompromisos');
Route::get('/guardaraccionesmovilizadorascompromisos',[c_momentoconciente::class, 'fc_guardaraccionesmovilizadorascompromisos'])->name('guardaraccionesmovilizadorascompromisos');




// Route::get('/compromiso1/{folio}',[c_compromisostipo1::class, 'fc_compromiso1'])->name('compromiso1');
// Route::get('/compromiso2/{folio}',[c_compromisostipo1::class, 'fc_compromiso2'])->name('compromiso2');
// Route::get('/guardarcompromisos',[c_compromisostipo1::class, 'fc_guardarcompromisos'])->name('guardarcompromisos');
Route::get('/agregarpasohogargeneral',[c_momentoconciente::class,'fc_agregarpasohogargeneral'])->name('agregarpasohogargeneral');
Route::post('/guardarmomentoconciente',[c_momentoconciente::class, 'fc_guardarmomentoconciente'])->name('guardarmomentoconciente');
Route::get('/verificarpasos',[c_momentoconciente::class, 'fc_verificarpasos'])->name('verificarpasos');




//rutas para las acciones espacio de finalizacion visita tipo 1

Route::get('/finalizacion/{folio}',[c_finalizacion::class, 'fc_finalizacion'])->name('finalizacion');
Route::get('/guardarfinalizaciones',[c_finalizacion::class, 'fc_guardarfinalizaciones'])->name('guardarfinalizaciones');
Route::get('/actualizacionnovedades/{folio}',[c_finalizacion::class, 'fc_actualizacionnovedades'])->name('actualizacionnovedades');
Route::get('/guardaractualizacionynovedadeshogar',[c_finalizacion::class, 'fc_guardaractualizacionynovedadeshogar'])->name('guardaractualizacionynovedadeshogar');
Route::post('/guardarfirma',[c_finalizacion::class, 'fc_guardarfirma'])->name('guardarfirma');

Route::get('/finalizarvisita',[c_finalizacion::class,'fc_finalizarvisita'])->name('finalizarvisita');
Route::get('/informevisitat1/{folio}',[c_finalizacion::class,'fc_informevisitat1'])->name('informevisitat1');


//oportunidades

Route::get('/oportunidades',[c_oportunidades::class, 'fc_oportunidades'])->name('oportunidades');
Route::get('/oportunidadeshogar',[c_oportunidades::class, 'fc_oportunidadeshogar'])->name('oportunidadeshogar');
Route::get('/agregaroportunidad',[c_oportunidades::class, 'fc_agregaroportunidad'])->name('agregaroportunidad');
Route::get('/veroportunidad',[c_oportunidades::class, 'fc_veroportunidad'])->name('veroportunidad');

Route::get('/ficherodeoportunidades/{folio}',[c_oportunidadesvisita::class, 'fc_ficherodeoportunidades'])->name('ficherodeoportunidades');
Route::get('/ficherodeoportunidadeshogar/{folio}',[c_oportunidadesvisita::class, 'fc_ficherodeoportunidadeshogar'])->name('ficherodeoportunidadeshogar');

Route::get('/oportunidadesintegrantesglobal',[c_oportunidades::class, 'fc_oportunidadesintegrantesglobal'])->name('oportunidadesintegrantesglobal');
Route::get('/oportunidadeshogarglobal',[c_oportunidades::class, 'fc_oportunidadeshogarglobal'])->name('oportunidadeshogarglobal');



//tipo 1 refuerzo 


Route::get('/agregarpasoeiniciovisita',[c_visitatipo1pasosrefuerzo1::class, 'fc_agregarpasoeiniciovisita'])->name('agregarpasoeiniciovisita');

Route::get('/accionmovilizadoracompromisost1refuerzo1/{folio}',[c_momentoconcientet1refuerzo1::class, 'fc_accionmovilizadoracompromisost1refuerzo1'])->name('accionmovilizadoracompromisost1refuerzo1');
Route::get('/rombovisitatipo1refuerzo1/{folio}',[c_visitatipo1pasosrefuerzo1::class,'fc_visitatipo1pasosrefuerzo1'])->name('rombovisitatipo1refuerzo1');
Route::get('/momentoconcientet1refuerzo1/{folio}',[c_momentoconcientet1refuerzo1::class, 'fc_momentoconcientet1refuerzo1'])->name('momentoconcientet1refuerzo1');
Route::get('/guardaraccionesmovilizadorast1refuerzo1',[c_momentoconcientet1refuerzo1::class, 'fc_guardaraccionesmovilizadorast1refuerzo1'])->name('guardaraccionesmovilizadorast1refuerzo1');
Route::get('/bienestarenfamiliat1refuerzo1/{folio}',[c_momentoconcientet1refuerzo1::class, 'fc_bienestarenfamiliat1refuerzo1'])->name('bienestarenfamiliat1refuerzo1');
Route::get('/accionmovilizadoraqtt1refuerzo1/{folio}',[c_momentoconcientet1refuerzo1::class, 'fc_accionmovilizadoraqtt1refuerzo1'])->name('accionmovilizadoraqtt1refuerzo1');
Route::get('/ficherodeoportunidadest1refuerzo1/{folio}',[c_oportunidadesvisitat1refuerzo1::class, 'fc_ficherodeoportunidadest1refuerzo1'])->name('ficherodeoportunidadest1refuerzo1');
Route::get('/ficherodeoportunidadeshogart1refuerzo1/{folio}',[c_oportunidadesvisitat1refuerzo1::class, 'fc_ficherodeoportunidadeshogart1refuerzo1'])->name('ficherodeoportunidadeshogart1refuerzo1');

Route::get('/finalizaciont1refuerzo1/{folio}',[c_finalizaciont1refuerzo1::class, 'fc_finalizaciont1refuerzo1'])->name('finalizaciont1refuerzo1');
Route::get('/guardarfinalizacionest1refuerzo1',[c_finalizaciont1refuerzo1::class, 'fc_guardarfinalizacionest1refuerzo1'])->name('guardarfinalizacionest1refuerzo1');
Route::get('/actualizacionnovedadest1refuerzo1/{folio}',[c_finalizaciont1refuerzo1::class, 'fc_actualizacionnovedadest1refuerzo1'])->name('actualizacionnovedadest1refuerzo1');
Route::get('/guardaractualizacionynovedadeshogart1refuerzo1',[c_finalizaciont1refuerzo1::class, 'fc_guardaractualizacionynovedadeshogart1refuerzo1'])->name('guardaractualizacionynovedadeshogart1refuerzo1');
Route::post('/guardarfirmat1refuerzo1',[c_finalizaciont1refuerzo1::class, 'fc_guardarfirmat1refuerzo1'])->name('guardarfirmat1refuerzo1');
Route::get('/verificarpasost1refuerzo1',[c_momentoconcientet1refuerzo1::class, 'fc_verificarpasost1refuerzo1'])->name('verificarpasost1refuerzo1');

Route::get('/finalizarvisitat1refuerzo1',[c_finalizaciont1refuerzo1::class,'fc_finalizarvisitat1refuerzo1'])->name('finalizarvisitat1refuerzo1');
Route::get('/informevisitat1refuerzo1/{folio}',[c_finalizaciont1refuerzo1::class,'fc_informevisitat1refuerzo1'])->name('informevisitat1refuerzo1');


Route::get('/guardaraccionesmovilizadorascompromisost1refuerzo1',[c_momentoconcientet1refuerzo1::class, 'fc_guardaraccionesmovilizadorascompromisost1refuerzo1'])->name('guardaraccionesmovilizadorascompromisost1refuerzo1');


//tipo 1 refuerzo 2 

Route::get('/rombovisitatipo1refuerzo2/{folio}',[c_visitatipo1pasosrefuerzo2::class,'fc_visitatipo1pasosrefuerzo2'])->name('rombovisitatipo1refuerzo2');
Route::get('/momentoconcientet1refuerzo2/{folio}',[c_momentoconcientet1refuerzo2::class, 'fc_momentoconcientet1refuerzo2'])->name('momentoconcientet1refuerzo2');
Route::get('/guardaraccionesmovilizadorast1refuerzo2',[c_momentoconcientet1refuerzo2::class, 'fc_guardaraccionesmovilizadorast1refuerzo2'])->name('guardaraccionesmovilizadorast1refuerzo2');
Route::get('/bienestarenfamiliat1refuerzo2/{folio}',[c_momentoconcientet1refuerzo2::class, 'fc_bienestarenfamiliat1refuerzo2'])->name('bienestarenfamiliat1refuerzo2');
Route::get('/accionmovilizadoraqtt1refuerzo2/{folio}',[c_momentoconcientet1refuerzo2::class, 'fc_accionmovilizadoraqtt1refuerzo2'])->name('accionmovilizadoraqtt1refuerzo2');
Route::get('/ficherodeoportunidadest1refuerzo2/{folio}',[c_oportunidadesvisitat1refuerzo2::class, 'fc_ficherodeoportunidadest1refuerzo2'])->name('ficherodeoportunidadest1refuerzo2');
Route::get('/ficherodeoportunidadeshogart1refuerzo2/{folio}',[c_oportunidadesvisitat1refuerzo2::class, 'fc_ficherodeoportunidadeshogart1refuerzo2'])->name('ficherodeoportunidadeshogart1refuerzo2');

Route::get('/finalizaciont1refuerzo2/{folio}',[c_finalizaciont1refuerzo2::class, 'fc_finalizaciont1refuerzo2'])->name('finalizaciont1refuerzo2');
Route::get('/guardarfinalizacionest1refuerzo2',[c_finalizaciont1refuerzo2::class, 'fc_guardarfinalizacionest1refuerzo2'])->name('guardarfinalizacionest1refuerzo2');
Route::get('/actualizacionnovedadest1refuerzo2/{folio}',[c_finalizaciont1refuerzo2::class, 'fc_actualizacionnovedadest1refuerzo2'])->name('actualizacionnovedadest1refuerzo2');
Route::get('/guardaractualizacionynovedadeshogart1refuerzo2',[c_finalizaciont1refuerzo2::class, 'fc_guardaractualizacionynovedadeshogart1refuerzo2'])->name('guardaractualizacionynovedadeshogart1refuerzo2');
Route::post('/guardarfirmat1refuerzo2',[c_finalizaciont1refuerzo2::class, 'fc_guardarfirmat1refuerzo2'])->name('guardarfirmat1refuerzo2');

Route::get('/finalizarvisitat1refuerzo2',[c_finalizaciont1refuerzo2::class,'fc_finalizarvisitat1refuerzo2'])->name('finalizarvisitat1refuerzo2');
Route::get('/informevisitat1refuerzo2/{folio}',[c_finalizaciont1refuerzo2::class,'fc_informevisitat1refuerzo2'])->name('informevisitat1refuerzo2');

//tipo 1 refuerzo 3 

Route::get('/rombovisitatipo1refuerzo3/{folio}',[c_visitatipo1pasosrefuerzo3::class,'fc_visitatipo1pasosrefuerzo3'])->name('rombovisitatipo1refuerzo3');
Route::get('/momentoconcientet1refuerzo3/{folio}',[c_momentoconcientet1refuerzo3::class, 'fc_momentoconcientet1refuerzo3'])->name('momentoconcientet1refuerzo3');
Route::get('/guardaraccionesmovilizadorast1refuerzo3',[c_momentoconcientet1refuerzo3::class, 'fc_guardaraccionesmovilizadorast1refuerzo3'])->name('guardaraccionesmovilizadorast1refuerzo3');
Route::get('/bienestarenfamiliat1refuerzo3/{folio}',[c_momentoconcientet1refuerzo3::class, 'fc_bienestarenfamiliat1refuerzo3'])->name('bienestarenfamiliat1refuerzo3');
Route::get('/accionmovilizadoraqtt1refuerzo3/{folio}',[c_momentoconcientet1refuerzo3::class, 'fc_accionmovilizadoraqtt1refuerzo3'])->name('accionmovilizadoraqtt1refuerzo3');
Route::get('/ficherodeoportunidadest1refuerzo3/{folio}',[c_oportunidadesvisitat1refuerzo3::class, 'fc_ficherodeoportunidadest1refuerzo3'])->name('ficherodeoportunidadest1refuerzo3');
Route::get('/ficherodeoportunidadeshogart1refuerzo3/{folio}',[c_oportunidadesvisitat1refuerzo3::class, 'fc_ficherodeoportunidadeshogart1refuerzo3'])->name('ficherodeoportunidadeshogart1refuerzo3');

Route::get('/finalizaciont1refuerzo3/{folio}',[c_finalizaciont1refuerzo3::class, 'fc_finalizaciont1refuerzo3'])->name('finalizaciont1refuerzo3');
Route::get('/guardarfinalizacionest1refuerzo3',[c_finalizaciont1refuerzo3::class, 'fc_guardarfinalizacionest1refuerzo3'])->name('guardarfinalizacionest1refuerzo3');
Route::get('/actualizacionnovedadest1refuerzo3/{folio}',[c_finalizaciont1refuerzo3::class, 'fc_actualizacionnovedadest1refuerzo3'])->name('actualizacionnovedadest1refuerzo3');
Route::get('/guardaractualizacionynovedadeshogart1refuerzo3',[c_finalizaciont1refuerzo3::class, 'fc_guardaractualizacionynovedadeshogart1refuerzo3'])->name('guardaractualizacionynovedadeshogart1refuerzo3');
Route::post('/guardarfirmat1refuerzo3',[c_finalizaciont1refuerzo3::class, 'fc_guardarfirmat1refuerzo3'])->name('guardarfirmat1refuerzo3');

Route::get('/finalizarvisitat1refuerzo3',[c_finalizaciont1refuerzo3::class,'fc_finalizarvisitat1refuerzo3'])->name('finalizarvisitat1refuerzo3');
Route::get('/informevisitat1refuerzo3/{folio}',[c_finalizaciont1refuerzo3::class,'fc_informevisitat1refuerzo3'])->name('informevisitat1refuerzo3');


// rutas para editar integrantes y hogar

Route::get('/editarintegrantesgeneral/{folio}',[c_editarIntegrantesgeneral::class,'fc_integrantes'])->name('editarintegrantesgeneral');
Route::get('/leerintegrantesgeneral',[c_editarIntegrantesgeneral::class,'fc_leerintegrantes'])->name('leerintegrantesgeneral');


Route::get('/editarintegrantesdatosgeneral',[c_editarintegrantesdatosgeneral::class, 'fc_editarintegrantes'])->name('editarintegrantesdatosgeneral');
Route::get('/responderencuestadatosgeneral',[c_editarintegrantesdatosgeneral::class, 'fc_responderencuesta'])->name('responderencuestadatosgeneral'); 
Route::get('/guardarintegrantedatosgeneral',[c_editarintegrantesdatosgeneral::class, 'fc_guardarintegrante'])->name('guardarintegrantedatosgeneral');   
Route::get('/guardaravatardatosgeneral',[c_editarintegrantesdatosgeneral::class, 'fc_guardaravatar'])->name('guardaravatardatosgeneral');
Route::get('/guardaridentitariodatosgeneral',[c_editarintegrantesdatosgeneral::class, 'fc_guardaridentitario'])->name('guardaridentitariodatosgeneral');    
Route::get('/consultarrepresentantedatosgeneral',[c_editarintegrantesdatosgeneral::class, 'fc_consultarrepresentante'])->name('consultarrepresentantedatosgeneral');


Route::get('/editarencuestahogardatosgeograficos/{lineaestacion}',[c_editarhogardatosgeograficos::class,'fc_encuestahogardatosgeograficos'])->name('encuestahogardatosgeograficos');





require __DIR__.'/webfess.php'; // rutas para la sincronizacion arriba   busca las rutas en routes/sincroarriba.php
