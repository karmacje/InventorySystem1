@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Customers</h1>

        <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Create New Customer</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
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
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->firstname }}</td>
                        <td>{{ $customer->middlename }}</td>
                        <td>{{ $customer->lastname }}</td>
                        <td>{{ $customer->gender }}</td>
                        <td>{{ $customer->date_of_birth }}</td>
                        <td>{{ $customer->street }}</td>
                        <td>{{ $customer->city }}</td>
                        <td>{{ $customer->province_or_state }}</td>
                        <td>{{ $customer->country }}</td>
                        <td>{{ $customer->zipcode }}</td>
                        <td>
                        
                            <a href="{{route('customers.edit', ['customer' => $customer])}}">Edit</a>
                            <form action="{{ route('customers.destroy', ['customer' => $customer]) }}" method="POST" style="display:inline;">
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
