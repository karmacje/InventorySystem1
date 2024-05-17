@extends('layouts.app')

@section('content')
    <h1>Suppliers</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Add Supplier</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Street</th>
                <th>City</th>
                <th>Province/State</th>
                <th>Country</th>
                <th>Zip Code</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->firstname }}</td>
                    <td>{{ $supplier->lastname }}</td>
                    <td>{{ $supplier->gender }}</td>
                    <td>{{ $supplier->date_of_birth }}</td>
                    <td>{{ $supplier->street }}</td>
                    <td>{{ $supplier->city }}</td>
                    <td>{{ $supplier->province_or_state }}</td>
                    <td>{{ $supplier->country }}</td>
                    <td>{{ $supplier->zipcode }}</td>
                    <td>
                        <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="11">No suppliers found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
