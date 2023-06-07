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
                'id_vacina' => 1,
                'id_uf' => 1,
                'titulo' => '',
                'tipoDose' => 'Dose Única',
                'data' => '2022-01-01',
                'fabricante' => 'Fabricante 1',
                'lote' => '000001',
                'cidade' => 'Cidade 1',
            ],
            
        ];

        foreach ($vaccines as $vaccineData) {
            Vaccines::create($vaccineData);
        }
    }
}
