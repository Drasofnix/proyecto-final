<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Vehiculoedit extends Component
{
    public $datos = [];
    public $errores = [];
    public $idVehiculo;

    public function mount($CodVehiculo){
        $this->idVehiculo = $CodVehiculo;
        $vehiculo = Http::get('http://127.0.0.1:8000/api/vehiculos/'.$CodVehiculo)->json();
        $this->datos = $vehiculo;
    }
    public function render()
    {
        return view('livewire.vehiculoedit');
    }
    public function edit(){
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->put('http://127.0.0.1:8000/api/vehiculos/'.$this->idVehiculo, $this->datos);
        if($response->successful()){
            $this->emit('editar','vehiculo modificado');
            return redirect('/vehiculos');
        }else{
            $this->errores = $response->json();
        }
    }
}
