<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable=['id_usuarios', 'nombre_usuario', 'correo_electronico', 'contraseña', 'repetir_contraseña', 'privilegios'];
}

