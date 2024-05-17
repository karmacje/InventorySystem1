@extends('layouts.app')

@section('content')
    <h2>Create New Department</h2>

    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="department_name">Department Name:</label>
            <input type="text" class="form-control" id="department_name" name="department_name" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Department</button>
    </form>
@endsection
