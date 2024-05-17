@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Category Details</h1>

        <div class="card">
            <div class="card-header">
                {{ $category->category_name }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">{{ $category->description }}</p>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
