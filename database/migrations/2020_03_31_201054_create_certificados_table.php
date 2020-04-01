<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('organizacion_id');
            $table->string('nombre_empleado');
            $table->string('apellido_empleado');
            $table->bigInteger('dni_empleado');
            $table->string('cuit_cuil_empleado');
            $table->bigInteger('numero_cuit_cuil_empleado');
            $table->bigInteger('telefono_empleado');
            $table->string('direccion_empleado');
            $table->string('hora_ingreso_empleado');
            $table->string('hora_salida_empleado');
            $table->string('dias_laborables_empleado');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificados');
    }
}
