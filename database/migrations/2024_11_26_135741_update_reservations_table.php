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
        Schema::table('reservations', function (Blueprint $table) {
            // Пример изменений:
            // Если нужно изменить колонку "phone", можно использовать метод "change":
            $table->string('phone')->change();

            // Если нужно изменить тип колонки, например, "time":
            $table->time('time')->change();

            // Добавить новые колонки или изменить существующие
            $table->enum('reservation_type', ['Business Lunch', 'Dinner', 'Event', 'Private Event'])
                  ->default('Business Lunch')
                  ->change();

            // Можно также добавлять новые колонки
            // $table->text('new_column')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            // Если необходимо откатить изменения
            $table->dropColumn('new_column'); // Удаление колонки
            // Другие откаты (например, изменения типов данных)
        });
    }
};
