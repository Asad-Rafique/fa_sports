<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialSample extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'image', 'sort_order'];
}
