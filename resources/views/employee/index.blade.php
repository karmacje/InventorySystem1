@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Employees</h1>

        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Create New Employee</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->firstname }} {{ $employee->lastname }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td>{{ $employee->date_of_birth }}</td>
                        <td>{{ $employee->street }}, {{ $employee->city }}, {{ $employee->province_or_state }}, {{ $employee->country }}, {{ $employee->zipcode }}</td>
                        <td>{{ $employee->department->department_name }}</td>
                        <td>{{ $employee->position->position_name }}</td>
                        <td>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <!-- Add delete button if needed -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
