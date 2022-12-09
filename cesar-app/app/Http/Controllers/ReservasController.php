<?php

namespace App\Http\Controllers;

use App\Models\Reservas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReservasController extends Controller
{
    public function obtener(){
        $reservas = Reservas::with(["Empleados:CodEmpleado,nombre,apellido","Vehiculos:CodVehiculo,descripcion"])-> get();
        return response ($reservas, 200);
    }

    public function crear(Request $request){
        $datos = $request -> validate($this->validationrequest());
        $reservas = Reservas::create($datos);
        return response([
            "message" => "Se creo la reservacion",
            "CodReserva" => $reservas["CodReserva"],
        ], 201);
    }

    public function obteneruno($CodReserva, Request $request){
        return $reservas = Reservas::with(["Empleados:CodEmpleado,nombre,apellido","Vehiculos:CodVehiculo,descripcion"])->find($CodReserva);
    }

    public function actualizar($CodReserva, Request $request){
        $reservas = Reservas::find($CodReserva);
        if (!$reservas){
            return response([
                "message" => "Error: no se encontro la reservacion con el ID: ".$CodReserva,
            ], 200);
        }
        $datos = $request -> validate($this->validationrequest());
        $reservas -> update($datos);
        return response([
            "message" => "Se actualizo la reservacion"
        ]);
    }

    public function borrar($CodReserva, Request $request){
        $reservas = Reservas::find($CodReserva);
        if(!$reservas){
            return response([
                "message" => "Error: no se encontro la reservacion con el ID: ".$CodReserva
            ], 200);
        }
        $reservas -> delete($CodReserva);
        return response(["message" => "Se elimino la reservacion"]);
    }

    private function validationrequest(){
        return [
            'CodVehiculo' => "required|integer",
            'fecha' => "required|date",
            'destino' => "required|string",
            'kilometros' => "required|integer",
            'CodEmpleado' => "required|integer",
        ];
    }
}
