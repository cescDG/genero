<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAntiguedadPuestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antiguedad_puesto', function (Blueprint $table) {
            $table->id();
            $table->string('respuesta');
            $table->timestamps();
        });
        $path = base_path("database/catalogos/json/antiguedad_puesto.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $antiguedad_puesto){
            DB::table("antiguedad_puesto")->insert([
                "respuesta" => $antiguedad_puesto->respuesta
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
        Schema::dropIfExists('antiguedad_puesto');
    }
}
