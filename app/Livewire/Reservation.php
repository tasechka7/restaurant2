<?php

namespace App\Livewire;

use App\Models\Reservations;
use Livewire\Component;

class Reservation extends Component
{

    
    public $reservations;
    public function mount()
    {
        $this->reservations = Reservations::all(); // Загрузка категорий
    }
    public function render()
    {
        return view('livewire.reservation');
    }
}
