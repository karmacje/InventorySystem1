<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department; // Assuming Department model is used for employee departments
use App\Models\Position; // Assuming Position model is used for employee positions
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Display a listing of the employees.
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    // Show the form for creating a new employee.
    public function create()
    {
        // You can pass any necessary data to the view for creating a new employee
        $departments = Department::all();
        $positions = Position::all();
        return view('employees.create', compact('departments', 'positions'));
    }

    // Store a newly created employee in storage.
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'middlename' => 'nullable|string',
            'gender' => 'required|in:Male,Female,Other',
            'date_of_birth' => 'required|date',
            'street' => 'required|string',
            'city' => 'required|string',
            'province_or_state' => 'required|string',
            'country' => 'required|string',
            'zipcode' => 'required|string',
            'department_id' => 'required|exists:departments,id',
            'position_id' => 'required|exists:positions,id',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Employee created successfully.');
    }

    // Show the form for editing the specified employee.
    public function edit(Employee $employee)
    {
        // You can pass any necessary data to the view for editing an employee
        $departments = Department::all();
        $positions = Position::all();
        return view('employees.edit', compact('employee', 'departments', 'positions'));
    }

    // Update the specified employee in storage.
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'middlename' => 'nullable|string',
            'gender' => 'required|in:Male,Female,Other',
            'date_of_birth' => 'required|date',
            'street' => 'required|string',
            'city' => 'required|string',
            'province_or_state' => 'required|string',
            'country' => 'required|string',
            'zipcode' => 'required|string',
            'department_id' => 'required|exists:departments,id',
            'position_id' => 'required|exists:positions,id',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully.');
    }

    // Remove the specified employee from storage.
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully.');
    }
}
