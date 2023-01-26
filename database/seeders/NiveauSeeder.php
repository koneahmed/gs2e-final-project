<?php

namespace Database\Seeders;

use App\Models\Niveau;
use App\Models\Niveaux;
use Illuminate\Database\Seeder;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['name' => 'Licence 1'],
            ['name' => 'Licence 2'],
            ['name' => 'Licence 3'],
            ['name' => 'Master 1'],
            ['name' => 'Master 2'],
            ['name' => 'Doctorat'],
        ];

        Niveau::insert($datas);
    }
}
