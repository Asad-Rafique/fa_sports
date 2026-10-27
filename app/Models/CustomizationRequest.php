<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomizationRequest extends Model
{
    protected $fillable = [
        'selected_sections',
        'customizations',
        'name',
        'email',
        'phone',
        'status',
    ];

    protected $casts = [
        'selected_sections' => 'array',
        'customizations' => 'array',
    ];
}