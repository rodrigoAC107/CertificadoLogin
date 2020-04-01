<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    protected $table = 'certificados';
    
    protected $fillable = [
        'organizacion_id',
        'nombre_empleado',
        'apellido_empleado',
        'dni_empleado',
        'cuit_cuil_empleado',
        'numero_cuit_cuil_empleado',
        'telefono_empleado',
        'direccion_empleado',
        'hora_ingreso_empleado',
        'hora_salida_empleado',
        'dias_laborables_empleado',
    ];
}
