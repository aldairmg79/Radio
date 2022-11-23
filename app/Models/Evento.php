<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable=['id_evento', 'titulo', 'descripcion', 'categoria', 'fecha_evento', 'hora_evento', 'enlace_noticia', 'foto_evento'];

}
