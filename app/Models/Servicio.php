<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicios';
    protected $fillable = ['categoria','nombre_servicio', 'descripcion_servicio', 'imagen_servicio', 'fecha_actualizacion'];
}
