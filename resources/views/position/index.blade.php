@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Positions</h1>

        <a href="{{ route('positions.create') }}" class="btn btn-primary mb-3">Create New Position</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Position ID</th>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($positions as $position)
                    <tr>
                        <td>{{ $position->id }}</td>
                        <td>{{ $position->position_name }}</td>
                        <td>{{ $position->salary }}</td>
                        <td>{{ $position->position_type }}</td>
                        <td>
                            <a href="{{ route('positions.edit', $position->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <!-- Add delete button if needed -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
