<?php

namespace Database\Seeders;

use App\Models\MedicalSpecialty;
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
                'id_medical_specialty' => 1,
                'exam_title' => 'Eletrocardiograma',
                'exam_date' => '2022-01-01',
                'institution' => 'Santa Casa',
                'city' => 'São Paulo',
            ],
            [
                'id_user' => 1,
                'id_uf' => 25,
                'id_medical_specialty' => 2,
                'exam_title' => 'Exame 2',
                'exam_date' => '2022-02-02',
                'institution' => 'Instituição 2',
                'city' => 'city 2',
            ],
            
        ];

        foreach ($exams as $examData) {
            Exams::create([
                'id_user' => $examData['id_user'],
                'id_uf' => $examData['id_uf'],
                'id_medical_specialty' => $examData['id_medical_specialty'],
                'exam_title' => $examData['exam_title'],
                'exam_date' => $examData['exam_date'],
                'institution' => $examData['institution'],
                'city' => $examData['city'],
            ]);
        }
    }
}
