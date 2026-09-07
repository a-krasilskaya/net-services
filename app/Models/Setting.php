<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['hero_title', 'hero_subtitle', 'services_button_text', 'services_link_type'];
}
