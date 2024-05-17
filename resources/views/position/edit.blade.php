@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Position</h1>

        <form action="{{ route('positions.update', $position->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="position_name">Position Name</label>
                <input type="text" name="position_name" class="form-control" value="{{ $position->position_name }}" required>
            </div>
            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="number" name="salary" class="form-control" value="{{ $position->salary }}" required>
            </div>
            <div class="form-group">
                <label for="position_type">Position Type</label>
                <select name="position_type" class="form-control" required>
                    <option value="Full-time" {{ $position->position_type === 'Full-time' ? 'selected' : '' }}>Full-time</option>
                    <option value="Part-time" {{ $position->position_type === 'Part-time' ? 'selected' : '' }}>Part-time</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Position</button>
        </form>
    </div>
@endsection
