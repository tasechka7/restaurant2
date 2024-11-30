<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); // ID бронирования
            $table->string('name');  // Имя клиента
            $table->string('phone');  // Телефон клиента (тип string вместо integer)
            $table->string('email');  // Электронная почта клиента
            $table->text('message');  // Сообщение от клиента
            $table->enum('reservation_type', ['Бизнес ланч', 'Ужин', 'Событие', 'Частное мероприятие'])
                  ->default('Бизнес ланч'); // Тип бронирования с дефолтным значением
            $table->date('date');  // Дата бронирования
            $table->string('time');
              // Время бронирования (храним как строку)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
