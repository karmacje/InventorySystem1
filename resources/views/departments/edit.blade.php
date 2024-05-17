@extends('layouts.app')

@section('content')
    <h2>Edit Department: {{ $department->department_name }}</h2>

    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="department_name">Department Name:</label>
            <input type="text" class="form-control" id="department_name" name="department_name" value="{{ $department->department_name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $department->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Department</button>
    </form>
@endsection
