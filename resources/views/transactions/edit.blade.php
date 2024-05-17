@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Transaction</h1>

        <form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="order_id">Order ID</label>
                <input type="number" name="order_id" class="form-control" value="{{ $transaction->order_id }}" required>
            </div>
            <div class="form-group">
                <label for="employee_id">Employee ID</label>
                <input type="number" name="employee_id" class="form-control" value="{{ $transaction->employee_id }}" required>
            </div>
            <div class="form-group">
                <label for="payment_type">Payment Type</label>
                <input type="text" name="payment_type" class="form-control" value="{{ $transaction->payment_type }}" required>
            </div>
            <div class="form-group">
                <label for="transaction_date">Transaction Date</label>
                <input type="date" name="transaction_date" class="form-control" value="{{ $transaction->transaction_date }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Transaction</button>
        </form>
    </div>
@endsection
