<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Display a listing of the customers.
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    // Show the form for creating a new customer.
    public function create()
    {
        return view('customers.create');
    }

    // Store a newly created customer in storage.
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'gender' => 'required|in:Male,Female,Other',
            'date_of_birth' => 'required|date',
            'street' => 'required|string',
            'city' => 'required|string',
            'province_or_state' => 'required|string',
            'country' => 'required|string',
            'zipcode' => 'required|string',
        ]);

        Customer::create($request->all());

        return redirect()->route('customers.index')
            ->with('success', 'Customer created successfully.');
    }

    // Show the form for editing the specified customer.
    public function edit(Customer $customer)
    {
        return view('customers.edit', ['customer' => $customer]);
    }

    // Update the specified customer in storage.
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'gender' => 'required|in:Male,Female,Other',
            'date_of_birth' => 'required|date',
            'street' => 'required|string',
            'city' => 'required|string',
            'province_or_state' => 'required|string',
            'country' => 'required|string',
            'zipcode' => 'required|string',
        ]);

        $customer->update($request->all());

        return redirect()->route('customers.index')
            ->with('success', 'Customer updated successfully.');
    }

    // Remove the specified customer from storage.
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')
            ->with('success', 'Customer deleted successfully.');
    }
}
