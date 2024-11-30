<?php

namespace App\Models;

use App\Models\Drinks;
use Illuminate\Database\Eloquent\Model;

class DrinksCategories extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function drinks()
    {
        return $this->hasMany(Drinks::class);
    }
}
