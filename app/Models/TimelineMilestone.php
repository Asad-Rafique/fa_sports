<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimelineMilestone extends Model
{
    protected $fillable = [
        'year', 'title', 'slug', 'description', 'image', 'product_image',
        'achievement', 'category', 'milestone_type', 'sort_order', 'status',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published')->orderBy('sort_order');
    }
}
