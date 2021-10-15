<?php

namespace Database\Seeders;

use App\Models\Factores;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PreguntasSeeder::class);
        $this->call(FactorSeeder::class);
    }
}
