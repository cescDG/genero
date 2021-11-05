<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosGeneralesUSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_generales_u_s', function (Blueprint $table) {
            $table->id();
            $table->integer('sexo');
            $table->integer('edad');
            $table->integer('estado_civil');
            $table->integer('discapacidad');
            $table->integer('antiguedad_legis');
            $table->integer('antiguedad_puesto');
            $table->integer('nivel_puesto');
            $table->integer('tipo_contrato');
            $table->string('rfc_usuario');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('datos_generales_u_s');
    }
}
