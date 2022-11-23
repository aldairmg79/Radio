<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    //use HasFactory;
    protected $fillable=['id_programa', 'titulo', 'url', 'descripcion', 'fecha_emision'];
}
