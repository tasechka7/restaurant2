<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newss extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'photo',
        'date',
    ];

    protected $table = 'news';
    // Дополнительные методы или связи, если нужно
}
