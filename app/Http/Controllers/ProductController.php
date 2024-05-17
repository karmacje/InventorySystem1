<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a listing of the products.
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    // Show the form for creating a new product.
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    // Store a newly created product in storage.
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string',
            'ingredients' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'manufactured_date' => 'required|date',
            'expiry_date' => 'required|date',
            'category_id' => 'required|exists:categories,id', // Ensure category_id exists in categories table
        ]);

        $product = new Product($request->all());
        $product->save();

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    // Show the form for editing the specified product.
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    // Update the specified product in storage.
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required|string',
            'ingredients' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'manufactured_date' => 'required|date',
            'expiry_date' => 'required|date',
            'category_id' => 'required|exists:categories,id', // Ensure category_id exists in categories table
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    // Remove the specified product from storage.
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}