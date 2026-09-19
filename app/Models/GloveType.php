<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GloveType extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'labels', 'sort_order'];

    protected $casts = [
        'labels' => 'array',
    ];
}
