<?php

namespace App\Models;

use App\Models\Usuario;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venta extends Model
{
    protected $table = 'ventas';
    protected $fillable = ['id_usuario', 'id_producto', 'fecha_compra'];
    use HasFactory;

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id');
    }
    public function producto(){
        return $this->belongsTo(Producto::class, 'id_producto', 'id');
    }
}
