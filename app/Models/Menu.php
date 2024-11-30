<?php

namespace App\Models;

use App\Models\MenusCategories;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name', 'slug', 'ingredients', 'weight', 'price', 'photo', 'category_id'];

    public function category()
    {
        return $this->belongsTo(MenusCategories::class);
    }
}

