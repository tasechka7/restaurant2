<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn('email'); // Удаление колонки email
            $table->integer('number_of_people')->after('id'); // Добавление колонки number_of_people
        });
    }

    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->string('email')->after('id'); // Восстановление email при откате миграции
            $table->dropColumn('number_of_people'); // Удаление number_of_people при откате
        });
    }
};
