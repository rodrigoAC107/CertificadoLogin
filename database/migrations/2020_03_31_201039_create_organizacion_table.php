<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('razon_social_organizacion');
            $table->string('descripcion_organizacion');
            $table->string('direccion_organizacion');
            $table->bigInteger('cuit_organizacion');
            $table->string('rubro_organizacion');
            $table->string('actividad_organizacion');
            $table->bigInteger('telefono_organizacion');
            $table->string('email_organizacion')->unique();
            $table->string('inciso_organizacion');
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
        Schema::dropIfExists('organizacion');
    }
}
