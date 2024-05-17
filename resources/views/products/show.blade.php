@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Product Details</h2>
    <div>
        <p><strong>Product Name:</strong> {{ $product->product_name }}</p>
        <p><strong>Ingredients:</strong> {{ $product->ingredients }}</p>
        <p><strong>Price:</strong> {{ $product->price }}</p>
        <p><strong>Stock:</strong> {{ $product->stock }}</p>
        <p><strong>Manufactured Date:</strong> {{ $product->manufactured_date }}</p>
        <p><strong>Expiry Date:</strong> {{ $product->expiry_date }}</p>
        <p><strong>Category:</strong> {{ $product->category->category_name }}</p>
    </div>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
</div>
@endsection
