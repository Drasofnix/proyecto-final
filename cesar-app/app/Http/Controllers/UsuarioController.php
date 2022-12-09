<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UsuarioController extends Controller
{
    public function obtener(){
        $usuarios = Usuario::all();
        // $usuarios = Usuario::paginate(20);
        // $usuarios = Usuario::count();
        // $usuarios = Usuario::select('name','email')->get()->take(5);
        // $usuarios = Usuario::where('peso','>=',100)->get()->take(10);
        // $usuarios = Usuario::where('id','=',29)->first();
        // $usuarios = Usuario::where('id', '>', 10)->where('peso','>', 100)->get();
        // $usuarios = Usuario::where('id', '>', 10)->orWhere('peso','>', 100)->get();
        // $usuarios = Usuario::orderBy('peso','asc')->get();

        return $usuarios;
    }

    public function crear(Request $request){
        $datos = $request -> validate($this->validationrequest());
        $usuario = Usuario::create($datos);
        return response([
            "message" => "Se creo el usuario",
            "id" => $usuario["id"],
        ], 201);
    }

    public function actualizar($id, Request $request){
        $usuario = Usuario::find($id);
        if (!$usuario){
            return response([
                "message" => "Error: no se encontro el usuario con el ID: ".$id,
            ], 200);
        }
        $datos = $request -> validate($this->validationrequest());
        $usuario -> update($datos);
        return response([
            "message" => "Se actualizo el usuario"
        ]);
    }

    public function borrar($id, Request $request){
        $usuario = Usuario::find($id);
        if(!$usuario){
            return response([
                "message" => "Error: no se encontro al usuario con el ID: ".$id
            ], 200);
        }
        $usuario -> delete($id);
        return response(["message" => "Se elimino al usuario"]);
    }

    public function obtenercodigo($id, Request $request){
        $usuario = Usuario::find($id);
        if(!$usuario){
            return response([
                "message" => "Error: no se encontro al usuario con el ID: ".$id
            ], 200);
        }
        $dato = Str::random(64);
        $usuario -> update(["codigo_verificacion" => $dato]);
        return response([
            "message" => "Su codigo es: " .$dato
        ]);
    }

    public function cambiarPassword($id, Request $request){
        $usuario = Usuario::find($id);
        if(!$usuario){
            return response([
                "message" => "Error: no se encontro al usuario con el ID: ".$id
            ], 200);
        }else if(!$usuario["codigo_verificacion"]){
            return response([
                "message" => "Imposible cambiar contraseña"
            ], 200);
        }else if($request["codigo_verificacion"] == $usuario["codigo_verificacion"]){
            $usuario -> update(["password" => $request["password"], "codigo_verificacion" => ""]);
            return response([
                "message" => "Contraseña actualizada"
            ]);
        }
        return response([
                "message" => "Codigo incorrecto"
            ], 200);
    }

    private function validationrequest(){
        return [
        'name' => "required|string",
        'email' => "required|email",
        'password' => "required|min:8",
        'peso' => "required|numeric",
        ];
    }
}
