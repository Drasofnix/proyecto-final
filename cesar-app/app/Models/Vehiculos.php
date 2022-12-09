<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = ['CodVehiculo','descripcion'];
    protected $primaryKey = 'CodVehiculo';
    use HasFactory;
}
