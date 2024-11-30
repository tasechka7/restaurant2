<?php

namespace App\Models;

use App\Models\DrinksCategories;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'ingredients',
        'price',
        'category_id',
        'photo',
    ];

    public function category()
    {
        return $this->belongsTo(DrinksCategories::class);
    }
}
