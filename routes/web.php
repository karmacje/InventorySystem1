<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\DepartmentController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::resource('customers', CustomerController::class);
Route::resource('categories', CategoryController::class);
Route::resource('suppliers', SupplierController::class);
Route::resource('transactions', TransactionController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('positions', PositionController::class);
Route::resource('orders', OrderController::class);
Route::resource('departments', DepartmentController::class);

// Display a listing of the products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Show the form for creating a new product
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Store a newly created product in storage
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Show the form for editing the specified product
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Update the specified product in storage
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Remove the specified product from storage
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


// Display a listing of the customers
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

// Show the form for creating a new customer
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');

// Store a newly created customer in storage
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');

// Show the form for editing the specified customer
Route::get('customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');

// Update the specified customer in storage
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');

// Remove the specified customer from storage
Route::delete('customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');



// Display a listing of the categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Show the form for creating a new category
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

// Store a newly created category in the database
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

// Show the form for editing the specified category
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

// Update the specified category in the database
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

// Remove the specified category from the database
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');




// Display a listing of the departments
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');

// Show the form for creating a new department
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');

// Store a newly created department in the database
Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');

// Show the form for editing the specified department
Route::get('/departments/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');

// Update the specified department in the database
Route::put('/departments/{department}', [DepartmentController::class, 'update'])->name('departments.update');

// Remove the specified department from the database
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');



// Display a listing of the employees
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

// Show the form for creating a new employee
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');

// Store a newly created employee in the database
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');

// Show the form for editing the specified employee
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');

// Update the specified employee in the database
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');

// Remove the specified employee from the database
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');




// Display a listing of the orders
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

// Show the form for creating a new order
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');

// Store a newly created order in the database
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

// Show the form for editing the specified order
Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');

// Update the specified order in the database
Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');

// Remove the specified order from the database
Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');



// Display a listing of the positions
Route::get('/positions', [PositionController::class, 'index'])->name('positions.index');

// Show the form for creating a new position
Route::get('/positions/create', [PositionController::class, 'create'])->name('positions.create');

// Store a newly created position in the database
Route::post('/positions', [PositionController::class, 'store'])->name('positions.store');

// Show the form for editing the specified position
Route::get('/positions/{position}/edit', [PositionController::class, 'edit'])->name('positions.edit');

// Update the specified position in the database
Route::put('/positions/{position}', [PositionController::class, 'update'])->name('positions.update');

// Remove the specified position from the database
Route::delete('/positions/{position}', [PositionController::class, 'destroy'])->name('positions.destroy');




// Display a listing of the suppliers
Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers.index');

// Show the form for creating a new supplier
Route::get('/suppliers/create', [SupplierController::class, 'create'])->name('suppliers.create');

// Store a newly created supplier in the database
Route::post('/suppliers', [SupplierController::class, 'store'])->name('suppliers.store');

// Show the form for editing the specified supplier
Route::get('/suppliers/{supplier}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');

// Update the specified supplier in the database
Route::put('/suppliers/{supplier}', [SupplierController::class, 'update'])->name('suppliers.update');

// Remove the specified supplier from the database
Route::delete('/suppliers/{supplier}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');




// Display a listing of the transactions
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');

// Show the form for creating a new transaction
Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');

// Store a newly created transaction in the database
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');

// Show the form for editing the specified transaction
Route::get('/transactions/{transaction}/edit', [TransactionController::class, 'edit'])->name('transactions.edit');

// Update the specified transaction in the database
Route::put('/transactions/{transaction}', [TransactionController::class, 'update'])->name('transactions.update');

// Remove the specified transaction from the database
Route::delete('/transactions/{transaction}', [TransactionController::class, 'destroy'])->name('transactions.destroy');
