<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id();
            $table->integer('libro_id');
            $table->string('solicitante');
            $table->date('fecha_recoleccion');
            $table->time('hora_recoleccion');
            $table->date('fecha_entrega_usuario');
            $table->date('fecha_entrega_sistema');
            $table->integer('status')->default(0);
            $table->longText('observaciones')->nullable();
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
        Schema::dropIfExists('solicituds');
    }
}
