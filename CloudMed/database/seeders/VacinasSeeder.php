<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Vacinas;

class VacinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Vacinas::factory(5)->create();
    }
}
