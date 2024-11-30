<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MenusCategories;

class DishesCategory extends Component
{
    public $menu_categories;
    public function mount()
    {
        $this->menu_categories = MenusCategories::all(); // Загрузка категорий
    }
    public function render()
    {
        return view('livewire.dishes-category');
    }
}
