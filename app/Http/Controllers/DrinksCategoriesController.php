<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrinksCategories;
use App\Http\Controllers\Controller;
use App\Http\Requests\DrinksCategoriesRequest;
use App\Http\Requests\UpdateDrinksCategoryRequest;

class DrinksCategoriesController extends Controller
{
    public function index() {
        $drink_categories = DrinksCategories::all();
        return view("categories.drinks.index", compact("drink_categories"));
    }

    public function show($id) {
        $drink_category = DrinksCategories::findOrFail($id);
        return view("categories.drinks.show", compact("drink_category"));
    }

    public function create() {
        return view("categories.drinks.create");
    }

    public function store(DrinksCategoriesRequest $request) {
        $data = $request->validated();
        DrinksCategories::create($data);
        return redirect()->route("categories.drinks.index")->with("success", "Category created successfully.");
    }

    public function edit($id) {
        $drink_category = DrinksCategories::findOrFail($id);
        return view("categories.drinks.edit", compact("drink_category"));
    }

    public function update($id, UpdateDrinksCategoryRequest $request) {
        $drink_category = DrinksCategories::findOrFail($id);
        $data = $request->validated();
        $drink_category->update($data);
        return redirect()->route("categories.drinks.index")->with("success", "Category updated successfully.");
    }

    public function delete($id) {
        $drink_category = DrinksCategories::findOrFail($id);
        return view("categories.drinks.delete", compact("drink_category"));
    }

    public function destroy($id) {
        $drink_category = DrinksCategories::findOrFail($id);
        $drink_category->delete();
        return redirect()->route("categories.drinks.index")->with("success", "Category deleted successfully.");
    }
}
