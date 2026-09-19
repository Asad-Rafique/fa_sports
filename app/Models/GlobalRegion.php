<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalRegion extends Model
{
    protected $fillable = [
        'region',
        'market',
        'product_system',
        'partnership',
        'context',
        'map_x',
        'map_y',
        'sort_order',
    ];

    public function scopeForContact($query)
    {
        return $query->where('context', 'contact')
                     ->orderBy('sort_order');
    }
}