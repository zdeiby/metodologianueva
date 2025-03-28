<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ffes\c_caracterizacion;


Route::get('/caracterizacionffes',[c_caracterizacion::class,'fc_caracterizacion'])->name('caracterizacionffes');
