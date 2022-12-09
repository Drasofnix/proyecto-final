<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Empleadocreate extends Component
{
    public $datos = [];
    public $errores = [];
    public function render()
    {
        return view('livewire.empleadocreate');
    }

    public function crear(){
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->post('http://127.0.0.1:8000/api/empleados',$this->datos);
        if($response->successful()){
            $this->emit('editar','Se creo el nuevo empleado correctamente');
            return redirect('/empleados');
        }else{
            $this->errores = $response->json();
        }
    }
}
