<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'middlename',
        'gender',
        'date_of_birth',
        'street',
        'city',
        'province_or_state',
        'country',
        'zipcode',
    ];

    protected $dates = ['date_of_birth'];
}