<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Libros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('libros')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        $path = base_path("database/catalogos/json/libros.json");
        $json = json_decode(file_get_contents($path));
        foreach($json as $service){
            DB::table("libros")->insert([
                'nombre' => $service->nombre,
                'autor' => $service->autor,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
