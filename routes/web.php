<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\DrinksController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MenusCategoriesController;
use App\Http\Controllers\DrinksCategoriesController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/drink', function () {
    return view('drink');
})->name('drink');

Route::get('/ourNews', function () {
    return view('ourNews');
})->name('ourNews');

Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');




Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/menus')->controller(MenuController::class)->group(function () {
    Route::get('/', 'index')->name('menus.index'); // Просмотр всех меню
    Route::get('/create', 'create')->name('menus.create'); // Страница добавления нового меню
    Route::get("/{id}/edit", 'edit')->name("menus.edit"); // Страница редактирования меню
    Route::get("/{id}/delete", 'delete')->name("menus.delete"); // Удаление меню
    Route::put("/{id}", 'update')->name("menus.update"); // Обновление меню
    Route::delete("/{id}", 'destroy')->name("menus.destroy"); // Удаление меню
    Route::post('/', 'store')->name('menus.store'); // Сохранение нового меню
});

// Категории меню (Menu Categories routes)
Route::prefix('/menu/categories')->controller(MenusCategoriesController::class)->group(function () {
    Route::get('/', 'index')->name('categories.menu.index'); // Просмотр всех категорий меню
    Route::get('/create', 'create')->name('categories.menu.create'); // Страница добавления категории меню
    Route::get("/{id}/edit", 'edit')->name("categories.menu.edit"); // Страница редактирования категории меню
    Route::get("/{id}/delete", 'delete')->name("categories.menu.delete"); // Удаление категории меню
    Route::put("/{id}", 'update')->name("categories.menu.update"); // Обновление категории меню
    Route::delete("/{id}", 'destroy')->name("categories.menu.destroy"); // Удаление категории меню
    Route::post('/', 'store')->name('categories.menu.store'); // Сохранение новой категории меню
});

// Напитки (Drinks routes)
Route::prefix('/drinks')->controller(DrinksController::class)->group(function () {
    Route::get('/', 'index')->name('drinks.index'); // Просмотр всех напитков
    Route::get('/create', 'create')->name('drinks.create'); // Страница добавления нового напитка
    Route::get("/{id}/edit", 'edit')->name("drinks.edit"); // Страница редактирования напитка
    Route::get("/{id}/delete", 'delete')->name("drinks.delete"); // Удаление напитка
    Route::put("/{id}", 'update')->name("drinks.update"); // Обновление напитка
    Route::delete("/{id}", 'destroy')->name("drinks.destroy"); // Удаление напитка
    Route::post('/', 'store')->name('drinks.store'); // Сохранение нового напитка
});

// Категории напитков (Drink Categories routes)
Route::prefix('/drinks/categories')->controller(DrinksCategoriesController::class)->group(function () {
    Route::get('/', 'index')->name('categories.drinks.index'); // Просмотр всех категорий напитков
    Route::get('/create', 'create')->name('categories.drinks.create'); // Страница добавления категории напитков
    Route::get("/{id}/edit", 'edit')->name("categories.drinks.edit"); // Страница редактирования категории напитков
    Route::get("/{id}/delete", 'delete')->name("categories.drinks.delete"); // Удаление категории напитков
    Route::put("/{id}", 'update')->name("categories.drinks.update"); // Обновление категории напитков
    Route::delete("/{id}", 'destroy')->name("categories.drinks.destroy"); // Удаление категории напитков
    Route::post('/', 'store')->name('categories.drinks.store'); // Сохранение новой категории напитков
});

// Новости (News routes)
Route::prefix('/news')->controller(NewsController::class)->group(function () {
    Route::get('/', 'index')->name('news.index'); // Просмотр всех новостей
    Route::get('/create', 'create')->name('news.create'); // Страница добавления новой новости
    Route::get("/{id}/edit", 'edit')->name("news.edit"); // Страница редактирования новости
    Route::get("/{id}/delete", 'delete')->name("news.delete"); // Удаление новости
    Route::put("/{id}", 'update')->name("news.update"); // Обновление новости
    Route::delete("/{id}", 'destroy')->name("news.destroy"); // Удаление новости
    Route::post('/', 'store')->name('news.store'); // Сохранение новой новости
});

// Резервации (Reservations routes)
Route::prefix('/reservations')->controller(ReservationController::class)->group(function () {
    Route::get('/', 'index')->name('reservations.index'); // Просмотр всех резерваций
    Route::get('/create', 'create')->name('reservations.create'); // Страница добавления новой резервации
    Route::get("/{id}/edit", 'edit')->name("reservations.edit"); // Страница редактирования резервации
    Route::get("/{id}/delete", 'delete')->name("reservations.delete"); // Удаление резервации
    Route::put("/{id}", 'update')->name("reservations.update"); // Обновление резервации
    Route::delete("/{id}", 'destroy')->name("reservations.destroy"); // Удаление резервации
    Route::post('/', 'store')->name('reservations.store'); // Сохранение новой резервации
    Route::patch('//{id}/status', [ReservationController::class, 'updateStatus'])->name('reservations.updateStatus');

});


require __DIR__ . '/auth.php';
