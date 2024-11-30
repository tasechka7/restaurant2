<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\DrinksCategories;

class DrinkCategory extends Component
{
    public $drink_categories;
    public function mount()
    {
        $this->drink_categories = DrinksCategories::all(); // Загрузка категорий
    }
    public function render()
    {
        return view('livewire.drink-category');
    }
}
