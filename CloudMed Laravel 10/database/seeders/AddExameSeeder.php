<?php

namespace Database\Seeders;

use App\Models\Especialidade;
use App\Models\Exames;
use App\Models\UFs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddExameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exames = [
            [
                'id_user' => 1,
                'id_uf' => 25,
                'id_especialidade' => 1,
                'titulo' => 'Eletrocardiograma',
                'data' => '2022-01-01',
                'instituicao' => 'Santa Casa',
                'cidade' => 'São Paulo',
            ],
            [
                'id_user' => 1,
                'id_uf' => 25,
                'id_especialidade' => 2,
                'titulo' => 'Exame 2',
                'data' => '2022-02-02',
                'instituicao' => 'Instituição 2',
                'cidade' => 'Cidade 2',
            ],
            
        ];

        foreach ($exames as $exameData) {
            Exames::create([
                'id_user' => $exameData['id_user'],
                'id_uf' => $exameData['id_uf'],
                'id_especialidade' => $exameData['id_especialidade'],
                'titulo' => $exameData['titulo'],
                'data' => $exameData['data'],
                'instituicao' => $exameData['instituicao'],
                'cidade' => $exameData['cidade'],
            ]);
        }
    }
}
