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
            $table->text('message')->nullable();  // Сообщение от клиента
            $table->enum('reservation_type', ['Business Lunch', 'Dinner', 'Event', 'Private Event'])
                  ->default('Business Lunch'); 
                  $table->integer('number_of_people')->default(1);// Тип бронирования с дефолтным значением
            $table->date('date');  // Дата бронирования
            $table->string('time');
            $table->enum('status', ['in_processing', 'confirmed'])->default('in_processing');
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
