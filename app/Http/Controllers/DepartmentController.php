<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // Display a listing of the departments.
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    // Show the form for creating a new department.
    public function create()
    {
        return view('departments.create');
    }

    // Store a newly created department in storage.
    public function store(Request $request)
    {
        $request->validate([
            'department_name' => 'required|string',
            'description' => 'nullable|string',
        ]);

        Department::create($request->all());

        return redirect()->route('departments.index')
            ->with('success', 'Department created successfully.');
    }

    // Show the form for editing the specified department.
    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    // Update the specified department in storage.
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'department_name' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $department->update($request->all());

        return redirect()->route('departments.index')
            ->with('success', 'Department updated successfully.');
    }

    // Remove the specified department from storage.
    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('departments.index')
            ->with('success', 'Department deleted successfully.');
    }
}
