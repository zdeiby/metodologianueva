<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ffes\c_caracterizacion;
use App\Http\Controllers\ffes\c_caracterizacionhogar;

Route::get('/caracterizacionffes',[c_caracterizacion::class,'fc_caracterizacion'])->name('caracterizacionffes');
Route::get('/caracterizacionffeshogar',[c_caracterizacionhogar::class,'fc_caracterizacionhogar'])->name('caracterizacionffeshogar');
