<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Reservaedit extends Component
{
    public $datos = [];
    public $errores = [];
    public $idReserva;

    public function mount($CodReserva){
        $this->idReserva = $CodReserva;
        $reserva = Http::get('http://127.0.0.1:8000/api/reservas/'.$CodReserva)->json();
        $this->datos = $reserva;
    }
    public function render()
    {
        return view('livewire.reservaedit');
    }
    public function edit(){
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->put('http://127.0.0.1:8000/api/reservas/'.$this->idReserva, $this->datos);
        if($response->successful()){
            $this->emit('editar','reserva modificada');
            return redirect('/reservas');
        }else{
            $this->errores = $response->json();
        }
    }
}
