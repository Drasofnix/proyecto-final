<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contador extends Component
{
    public $valor = 0;
    public $nombre;
    public function render()
    {
        return view('livewire.contador');
    }
    public function incrementar(){
        $this->valor++;
    }
    public function decrementar(){
        if($this->valor != 0){
            $this->valor--;
        }
    }
}
