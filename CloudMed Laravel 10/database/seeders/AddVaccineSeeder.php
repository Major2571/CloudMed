<?php

namespace Database\Seeders;

use App\Models\Vaccines;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddVaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vaccines = [
            [
                'id_user' => 1,
                'id_vaccine' => 1,
                'id_uf' => 1,
                'new_vaccine_name' => '',
                'doses' => 'Dose Única',
                'vaccination_date' => '2022-01-01',
                'manufacturer' => 'manufacturer 1',
                'lot_number' => '000001',
                'city' => 'city 1',
            ],
            
        ];

        foreach ($vaccines as $vaccineData) {
            Vaccines::create($vaccineData);
        }
    }
}
