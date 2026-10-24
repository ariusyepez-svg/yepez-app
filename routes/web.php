<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CellController;

Route::get('/', function () {
    return view('welcome');
});

// --- RUTAS PARA EL MÓDULO PRODUCTOS ---
Route::get('/productos', [ProductoController::class, 'index_GET'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class, 'create_GET']);
Route::post('/productos', [ProductoController::class, 'store_POST'])->name('productos.store');
Route::get('/productos/{producto}', [ProductoController::class, 'show_GET'])->name('productos.show');
Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit_GET'])->name('productos.edit');
Route::put('/productos/{producto}', [ProductoController::class, 'update_PUT'])->name('productos.update');
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy_DELETE'])->name('productos.destroy');

// --- RUTAS PARA EL MÓDULO CELLS ---
Route::get('/cells', [CellController::class, 'index_GET'])->name('cells.index');
Route::get('/cells/create', [CellController::class, 'create_GET']);
Route::post('/cells', [CellController::class, 'store_POST'])->name('cells.store');
Route::get('/cells/{cell}', [CellController::class, 'show_GET'])->name('cells.show');
Route::get('/cells/{cell}/edit', [CellController::class, 'edit_GET'])->name('cells.edit');
Route::put('/cells/{cell}', [CellController::class, 'update_PUT'])->name('cells.update');
Route::delete('/cells/{cell}', [CellController::class, 'destroy_DELETE'])->name('cells.destroy');
