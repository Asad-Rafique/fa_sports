<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaybookCategory extends Model
{
    protected $fillable = ['number', 'name', 'slug', 'description', 'sort_order'];
}
