<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomizeRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'sport',
        'kit_type',
        'team_name',
        'contact_name',
        'email',
        'phone',
        'primary_color',
        'secondary_color',
        'accent_color',
        'player_name',
        'player_number',
        'logo_required',
        'player_names',
        'player_numbers',
        'quantity',
        'fabric',
        'performance_requirements',
        'logo_path',
        'additional_requirements',
        'status',
    ];

    protected $casts = [
        'logo_required' => 'boolean',
        'player_names' => 'boolean',
        'player_numbers' => 'boolean',
        'quantity' => 'integer',
    ];
}