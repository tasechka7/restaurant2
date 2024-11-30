<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DrinksCategories;
use App\Http\Requests\DrinksRequest;
use App\Http\Requests\UpdateDrinksRequest;

class DrinksController extends Controller
{
    public function index()
    {
        $drinks = Drink::all();
        return view("drinks.index", compact("drinks"));
    }

    // В MenuController
    public function create()
    {
        $drink_categories = DrinksCategories::all(); // Получаем все категории меню
        return view("drinks.create", compact("drink_categories"));
    }


    public function store(DrinksRequest $request)
    {
        $validatedData = $request->validated(); // Используйте validated(), чтобы получить уже валидированные данные

        $drink = new Drink();
        $drink->fill($validatedData); // Заполняем модель данными из запроса
        $drink->slug = Str::slug($drink->name);

        // Сохраняем фото, если оно есть
        if ($request->hasFile('photo')) {
            $drink->photo = $request->file('photo')->store('drinks', 'public');
        }

        $drink->save(); // Сохраняем блюдо

        return redirect()->route('drinks.index')->with('success', 'Menu item added successfully!');
    }


    public function edit($id)
    {
        $drinks_categories = DrinksCategories::all(); 
        $drink = Drink::findOrFail($id);
        return view("drinks.edit", compact("drink", "drinks_categories"));
    }
    public function update($id, UpdateDrinksRequest $request)
    {
        $drink = Drink::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('drinks', 'public');
        }

        $drink->update($data);

        return redirect()->route("drinks.index")->with("success", "Menu item updated successfully.");
    }


    public function delete($id)
    {
        $drink = Drink::findOrFail($id);
        return view("drinks.delete", compact("drink"));
    }

    public function destroy($id)
    {
        $drink = Drink::findOrFail($id);
        $drink->delete();
        return redirect()->route("drinks.index")->with("success", "Menu item deleted successfully.");
    }
}
