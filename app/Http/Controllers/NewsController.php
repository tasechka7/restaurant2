<?php

namespace App\Http\Controllers;


use App\Models\Newss;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\UpdateMenuRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Http\Requests\NewsRequest;  // Подключаем кастомный Request для валидации

class NewsController extends Controller
{
    public function index() {
        $news = Newss::all();
        return view("news.index", compact("news"));
    }

    // В MenuController
public function create() {
    
    return view("news.create");
}


public function store(NewsRequest $request)
{
    $validatedData = $request->validated(); // Используйте validated(), чтобы получить уже валидированные данные

    $new = new Newss();
    $new->fill($validatedData); // Заполняем модель данными из запроса
    $new->slug = Str::slug($new->name);

    // Сохраняем фото, если оно есть
    if ($request->hasFile('photo')) {
        $new->photo = $request->file('photo')->store('news', 'public');
    }

    $new->save(); // Сохраняем блюдо

    return redirect()->route('news.index')->with('success', 'Menu item added successfully!');
}


    public function edit($id) {
        $new = Newss::findOrFail($id);
        return view("news.edit", compact("new"));
    }
    public function update($id, UpdateNewsRequest $request)
{
    $new = Newss::findOrFail($id);
    $data = $request->validated();

    if ($request->hasFile('photo')) {
        $data['photo'] = $request->file('photo')->store('news', 'public');
    }

    $new->update($data);

    return redirect()->route("news.index")->with("success", "Menu item updated successfully.");
}


    public function delete($id) {
        $new = Newss::findOrFail($id);
        return view("news.delete", compact("new"));
    }

    public function destroy($id) {
        $new = Newss::findOrFail($id);
        $new->delete();
        return redirect()->route("news.index")->with("success", "Menu item deleted successfully.");
    }
}
