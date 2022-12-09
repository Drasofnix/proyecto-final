<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Vehiculos extends Component
{
    public $idVehiculo;
    public $listeners = ['eliminar'];

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/vehiculos');
        $vehiculos = $response->json();
        return view('livewire.vehiculos', compact('vehiculos'));
    }

    public function ConfirmarEliminacion($id){
        $this->idVehiculo = $id;
        $this->emit('delete', 'Desea eliminar este vehiculo?');

    }

    public function eliminar(){
        Http::delete('http://127.0.0.1:8000/api/vehiculos/'.$this->idVehiculo);
    }
}
