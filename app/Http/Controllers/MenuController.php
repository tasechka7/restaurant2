<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\MenusCategories;
use App\Http\Requests\MenuRequest;
use App\Http\Requests\CreateMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Http\Controllers\MenusCategoriesController;

class MenuController extends Controller
{
    public function index() {
        $menus = Menu::all();
        return view("menus.index", compact("menus"));
    }

    // В MenuController
public function create() {
    $menu_categories = MenusCategories::all(); // Получаем все категории меню
    return view("menus.create", compact("menu_categories"));
}


public function store(MenuRequest $request)
{
    $validatedData = $request->validated(); // Используйте validated(), чтобы получить уже валидированные данные

    $menu = new Menu();
    $menu->fill($validatedData); // Заполняем модель данными из запроса
    $menu->slug = Str::slug($menu->name);

    // Сохраняем фото, если оно есть
    if ($request->hasFile('photo')) {
        $menu->photo = $request->file('photo')->store('menus', 'public');
    }

    $menu->save(); // Сохраняем блюдо

    return redirect()->route('menus.index')->with('success', 'Menu item added successfully!');
}


    public function edit($id) {
        $menu_categories = MenusCategories::all();
        $menu = Menu::findOrFail($id);
        return view("menus.edit", compact("menu_categories", "menu") );
    }
    public function update($id, UpdateMenuRequest $request)
{
    $menu = Menu::findOrFail($id);
    $data = $request->validated();
    if ($request->hasFile('photo')) {
        $data['photo'] = $request->file('photo')->store('menus', 'public');
    }

    $menu->update($data);

    return redirect()->route("menus.index")->with("success", "Menu item updated successfully.");
}


    public function delete($id) {
        $menu = Menu::findOrFail($id);
        return view("menus.delete", compact("menu"));
    }

    public function destroy($id) {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return redirect()->route("menus.index")->with("success", "Menu item deleted successfully.");
    }
}
