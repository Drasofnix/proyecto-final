<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Reservas extends Component
{
    public $idReserva;
    public $listeners = ['eliminar'];

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/reservas');
        $reservas = $response->json();
        return view('livewire.reservas', compact('reservas'));
    }

    public function ConfirmarEliminacion($id){
        $this->idReserva = $id;
        $this->emit('delete', 'Desea eliminar esta reserva?');

    }

    public function eliminar(){
        Http::delete('http://127.0.0.1:8000/api/reservas/'.$this->idReserva);
    }
}
