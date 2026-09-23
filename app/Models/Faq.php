<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['question', 'answer', 'page', 'sort_order'];

    public function scopeForPage($query, string $page)
    {
        return $query->where('page', $page)->orderBy('sort_order');
    }
}
