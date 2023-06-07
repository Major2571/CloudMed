<?php

namespace Database\Seeders;

use App\Models\Especialidade;
use App\Models\Exams;
use App\Models\UFs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exams = [
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

        foreach ($exams as $examData) {
            Exams::create([
                'id_user' => $examData['id_user'],
                'id_uf' => $examData['id_uf'],
                'id_especialidade' => $examData['id_especialidade'],
                'titulo' => $examData['titulo'],
                'data' => $examData['data'],
                'instituicao' => $examData['instituicao'],
                'cidade' => $examData['cidade'],
            ]);
        }
    }
}
