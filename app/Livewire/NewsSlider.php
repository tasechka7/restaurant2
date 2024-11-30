<?php

namespace App\Livewire;

use App\Models\Newss;
use Livewire\Component;

class NewsSlider extends Component
{
    public $news;
    public function mount()
{
    $this->news = Newss::all(); // Преобразуем в массив
}

    public function render()
    {
        return view('livewire.news-slider');
    }
}
