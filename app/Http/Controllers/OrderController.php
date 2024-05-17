<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Display a listing of the orders.
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    // Show the form for creating a new order.
    public function create()
    {
        // You can pass any necessary data to the view for creating a new order
        return view('orders.create');
    }

    // Store a newly created order in storage.
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_id' => 'required|exists:customers,id',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|string',
            'total_amount' => 'required|numeric|min:0',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')
            ->with('success', 'Order created successfully.');
    }

    // Show the form for editing the specified order.
    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    // Update the specified order in storage.
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_id' => 'required|exists:customers,id',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|string',
            'total_amount' => 'required|numeric|min:0',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index')
            ->with('success', 'Order updated successfully.');
    }

    // Remove the specified order from storage.
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')
            ->with('success', 'Order deleted successfully.');
    }
}
