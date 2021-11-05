<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateEstadoCivilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_civil', function (Blueprint $table) {
            $table->id();
            $table->string('respuesta');
            $table->timestamps();
        });
        $path = base_path("database/catalogos/json/estado_civil.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $estado_civil){
            DB::table("estado_civil")->insert([
                "respuesta" => $estado_civil->respuesta
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
        Schema::dropIfExists('estado_civil');
    }
}
