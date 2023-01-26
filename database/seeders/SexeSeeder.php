<?php

namespace Database\Seeders;

use App\Models\Sexe;
use Illuminate\Database\Seeder;

class SexeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sexe::create([
            'libelle' => "Féminin"
        ]);

        Sexe::create([
            'libelle' => "Masculin"
        ]);
    }
}
