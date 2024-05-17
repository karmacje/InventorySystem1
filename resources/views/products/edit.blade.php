@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Product</h2>
    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}" required>
        </div>
        <div class="form-group">
            <label for="ingredients">Ingredients</label>
            <textarea class="form-control" id="ingredients" name="ingredients" required>{{ $product->ingredients }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>
        </div>
        <div class="form-group">
            <label for="manufactured_date">Manufactured Date</label>
            <input type="date" class="form-control" id="manufactured_date" name="manufactured_date" value="{{ $product->manufactured_date }}" required>
        </div>
        <div class="form-group">
            <label for="expiry_date">Expiry Date</label>
            <input type="date" class="form-control" id="expiry_date" name="expiry_date" value="{{ $product->expiry_date }}" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection
