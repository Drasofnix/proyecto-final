<?php

namespace App\Models;

use App\Models\Oficinas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleados extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['CodEmpleado','nombre','apellido','salario','CodOficina','fecha'];
    protected $primaryKey = 'CodEmpleado';
    use HasFactory;

    public function oficinas(){
        return $this->belongsTo(Oficinas::class, 'CodOficina', 'CodOficina');
    }
}
