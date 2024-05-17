@extends('layouts.app')

@section('content')
    <h1>Edit Order</h1>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="product_id">Product</label>
            <select name="product_id" class="form-control" required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}" {{ $order->product_id === $product->id ? 'selected' : '' }}>
                        {{ $product->product_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="customer_id">Customer</label>
            <select name="customer_id" class="form-control" required>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $order->customer_id === $customer->id ? 'selected' : '' }}>
                        {{ $customer->fullname }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{ $order->quantity }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Order</button>
    </form>
@endsection
