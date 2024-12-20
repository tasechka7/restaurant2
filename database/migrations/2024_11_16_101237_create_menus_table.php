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
        Schema::create('menus', function (Blueprint $table) {
            $table->id(); // ID блюда
            $table->string('name')->unique(); // Название блюда
            $table->string('slug')->unique(); // Слаг
            $table->text('ingredients'); // Ингредиенты (список или описание)
            $table->integer('weight'); // Вес блюда в граммах
            $table->integer('price'); // Цена блюда
            $table->string('photo'); // Путь к изображению
            $table->foreignId('category_id')->constrained('menus_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
