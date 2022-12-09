<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Cita;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuarios';
    protected $fillable = ['name','email','password','peso','codigo_verificacion'];
    use HasApiTokens, HasFactory, Notifiable;

    public function citas(){
        return $this->hasMany(Cita::class, 'id_usuario', 'id');
    }
}
