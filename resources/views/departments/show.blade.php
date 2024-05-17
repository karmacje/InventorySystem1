@extends('layouts.app')

@section('content')
    <h2>Department: {{ $department->department_name }}</h2>

    <p><strong>ID:</strong> {{ $department->id }}</p>
    <p><strong>Name:</strong> {{ $department->department_name }}</p>
    <p><strong>Description:</strong> {{ $department->description }}</p>

    <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-primary">Edit</a>

    <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this department?')">Delete</button>
    </form>
@endsection
