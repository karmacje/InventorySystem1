@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Transaction</h1>

        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="order_id">Order ID</label>
                <input type="number" name="order_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="employee_id">Employee ID</label>
                <input type="number" name="employee_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="payment_type">Payment Type</label>
                <input type="text" name="payment_type" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="transaction_date">Transaction Date</label>
                <input type="date" name="transaction_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Transaction</button>
        </form>
    </div>
@endsection
