@extends('layouts.app')

@section('content')
    <div class="row mb-3">
        <div class="col-md-6">
            <h2>Departments</h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('departments.create') }}" class="btn btn-primary">Add New Department</a>
        </div>
    </div>

    @if ($departments->isEmpty())
        <p>No departments found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>{{ $department->department_name }}</td>
                        <td>{{ $department->description }}</td>
                        <td>
                            <a href="{{ route('departments.show', $department->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this department?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
