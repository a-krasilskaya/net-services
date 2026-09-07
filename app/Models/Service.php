<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'icon', 'image', 'image_alt', 'order', 'meta_title', 'meta_description'];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->title);
            }
        });
    }
}