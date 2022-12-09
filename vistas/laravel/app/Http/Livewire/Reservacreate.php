<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Reservacreate extends Component
{
    public $datos = [];
    public $errores = [];
    public function render()
    {
        return view('livewire.reservacreate');
    }

    public function crear(){
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->post('http://127.0.0.1:8000/api/reservas',$this->datos);
        if($response->successful()){
            $this->emit('editar','Se reservo correctamente');
            return redirect('/reservas');
        }else{
            $this->errores = $response->json();
        }
    }
}
