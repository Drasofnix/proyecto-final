<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmpleadosController extends Controller
{
    public function obtener(){
        $empleados = Empleados::with(["Oficinas:CodOficina,Direccion"])->get();
        return response($empleados, 200);
    }

    public function crear(Request $request){
        $datos = $request -> validate($this->validationrequest());
        $empleados = Empleados::create($datos);
        return response([
            "message" => "Se creo el empleado",
            "CodEmplado" => $empleados["CodEmplado"],
        ], 201);
    }

    public function obteneruno($CodEmplado, Request $request){
        return $empleados = Empleados::with(["Oficinas:CodOficina,Direccion"])->find($CodEmplado);
    }

    public function actualizar($CodEmplado, Request $request){
        $empleados = Empleados::find($CodEmplado);
        if (!$empleados){
            return response([
                "message" => "Error: no se encontro el empleado con el ID: ".$CodEmplado,
            ], 200);
        }
        $datos = $request -> validate($this->validationrequest());
        $empleados -> update($datos);
        return response([
            "message" => "Se actualizo el empleado"
        ]);
    }

    public function borrar($CodEmplado, Request $request){
        $empleados = Empleados::find($CodEmplado);
        if(!$empleados){
            return response([
                "message" => "Error: no se encontro el empleado con el ID: ".$CodEmplado
            ], 200);
        }
        $empleados -> delete($CodEmplado);
        return response(["message" => "Se elimino el empleado"]);
    }

    private function validationrequest(){
        return [
            'CodOficina' => "required|integer",
            'nombre' => "required|string",
            'apellido' => "required|string",
            'salario' => "required|integer",
            'fecha' => "required|date",
        ];
    }
}
