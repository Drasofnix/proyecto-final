<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Oficinas extends Component
{
    public $idOficina;
    public $listeners = ['eliminar'];

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/oficinas');
        $oficinas = $response->json();
        return view('livewire.oficinas', compact('oficinas'));
    }

    public function ConfirmarEliminacion($id){
        $this->idOficina = $id;
        $this->emit('delete', 'Desea eliminar esta oficina?');

    }

    public function eliminar(){
        Http::delete('http://127.0.0.1:8000/api/oficinas/'.$this->idOficina);
    }
}
