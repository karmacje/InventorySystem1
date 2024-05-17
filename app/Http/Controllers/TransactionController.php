<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Order; // Assuming Order model is used in transactions
use App\Models\Employee; // Assuming Employee model is used in transactions
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // Display a listing of the transactions.
    public function index()
    {
        $transactions = Transaction::all();
        return view('transactions.index', compact('transactions'));
    }

    // Show the form for creating a new transaction.
    public function create()
    {
        // You can pass any necessary data to the view for creating a new transaction
        $orders = Order::all();
        $employees = Employee::all();
        return view('transactions.create', compact('orders', 'employees'));
    }

    // Store a newly created transaction in storage.
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'employee_details_id' => 'required|exists:employees,id',
            'payment_type' => 'required|string',
            'transaction_date' => 'required|date',
        ]);

        Transaction::create($request->all());

        return redirect()->route('transactions.index')
            ->with('success', 'Transaction created successfully.');
    }

    // Show the form for editing the specified transaction.
    public function edit(Transaction $transaction)
    {
        // You can pass any necessary data to the view for editing a transaction
        $orders = Order::all();
        $employees = Employee::all();
        return view('transactions.edit', compact('transaction', 'orders', 'employees'));
    }

    // Update the specified transaction in storage.
    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'employee_details_id' => 'required|exists:employees,id',
            'payment_type' => 'required|string',
            'transaction_date' => 'required|date',
        ]);

        $transaction->update($request->all());

        return redirect()->route('transactions.index')
            ->with('success', 'Transaction updated successfully.');
    }

    // Remove the specified transaction from storage.
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('transactions.index')
            ->with('success', 'Transaction deleted successfully.');
    }
}
