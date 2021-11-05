<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSexoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sexo', function (Blueprint $table) {
            $table->id();
            $table->string('respuesta');
            $table->timestamps();
        });
        $path = base_path("database/catalogos/json/sexo.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $sexo){
            DB::table("sexo")->insert([
                "respuesta" => $sexo->respuesta
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
        Schema::dropIfExists('sexo');
    }
}
