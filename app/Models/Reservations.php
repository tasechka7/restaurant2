<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'number_of_people',
        'message',
        'reservation_type',
        'date',
        'time',
        'status', // Новое поле
    ];
    
    public static function getReservationTypes()
    {
        $result = DB::select("SHOW COLUMNS FROM reservations WHERE Field = 'reservation_type'");
        $type = $result[0]->Type; // Извлекаем тип поля ENUM
        preg_match('/enum\((.*)\)/', $type, $matches); // Находим значения ENUM
        $enumValues = str_getcsv($matches[1], ',', "'"); // Преобразуем строку в массив
        return $enumValues;
    }
    
}
