<?php

namespace Database\Seeders;

use App\Models\Vacinas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddVacinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vacinas = [
            [
                'id_user' => 1,
                'id_vacina' => 1,
                'id_uf' => 1,
                'titulo' => '',
                'tipoDose' => 'Dose Única',
                'data' => '2022-01-01',
                'fabricante' => 'Fabricante 1',
                'cidade' => 'Cidade 1',
            ],
            
        ];

        foreach ($vacinas as $vacinaData) {
            Vacinas::create($vacinaData);
        }
    }
}
