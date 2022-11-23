<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integrantes extends Model
{
    //use HasFactory;
    protected $fillable=['fecha_ingreso', 'nombre', 'descripcion', 'facebook_url', 'twitter_url', 'instagram_url', 'foto'];
}
