<?php

use App\Http\Livewire\Contador;
use App\Http\Livewire\Oficinas;
use App\Http\Livewire\Reservas;
use App\Http\Livewire\Empleados;
use App\Http\Livewire\UserIndex;
use App\Http\Livewire\Vehiculos;
use App\Http\Livewire\Oficinaedit;
use App\Http\Livewire\Oficinashow;
use App\Http\Livewire\Reservaedit;
use App\Http\Livewire\Reservashow;
use App\Http\Livewire\Empleadoedit;
use App\Http\Livewire\Empleadoshow;
use App\Http\Livewire\Vehiculoedit;
use App\Http\Livewire\Vehiculoshow;
use App\Http\Livewire\CreateOficina;
use App\Http\Livewire\Reservacreate;
use App\Http\Livewire\Empleadocreate;
use App\Http\Livewire\Vehiculocreate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\AmiiboController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;

/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [UsuarioController::class,'index']);
Route::get('/productos', [ProductoController::class, 'obtenerProducto']);
Route::get('/login', [LogInController::class,'login']);
Route::get('/amiibo', [AmiiboController::class,'obtenerAmiibo']);
Route::get('/asset', [AssetController::class, 'index']);
Route::get('/contador', Contador::class);
Route::get('/userindex', UserIndex::class);

Route::get('/oficinas', Oficinas::class);
Route::get('/oficinas/crear', CreateOficina::class);
Route::get('/oficinas/{CodOficina}/show', Oficinashow::class);
Route::get('/oficinas/{CodOficina}/edit', Oficinaedit::class);

Route::get('/empleados', Empleados::class);
Route::get('/empleados/crear', Empleadocreate::class);
Route::get('/empleados/{CodEmpleado}/show', Empleadoshow::class);
Route::get('/empleados/{CodEmpleado}/edit', Empleadoedit::class);

Route::get('/reservas', Reservas::class);
Route::get('/reservas/crear', Reservacreate::class);
Route::get('/reservas/{CodReserva}/show', Reservashow::class);
Route::get('/reservas/{CodReserva}/edit', Reservaedit::class);

Route::get('/vehiculos', Vehiculos::class);
Route::get('/vehiculos/crear', Vehiculocreate::class);
Route::get('/vehiculos/{CodVehiculo}/show', Vehiculoshow::class);
Route::get('/vehiculos/{CodVehiculo}/edit', Vehiculoedit::class);
