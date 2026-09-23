<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchiveItem extends Model
{
    protected $fillable = ['title', 'slug', 'era', 'category', 'description', 'image', 'sort_order'];
}
