<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Oficinaedit extends Component
{
    public $datos = [];
    public $errores = [];
    public $idoficina;

    public function mount($CodOficina){
        $this->idoficina = $CodOficina;
        $oficina = Http::get('http://127.0.0.1:8000/api/oficinas/'.$CodOficina)->json();
        $this->datos = $oficina;
    }
    public function render()
    {
        return view('livewire.oficinaedit');
    }
    public function edit(){
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->put('http://127.0.0.1:8000/api/oficinas/'.$this->idoficina, $this->datos);
        if($response->successful()){
            $this->emit('editar','Oficina modificada');
            return redirect('/oficinas');
        }else{
            $this->errores = $response->json();
        }
    }
}
