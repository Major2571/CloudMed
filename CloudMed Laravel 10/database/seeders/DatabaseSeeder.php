<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MedicalSpecialty;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(MedicalSpecialtyTableSeeder::class);
        $this->call(UFsTableSeeder::class);
        $this->call(NameVaccinesTableSeeder::class);

        $this->call(AddExamSeeder::class);
        $this->call(AddVaccineSeeder::class);
        $this->call(AddUserSeeder::class);
    }
}
