@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Categories</h1>

        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Create New Category</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                           
                            <form action="{{}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
