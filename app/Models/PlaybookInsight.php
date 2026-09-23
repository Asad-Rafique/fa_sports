<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaybookInsight extends Model
{
    protected $fillable = ['label', 'metric', 'description', 'sort_order'];
}
