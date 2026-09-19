<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GearCategory extends Model
{
    protected $fillable = ['number', 'name', 'slug', 'description', 'image', 'sort_order'];

    /** Live count of products in this category, for the Category Navigation display */
    public function productCount(): int
    {
        return Product::where('category', $this->name)->count();
    }
}
