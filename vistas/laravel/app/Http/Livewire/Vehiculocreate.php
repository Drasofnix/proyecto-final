<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Vehiculocreate extends Component
{
    public $datos = [];
    public $errores = [];
    public function render()
    {
        return view('livewire.vehiculocreate');
    }

    public function crear(){
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->post('http://127.0.0.1:8000/api/vehiculos',$this->datos);
        if($response->successful()){
            $this->emit('editar','Se registro correctamente');
            return redirect('/vehiculos');
        }else{
            $this->errores = $response->json();
        }
    }
}
