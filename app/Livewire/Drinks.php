<?php

namespace App\Livewire;

use App\Models\Drink;
use Livewire\Component;
use App\Models\DrinksCategories;

class Drinks extends Component
{
    public $drinks; // Список блюд
    public $categories; // Список категорий
    public $selectedCategory = null; // ID выбранной категории

    // Метод вызывается при инициализации компонента
    public function mount()
    {
        $this->categories = DrinksCategories::all(); // Загружаем категории
    
        // Если выбранная категория не задана, по умолчанию выбираем первую
        if (!$this->selectedCategory && $this->categories->isNotEmpty()) {
            $this->selectedCategory = $this->categories->first()->id;
        }
    
        $this->loadMenus(); // Загружаем блюда
    }

    // Метод для обновления блюд при выборе категории
    public function selectCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
        $this->loadMenus();
    }

    // Метод для загрузки блюд
    public function loadMenus()
    {
        $query = Drink::with('category'); // Запрос с подгрузкой категорий

        if ($this->selectedCategory) {
            $query->where('category_id', $this->selectedCategory);
        }

        $this->drinks = $query->get();
    }

    // Метод рендера
    public function render()
    {
        return view('livewire.drinks');
    }
}
