<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTipoContratoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_contrato', function (Blueprint $table) {
            $table->id();
            $table->string('respuesta');
            $table->timestamps();
        });
        $path = base_path("database/catalogos/json/tipo_contrato.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $tipo_contrato){
            DB::table("tipo_contrato")->insert([
                "respuesta" => $tipo_contrato->respuesta
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
        Schema::dropIfExists('tipo_contrato');
    }
}
