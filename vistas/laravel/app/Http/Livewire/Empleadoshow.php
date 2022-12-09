<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Empleadoshow extends Component
{
    public $idEmpleado;
    public function mount($CodEmpleado){
        $this->idEmpleado = $CodEmpleado;
    }
    public function render()
    {
        $empleado = Http::get('http://127.0.0.1:8000/api/empleados/'.$this->idEmpleado)->json();
        return view('livewire.empleadoshow', compact('empleado'));
    }
}
