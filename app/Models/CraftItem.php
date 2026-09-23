<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CraftItem extends Model
{
    protected $fillable = ['section', 'number', 'title', 'description', 'sort_order'];

    public function scopeSection($query, string $section)
    {
        return $query->where('section', $section)->orderBy('sort_order');
    }
}
