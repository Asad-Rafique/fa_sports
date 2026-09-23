<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'icon',
        'category',
        'is_playbook',
        'sort_order',
    ];

    protected $casts = [
        'is_playbook' => 'boolean',
    ];

    /**
     * PLAYBOOK PRINCIPLES
     */
    public function scopePlaybook($query)
    {
        return $query
            ->where('is_playbook', true)
            ->orderBy('sort_order');
    }

    /**
     * LEGACY — PHILOSOPHY
     */
    public function scopePhilosophy($query)
    {
        return $query
            ->where('category', 'philosophy')
            ->orderBy('sort_order');
    }

    /**
     * LEGACY — CODE
     */
    public function scopeCode($query)
    {
        return $query
            ->where('category', 'code')
            ->orderBy('sort_order');
    }
}