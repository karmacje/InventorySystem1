@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Category</h1>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" class="form-control" id="category_name" name="category_name" value="{{ old('category_name') }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
