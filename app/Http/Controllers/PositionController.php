<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    // Display a listing of the positions.
    public function index()
    {
        $positions = Position::all();
        return view('positions.index', compact('positions'));
    }

    // Show the form for creating a new position.
    public function create()
    {
        return view('positions.create');
    }

    // Store a newly created position in storage.
    public function store(Request $request)
    {
        $request->validate([
            'position_name' => 'required|string',
            'salary' => 'required|numeric|min:0',
            'position_type' => 'required|string',
        ]);

        Position::create($request->all());

        return redirect()->route('positions.index')
            ->with('success', 'Position created successfully.');
    }

    // Show the form for editing the specified position.
    public function edit(Position $position)
    {
        return view('positions.edit', compact('position'));
    }

    // Update the specified position in storage.
    public function update(Request $request, Position $position)
    {
        $request->validate([
            'position_name' => 'required|string',
            'salary' => 'required|numeric|min:0',
            'position_type' => 'required|string',
        ]);

        $position->update($request->all());

        return redirect()->route('positions.index')
            ->with('success', 'Position updated successfully.');
    }

    // Remove the specified position from storage.
    public function destroy(Position $position)
    {
        $position->delete();

        return redirect()->route('positions.index')
            ->with('success', 'Position deleted successfully.');
    }
}
