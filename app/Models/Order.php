<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_id',
        'customer_id',
        'quantity',
        'status',
        'total_amount',
    ];

    // Define relationships with Product and Customer models
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
