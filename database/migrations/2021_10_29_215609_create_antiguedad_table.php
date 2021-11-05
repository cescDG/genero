<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAntiguedadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antiguedad', function (Blueprint $table) {
            $table->id();
            $table->string('respuesta');
            $table->timestamps();
        });
        $path = base_path("database/catalogos/json/antiguedad.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $antiguedad){
            DB::table("antiguedad")->insert([
                "respuesta" => $antiguedad->respuesta
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
        Schema::dropIfExists('antiguedad');
    }
}
