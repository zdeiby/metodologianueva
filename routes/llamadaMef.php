<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LlamadasMefController;

Route::middleware(['web'])->group(function () {
    Route::prefix('efectividadMef/llamadas-mef')->group(function () {
        // Listado general de llamadas
        Route::get('/', [LlamadasMefController::class, 'index'])->name('llamadas-mef.index');
        
        // Rutas específicas primero (para evitar conflictos con {folio})
        Route::get('/create', [LlamadasMefController::class, 'create'])->name('llamadas-mef.create');
        
        // APIs para gestión de hogares (rutas específicas)
        Route::get('/gestiones/{folio}/historial', [LlamadasMefController::class, 'historial'])->name('llamadas-mef.historial');
        Route::post('/gestiones/{folio}/llamadas', [LlamadasMefController::class, 'storeLlamada'])->name('llamadas-mef.llamadas.store');
        
        // CRUD de llamadas individuales
        Route::post('/', [LlamadasMefController::class, 'store'])->name('llamadas-mef.store');
        Route::get('/{llamada}/edit', [LlamadasMefController::class, 'edit'])->name('llamadas-mef.edit')->where('llamada', '[0-9]+');
        Route::put('/{llamada}', [LlamadasMefController::class, 'update'])->name('llamadas-mef.update')->where('llamada', '[0-9]+');
        Route::delete('/{llamada}', [LlamadasMefController::class, 'destroy'])->name('llamadas-mef.destroy')->where('llamada', '[0-9]+');
        
        // Gestión de hogares - Ruta con folio (DEBE IR AL FINAL)
        Route::get('/{folio}', [LlamadasMefController::class, 'gestion'])->name('llamadas-mef.gestion');
    });
});
