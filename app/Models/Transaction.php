<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'order_id',
        'employee_details_id',
        'payment_type',
        'transaction_date',
    ];

    protected $dates = ['transaction_date'];

    // Define relationship with Order model
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Define relationship with Employee model (assuming `EmployeeDetails`)
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_details_id');
    }
}
