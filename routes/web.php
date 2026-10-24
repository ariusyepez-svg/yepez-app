<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CellController;

// --- RUTAS PARA EL MÓDULO CELLS ---
Route::get('/cells', [CellController::class, 'index_GET'])->name('cells.index');
Route::get('/cells/create', [CellController::class, 'create_GET']);
Route::post('/cells', [CellController::class, 'store_POST'])->name('cells.store');
Route::get('/cells/{cell}', [CellController::class, 'show_GET'])->name('cells.show');

// Ruta para abrir el formulario de edición (Pág. 6 de la separata)
Route::get('/cells/{cell}/edit', [CellController::class, 'edit_GET'])->name('cells.edit');

// Ruta para procesar la actualización de datos (Pág. 6 de la separata)
Route::put('/cells/{cell}', [CellController::class, 'update_PUT'])->name('cells.update');

Route::delete('/cells/{cell}', [CellController::class, 'destroy_DELETE'])->name('cells.destroy');
