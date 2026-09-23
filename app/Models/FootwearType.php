<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FootwearType extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'description', 'sort_order'];
}
