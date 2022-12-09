<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Empleados extends Component
{
    public $idEmpleado;
    public $listeners = ['eliminar'];

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/empleados');
        $empleados = $response->json();
        return view('livewire.empleados', compact('empleados'));
    }

    public function ConfirmarEliminacion($id){
        $this->idEmpleado = $id;
        $this->emit('delete', 'Desea eliminar este empleado?');

    }

    public function eliminar(){
        Http::delete('http://127.0.0.1:8000/api/empleados/'.$this->idEmpleado);
    }
}
