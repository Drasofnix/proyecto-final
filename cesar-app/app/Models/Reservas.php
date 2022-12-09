<?php

namespace App\Models;

use App\Models\Empleados;
use App\Models\Vehiculos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservas extends Model
{
    protected $table = 'reservas';
    protected $fillable = ['CodReserva','CodVehiculo','CodEmpleado','fecha','destino','kilometros'];
    protected $primaryKey = 'CodReserva';
    use HasFactory;

    public function empleados(){
        return $this->belongsTo(Empleados::class, 'CodEmpleado', 'CodEmpleado');
    }
    public function vehiculos(){
        return $this->belongsTo(Vehiculos::class, 'CodVehiculo', 'CodVehiculo');
    }
}
