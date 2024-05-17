<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    // Display a listing of the suppliers.
    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index', compact('suppliers'));
    }

    // Show the form for creating a new supplier.
    public function create()
    {
        return view('suppliers.create');
    }

    // Store a newly created supplier in storage.
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

        Supplier::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'street' => $request->street,
            'city' => $request->city,
            'province_or_state' => $request->province_or_state,
            'country' => $request->country,
            'zipcode' => $request->zipcode,
        ]);

        return redirect()->route('suppliers.index')
            ->with('success', 'Supplier created successfully.');
    }

    // Show the form for editing the specified supplier.
    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit', compact('supplier'));
    }

    // Update the specified supplier in storage.
    public function update(Request $request, Supplier $supplier)
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

        $supplier->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'street' => $request->street,
            'city' => $request->city,
            'province_or_state' => $request->province_or_state,
            'country' => $request->country,
            'zipcode' => $request->zipcode,
        ]);

        return redirect()->route('suppliers.index')
            ->with('success', 'Supplier updated successfully.');
    }

    // Remove the specified supplier from storage.
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->route('suppliers.index')
            ->with('success', 'Supplier deleted successfully.');
    }
}