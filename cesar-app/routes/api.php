<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\OficinasController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\EstudianteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function(){

});
Route::get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/saludo', function() {
    return 'hola';
});
Route::post('/saludo', function() {
    return 'se creo un saludo en la base de datos';
});
Route::get('/validaciondeedad/{edad}', function($edad) {
    if($edad <= 0 || $edad > 100){
        return "Tas vivo?";
    }else if($edad >= 18){
        return "ya puedes ir al antro";
    }else{
        return "Tas chiquito";
    }
});

Route::get('/usuario', [UsuarioController::class, "obtener"]);
Route::post('/usuario', [UsuarioController::class, "crear"]);
Route::put('/usuario/{id}', [UsuarioController::class, "actualizar"]);
Route::delete('/usuario/{id}', [UsuarioController::class, "borrar"]);
Route::put('/usuario/nuevocodigo/{id}', [UsuarioController::class, "obtenercodigo"]);
Route::put('/usuario/cambio/{id}', [UsuarioController::class, "cambiarPassword"]);

Route::get('/producto', [ProductosController::class, "obtener2"]);
Route::post('/producto', [ProductosController::class, "crearProducto"]);
Route::put('/producto/{id}', [ProductosController::class, "actualizar_producto"]);
Route::delete('/producto/{id}', [ProductosController::class, "deleteProducto"]);

Route::get('/venta', [VentaController::class, "obtener3"]);
Route::post('/venta', [VentaController::class, "crear3"]);
Route::put('/venta/{id}', [VentaController::class, "actualizar3"]);
Route::delete('/venta/{id}', [VentaController::class, "borrar3"]);

Route::get('/citas', [VentaController::class, "index"]);

Route::get('/login', [LogInController::class, "LogIn"]);
Route::post('/login', [LogInController::class, "LogIn"]);

Route::get('/oficinas', [OficinasController::class, "obtener"]);
Route::get('/oficinas/{CodOficina}', [OficinasController::class, "obteneruno"]);
Route::post('/oficinas', [OficinasController::class, "crear"]);
Route::put('/oficinas/{CodOficina}', [OficinasController::class, "actualizar"]);
Route::delete('/oficinas/{CodOficina}', [OficinasController::class, "borrar"]);

Route::get('/empleados', [EmpleadosController::class, "obtener"]);
Route::get('/empleados/{CodEmpleado}', [EmpleadosController::class, "obteneruno"]);
Route::post('/empleados', [EmpleadosController::class, "crear"]);
Route::put('/empleados/{CodEmpleado}', [EmpleadosController::class, "actualizar"]);
Route::delete('/empleados/{CodEmpleado}', [EmpleadosController::class, "borrar"]);

Route::get('/reservas', [ReservasController::class, "obtener"]);
Route::get('/reservas/{CodReserva}', [ReservasController::class, "obteneruno"]);
Route::post('/reservas', [ReservasController::class, "crear"]);
Route::put('/reservas/{CodReserva}', [ReservasController::class, "actualizar"]);
Route::delete('/reservas/{CodReserva}', [ReservasController::class, "borrar"]);

Route::get('/vehiculos', [VehiculosController::class, "obtener"]);
Route::get('/vehiculos/{CodVehiculos}', [VehiculosController::class, "obteneruno"]);
Route::post('/vehiculos', [VehiculosController::class, "crear"]);
Route::put('/vehiculos/{CodVehiculos}', [VehiculosController::class, "actualizar"]);
Route::delete('/vehiculos/{CodVehiculos}', [VehiculosController::class, "borrar"]);
