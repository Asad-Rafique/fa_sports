<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'discipline_id',
        'series',
        'name',
        'slug',
        'description',
        'specs',
        'colors',
        'sizes',
        'price',
        'image',
        'gallery',
        'performance_index',
        'show_performance_index',
        'is_featured',
        'is_storytelling',
        'is_white_section',
        'sort_order',
    ];

    protected $casts = [
        'specs' => 'array',
        'colors' => 'array',
        'sizes' => 'array',
        'gallery' => 'array',
        'performance_index' => 'array',

        'show_performance_index' => 'boolean',
        'is_featured' => 'boolean',
        'is_storytelling' => 'boolean',
        'is_white_section' => 'boolean',

        'price' => 'decimal:2',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Query Scopes
    |--------------------------------------------------------------------------
    */

    /**
     * Active products.
     */
    public function scopeActive($query)
    {
        return $query;
    }

    /**
     * Storytelling / featured performance products.
     */
    public function scopeStorytelling($query)
    {
        return $query
            ->where('is_storytelling', true)
            ->orderBy('sort_order');
    }

    /**
     * Main performance gear catalog.
     */
    public function scopeCatalog($query, $category = null)
    {
        return $query
            ->where('is_storytelling', false)
            ->when($category, function ($q) use ($category) {
                $q->where('category', $category);
            })
            ->orderBy('sort_order');
    }

    /**
     * New products.
     */
    public function scopeNewIn($query)
    {
        return $query
            ->orderByDesc('created_at');
    }
}