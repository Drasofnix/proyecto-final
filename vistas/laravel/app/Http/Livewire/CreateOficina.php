<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CreateOficina extends Component
{
    public $datos = [];
    public $errores = [];
    public function render()
    {
        return view('livewire.CreateOficina');
    }

    public function crear(){
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->post('http://127.0.0.1:8000/api/oficinas',$this->datos);
        if($response->successful()){
            $this->emit('editar','Se creo la oficina correctamente');
            return redirect('/oficinas');
        }else{
            $this->errores = $response->json();
        }
    }
}
