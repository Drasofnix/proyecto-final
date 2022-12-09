<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Oficinas extends Model
{
    protected $table = 'oficinas';
    protected $fillable = ['CodOficina','Direccion','Localidad','Provincia'];
    protected $primaryKey = 'CodOficina';
    use HasFactory;
}
