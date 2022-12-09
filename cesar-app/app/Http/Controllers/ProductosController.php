<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Routing\Controller;

class ProductosController extends Controller
{
    public function obtener2(){
        $productos = Producto::all();
        return response($productos, 200);
    }

    public function crearProducto(Request $request){
        $datos = $request->validate($this->validationrequest());
        $new_producto = Producto::create($datos);
        return response([
            "message"=>"Se creo el nuevo producto",
            "id" => $new_producto["id"],
        ],201);
    }

    public function actualizar_producto($id, Request $request){
        $producto = Producto::find($id);
        if (!$producto){
            return response([
                "message" => "No se encontro el producto con el ID: ".$id
            ], 200);
        }
        $datos = $request -> validate($this->validationrequest());
        $producto->update($datos);
        return response([
            "message" => "Producto actualizado"
        ]);
    }

    public function deleteProducto($id, Request $request){
        $producto = Producto::find($id);
        if(!$producto){
            return response([
                "message" => "No se encontro el producto con el ID: ".$id
            ], 200);
        }
        $producto -> delete($id);
        return response(["message" => "Producto eliminado"]);
    }

    private function validationrequest(){
        return [
            "nombre_producto" => "required|string",
            "precio" => "required|numeric",
            "cantidad" => "required|integer",
            "descripcion" => "required|string",
        ];
    }
}
