<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Reservashow extends Component
{
    public $idReserva;
    public function mount($CodReserva){
        $this->idReserva = $CodReserva;
    }
    public function render()
    {
        $reserva = Http::get('http://127.0.0.1:8000/api/reservas/'.$this->idReserva)->json();
        return view('livewire.reservashow', compact('reserva'));
    }
}
