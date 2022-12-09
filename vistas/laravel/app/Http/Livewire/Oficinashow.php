<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Oficinashow extends Component
{
    public $idoficina;
    public function mount($CodOficina){
        $this->idoficina = $CodOficina;
    }
    public function render()
    {
        $oficina = Http::get('http://127.0.0.1:8000/api/oficinas/'.$this->idoficina)->json();
        return view('livewire.oficinashow', compact('oficina'));
    }
}
