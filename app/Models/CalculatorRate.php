<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalculatorRate extends Model
{
    protected $fillable = ['calculator', 'key', 'label', 'price', 'unit'];
}
