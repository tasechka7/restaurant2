<?php

namespace App\Livewire;

use App\Models\Newss;
use Livewire\Component;
use Carbon\Carbon;

class NewsSlider extends Component
{
    public $news;

    public function mount()
    {
        // Загружаем новости и форматируем дату
        $this->news = Newss::all()->map(function ($newsItem) {
            $newsItem->formattedDate = Carbon::parse($newsItem->date)->format('d M Y');
            return $newsItem;
        });
    }

    public function render()
    {
        return view('livewire.news-slider');
    }
}

