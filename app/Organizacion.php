<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    protected $table = 'organizacion';

    protected $fillable = [
        'razon_social_organizacion',
        'descripcion_organizacion',
        'direccion_organizacion',
        'cuit_organizacion',
        'rubro_organizacion',
        'actividad_organizacion',
        'telefono_organizacion',
        'email_organizacion',
        'inciso_organizacion'
    ];
}
