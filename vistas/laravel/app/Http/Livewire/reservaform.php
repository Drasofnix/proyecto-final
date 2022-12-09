<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Reservaedit extends Component
{
    public $datos = [];
    public $errores = [];

    public function mount($CodReserva){
        $reserva = Http::get('http://127.0.0.1:8000/api/reservas/'.$CodReserva)->json();
        $this->datos = $reserva;
    }
    public function render()
    {
        return view('livewire.reservaform');
    }
}
