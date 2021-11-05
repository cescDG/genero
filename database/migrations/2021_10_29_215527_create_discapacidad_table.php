<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDiscapacidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discapacidad', function (Blueprint $table) {
            $table->id();
            $table->string('respuesta');
            $table->timestamps();
        });
        $path = base_path("database/catalogos/json/discapacidad.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $discapacidad){
            DB::table("discapacidad")->insert([
                "respuesta" => $discapacidad->respuesta
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discapacidad');
    }
}
