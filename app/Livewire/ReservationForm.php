<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Reservations;

class ReservationForm extends Component
{

    

    public $reservations;
    
    public function mount()
    {
        $this->reservations = Reservations::all(); // Загрузка категорий
    }
    public function render()
    {
        return view('livewire.reservation-form');
    }
}
