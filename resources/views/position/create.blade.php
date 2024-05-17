@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Position</h1>

        <form action="{{ route('positions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="position_name">Position Name</label>
                <input type="text" name="position_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="number" name="salary" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="position_type">Position Type</label>
                <select name="position_type" class="form-control" required>
                    <option value="Full-time">Full-time</option>
                    <option value="Part-time">Part-time</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create Position</button>
        </form>
    </div>
@endsection
