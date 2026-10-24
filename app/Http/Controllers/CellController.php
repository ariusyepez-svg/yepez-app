<?php

namespace App\Http\Controllers;

use App\Models\Cell;
use App\Http\Requests\CreateCellRequest;
use Illuminate\Http\Request;

class CellController extends Controller
{
    public function index_GET()
    {
        $cellsDb = Cell::all();
        return view('cells.index', compact('cellsDb'));
    }

    public function create_GET()
    {
        return view('cells.create');
    }

    public function store_POST(CreateCellRequest $request)
    {
        Cell::create($request->all());
        return redirect('/cells');
    }

    public function show_GET(Cell $cell)
    {
        return view('cells.show', compact('cell'));
    }

    public function edit_GET(Cell $cell)
    {
        return view('cells.edit', compact('cell'));
    }

    public function update_PUT(Cell $cell, CreateCellRequest $request)
    {
        $cell->update($request->all());
        return redirect('/cells');
    }

    public function destroy_DELETE(Cell $cell)
    {
        $cell->delete();
        return redirect('/cells');
    }
}
