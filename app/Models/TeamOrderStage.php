<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamOrderStage extends Model
{
    protected $fillable = ['step_number', 'name', 'description'];
}
