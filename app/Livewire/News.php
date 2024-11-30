<?php

namespace App\Livewire;

use App\Models\Newss;
use Livewire\Component;

class News extends Component
{
    public $news;
    public function mount()
    {
        $this->news = Newss::all(); // Загрузка категорий
    }
    public function render()
    {
        return view('livewire.news');
    }
}
