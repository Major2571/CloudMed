<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Especialidade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(EspecialidadeTableSeeder::class);
        $this->call(UFsTableSeeder::class);
        $this->call(VacinasTableSeeder::class);
    }
}
