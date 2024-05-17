<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Inventory System</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center mb-6">Welcome to Inventory System</h1>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
            <a href="{{ route('customers.index') }}" class="bg-gray-200 hover:bg-gray-300 rounded p-4 block text-center text-gray-800 font-semibold">Customer Management</a>
            <a href="{{ route('products.index') }}" class="bg-gray-200 hover:bg-gray-300 rounded p-4 block text-center text-gray-800 font-semibold">Product Management</a>
            <a href="{{ route('orders.index') }}" class="bg-gray-200 hover:bg-gray-300 rounded p-4 block text-center text-gray-800 font-semibold">Order Management</a>
            <a href="{{ route('suppliers.index') }}" class="bg-gray-200 hover:bg-gray-300 rounded p-4 block text-center text-gray-800 font-semibold">Supplier Management</a>
            <a href="{{ route('transactions.index') }}" class="bg-gray-200 hover:bg-gray-300 rounded p-4 block text-center text-gray-800 font-semibold">Transaction Management</a>
            <a href="{{ route('employees.index') }}" class="bg-gray-200 hover:bg-gray-300 rounded p-4 block text-center text-gray-800 font-semibold">Employee Management</a>
        </div>
    </div>
</body>
</html>
