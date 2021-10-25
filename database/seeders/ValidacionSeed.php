<?php

namespace Database\Seeders;

use App\Models\Validacion;
use Illuminate\Database\Seeder;

class ValidacionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Validacion::create([
            'tipo'=> 'Sí'
        ]);
        Validacion::create([
            'tipo'=> 'No'
        ]);
    }
}
