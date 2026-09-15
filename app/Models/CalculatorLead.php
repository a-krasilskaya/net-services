<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalculatorLead extends Model
{
    protected $fillable = ['calculator', 'input_data', 'calculated_price', 'name', 'phone', 'email'];

    protected $casts = [
        'input_data' => 'array',
    ];
}
