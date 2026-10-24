<?php

namespace App\Http\Controllers;

use App\Models\Cell;
use App\Http\Requests\CreateCellRequest; // Usando las validaciones aprendidas
use Illuminate\Http\Request;

class CellController extends Controller
{
    // Listar registros en la tabla
    public function index_GET()
    {
        $cellsDb = Cell::all();
        return view('cells.index', compact('cellsDb'));
    }

    // Mostrar formulario de creación
    public function create_GET()
    {
        return view('cells.create');
    }

    // Guardar usando asignación masiva validada (Pág. 1 del CRUD optimizado)
    public function store_POST(CreateCellRequest $request)
    {
        Cell::create($request->all());
        return redirect('/cells');
    }

    // Mostrar informe detallado
    public function show_GET(Cell $cell)
    {
        return view('cells.show', compact('cell'));
    }

    // Buscar y mostrar el formulario de edición (Pág. 5 y 6 de la separata)
    public function edit_GET(Cell $cell)
    {
        return view('cells.edit', compact('cell'));
    }

    // Procesar la actualización por asignación masiva (Pág. 6 de la separata)
    public function update_PUT(Cell $cell, CreateCellRequest $request)
    {
        $cell->update($request->all());
        return redirect('/cells');
    }

    // Eliminar registro de MySQL Workbench
    public function destroy_DELETE(Cell $cell)
    {
        $cell->delete();
        return redirect('/cells');
    }
}
