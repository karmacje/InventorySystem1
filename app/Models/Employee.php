<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
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
        'department_id',
        'position_id',
    ];

    protected $dates = ['date_of_birth'];

    // Define relationship with Department and Position models
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
