<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenusCategories;
use App\Http\Requests\MenusCategoriesRequest;

class MenusCategoriesController extends Controller
{
    public function index() {
        $menu_categories = MenusCategories::all();
        return view("categories.menu.index", compact("menu_categories"));
    }

    public function show($id) {
        $menu_category = MenusCategories::findOrFail($id);
    return view("categories.menu.show", compact("menu_category"));
    }

    public function create() {
        return view("categories.menu.create");
    }

    public function store(MenusCategoriesRequest $request) {
        $data = $request->validated();
        MenusCategories::create($data);
        return redirect()->route("categories.menu.index")->with("success", "Category created successfully.");
    }

    public function edit($id) {
        $menu_category = MenusCategories::findOrFail($id);
        return view("categories.menu.edit", compact("menu_category"));
    }

    public function update($id, MenusCategoriesRequest $request) {
        $menu_category = MenusCategories::findOrFail($id);
        $data = $request->validated();
        $menu_category->update($data);
        return redirect()->route("categories.menu.index")->with("success", "Category updated successfully.");
    }

    public function delete($id) {
        $menu_category = MenusCategories::findOrFail($id);
        return view("categories.menu.delete", compact("menu_category"));
    }

    public function destroy($id) {
        $menu_category = MenusCategories::findOrFail($id);
        $menu_category->delete();
        return redirect()->route("categories.menu.index")->with("success", "Category deleted successfully.");
    }
}
