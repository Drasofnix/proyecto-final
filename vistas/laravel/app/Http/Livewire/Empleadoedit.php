<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Empleadoedit extends Component
{
    public $datos = [];
    public $errores = [];
    public $idEmpleado;

    public function mount($CodEmpleado){
        $this->idEmpleado = $CodEmpleado;
        $Empleado = Http::get('http://127.0.0.1:8000/api/empleados/'.$CodEmpleado)->json();
        $this->datos = $Empleado;
    }
    public function render()
    {
        return view('livewire.empleadoedit');
    }
    public function edit(){
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->put('http://127.0.0.1:8000/api/empleados/'.$this->idEmpleado, $this->datos);
        if($response->successful()){
            $this->emit('editar','Empleado modificado');
            return redirect('/empleados');
        }else{
            $this->errores = $response->json();
        }
    }
}
