<?php

namespace App\Http\Controllers;

use App\Models\Oficinas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OficinasController extends Controller
{
    public function obtener(){
        $oficinas = Oficinas::all();
        return $oficinas;
    }

    public function crear(Request $request){
        $datos = $request -> validate($this->validationrequest());
        $oficinas = Oficinas::create($datos);
        return response([
            "message" => "Se creo la oficina",
            "CodOficina" => $oficinas["CodOficina"],
        ], 201);
    }

    public function obteneruno($CodOficina, Request $request){
        return $oficinas = Oficinas::find($CodOficina);
    }

    public function actualizar($CodOficina, Request $request){
        $oficinas = Oficinas::find($CodOficina);
        if (!$oficinas){
            return response([
                "message" => "Error: no se encontro la oficina con el ID: ".$CodOficina,
            ], 200);
        }
        $datos = $request -> validate($this->validationrequest());
        $oficinas -> update($datos);
        return response([
            "message" => "Se actualizo la oficina"
        ]);
    }

    public function borrar($CodOficina, Request $request){
        $oficinas = Oficinas::find($CodOficina);
        if(!$oficinas){
            return response([
                "message" => "Error: no se encontro la oficina con el ID: ".$CodOficina
            ], 200);
        }
        $oficinas -> delete($CodOficina);
        return response(["message" => "Se elimino la oficina"]);
    }

    private function validationrequest(){
        return [
        'Direccion' => "required|string",
        'Localidad' => "required|string",
        'Provincia' => "required|string",
        ];
    }
}
