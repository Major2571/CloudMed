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
                'id_uf' => 1,
                'id_especialidade' => 1,
                'titulo' => 'Exame 1',
                'data' => '2022-01-01',
                'instituicao' => 'Instituição 1',
                'cidade' => 'Cidade 1',
                'uf' => 'UF 1',
            ],
            [
                'id_user' => 1,
                'id_uf' => 2,
                'id_especialidade' => 2,
                'titulo' => 'Exame 2',
                'data' => '2022-02-02',
                'instituicao' => 'Instituição 2',
                'cidade' => 'Cidade 2',
                'uf' => 'UF 2',
            ],
            // Adicione mais registros de exames aqui, se necessário
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
