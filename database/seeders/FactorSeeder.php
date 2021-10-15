<?php

namespace Database\Seeders;

use App\Models\Factores;
use Illuminate\Database\Seeder;

class FactorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Factores::create([
            'factor'=>'Equidad de género e inclusión'
        ]);
        Factores::create([
            'factor'=>'Ambientales y de seguridad'
        ]);
        Factores::create([
            'factor'=>'Identidad'
        ]);
        Factores::create([
            'factor'=>'Reconocimiento'
        ]);
        Factores::create([
            'factor'=>'Estrés'
        ]);
        Factores::create([
            'factor'=>'Violencia'
        ]);
    }
}
