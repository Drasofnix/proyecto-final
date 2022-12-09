<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class VehiculosController extends Controller
{
    public function obtener(){
        $vehiculos = Vehiculos::all();
        return $vehiculos;
    }

    public function crear(Request $request){
        $datos = $request -> validate($this->validationrequest());
        $vehiculos = Vehiculos::create($datos);
        return response([
            "message" => "Se creo la oficina",
            "CodVehiculo" => $vehiculos["CodVehiculo"],
        ], 201);
    }

    public function obteneruno($CodVehiculo, Request $request){
        return $vehiculos = Vehiculos::find($CodVehiculo);
    }

    public function actualizar($CodVehiculo, Request $request){
        $vehiculos = Vehiculos::find($CodVehiculo);
        if (!$vehiculos){
            return response([
                "message" => "Error: no se encontro el vehiculo con el ID: ".$CodVehiculo,
            ], 200);
        }
        $datos = $request -> validate($this->validationrequest());
        $vehiculos -> update($datos);
        return response([
            "message" => "Se actualizo el vehiculo"
        ]);
    }

    public function borrar($CodVehiculo, Request $request){
        $vehiculos = Vehiculos::find($CodVehiculo);
        if(!$vehiculos){
            return response([
                "message" => "Error: no se encontro el vehiculo con el ID: ".$CodVehiculo
            ], 200);
        }
        $vehiculos -> delete($CodVehiculo);
        return response(["message" => "Se elimino el vehiculo"]);
    }

    private function validationrequest(){
        return [
        'descripcion' => "required|string",
        ];
    }
}
