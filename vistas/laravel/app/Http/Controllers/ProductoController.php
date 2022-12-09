<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class ProductoController extends Controller
{
    public function obtenerProducto(){
        $response = Http::get('http://127.0.0.1:8000/api/producto');
        $productos = $response->json();
        return View('productos', compact('productos'));
    }
}
