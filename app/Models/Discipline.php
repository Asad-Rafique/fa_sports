<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'tagline', 'cover_image', 'cover_video', 'sort_order',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
