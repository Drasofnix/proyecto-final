<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class VentaController extends Controller
{
    public function obtener3(){
        $ventas = Venta::with(["Usuario:id,name","Producto:id,nombre_producto,descripcion"]) -> get();
        return response($ventas, 200);
    }

    public function crear3(Request $request){
        $datos = $request -> validate($this->validationrequest());
        $ventas = Venta::create($datos);
        return response([
            "message" => "Se creo la venta",
            "id" => $ventas["id"],
        ], 200);
    }

    public function actualizar3($id, Request $request){
        $ventas = Venta::find($id);
        if (!$ventas){
            return response([
                "message" => "Error: no se encontro la venta con el ID: ".$id,
            ], 200);
        }
        $datos = $request -> validate($this->validationrequest());
        $ventas -> update($datos);
        return response([
            "message" => "Se actualizo la venta"
        ]);
    }

    public function borrar3($id, Request $request){
        $ventas = Venta::find($id);
        if(!$ventas){
            return response([
                "message" => "Error: no se encontro la venta con el ID: ".$id
            ], 200);
        }
        $ventas -> delete($id);
        return response(["message" => "Se elimino la venta"]);
    }

    private function validationrequest(){
        return [
            'id_usuario' => "required|integer",
            'id_producto' => "required|integer",
            'fecha_compra' => "required|date",
        ];
    }
}
