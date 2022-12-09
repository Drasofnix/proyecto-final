<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LogInController extends Controller
{
    /*public function LogIn($email, $password, Request $request){
        $usuario = Usuario::where("email","=",$email)->where("password","=",$password)->first();
        if (!$usuario){
            return response([
                "message" => "Error: no se encontro el usuario con el ID: ".$id,
            ], 200);
        }else{
            return $usuario;
        }
    }*/

    public function LogIn(Request $request){
        $data = $request -> validate([
            'email' => "required|email",
            'password' => "required|min:2",
        ]);
        $usuario = Usuario::where("email","=",$data['email'])->where("password","=",$data['password'])->first();
        if (!$usuario){
            return response([
                "message" => "Error: no se encontro el usuario con el correo: ".$data('email'),
            ], 200);
        }

        $token = $usuario ->createToken('token_name')->plainTextToken;
        return response([
            'usuario' => $usuario,
            'token' => $token,
        ]);
    }
}
