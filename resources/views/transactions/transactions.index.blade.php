@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Transactions</h1>

        <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">Create New Transaction</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Order ID</th>
                    <th>Employee ID</th>
                    <th>Payment Type</th>
                    <th>Transaction Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->order_id }}</td>
                        <td>{{ $transaction->employee_id }}</td>
                        <td>{{ $transaction->payment_type }}</td>
                        <td>{{ $transaction->transaction_date }}</td>
                        <td>
                            <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <!-- Add delete button if needed -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
