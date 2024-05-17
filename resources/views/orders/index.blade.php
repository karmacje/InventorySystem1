@extends('layouts.app')

@section('content')
    <h1>All Orders</h1>

    <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Create New Order</a>

    <table class="table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Product</th>
                <th>Customer</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->product->product_name }}</td>
                    <td>{{ $order->customer->fullname }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <!-- Add delete button if needed -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
