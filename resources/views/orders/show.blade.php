@extends('layouts.app')

@section('content')
    <h1>Order Details</h1>

    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>Product:</strong> {{ $order->product->product_name }}</p>
    <p><strong>Customer:</strong> {{ $order->customer->fullname }}</p>
    <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
    <p><strong>Status:</strong> {{ $order->status }}</p>
    <!-- Add more order details here -->

    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-primary">Edit</a>
    <!-- Add delete button if needed -->
@endsection
