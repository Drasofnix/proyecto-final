<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Vehiculoshow extends Component
{
    public $idVehiculo;
    public function mount($CodVehiculo){
        $this->idVehiculo = $CodVehiculo;
    }
    public function render()
    {
        $vehiculo = Http::get('http://127.0.0.1:8000/api/vehiculos/'.$this->idVehiculo)->json();
        return view('livewire.vehiculoshow', compact('vehiculo'));
    }
}
