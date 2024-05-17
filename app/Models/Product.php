<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name',
        'ingredients',
        'price',
        'stock',
        'manufactured_date',
        'expiry_date',
        'category_id', // Assuming you have a category_id foreign key
    ];

    protected $dates = [
        'manufactured_date',
        'expiry_date',
    ];

    // Define the relationship with Category (assuming one-to-many)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
