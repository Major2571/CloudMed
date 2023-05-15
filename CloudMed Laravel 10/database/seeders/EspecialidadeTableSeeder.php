<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecialidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('especialidade')->insert([
            ['especialidade' => 'Cardiologia'],
            ['especialidade' => 'Cirurgia Cardiovascular'],
            ['especialidade' => 'Cirurgia de Mão'],
            ['especialidade' => 'Cirurgia de Cabeça e Pescoço'],
            ['especialidade' => 'Cirurgia do Aparelho Digestivo'],
            ['especialidade' => 'Cirurgia Geral'],
            ['especialidade' => 'Cirurgia Oncológica'],
            ['especialidade' => 'Cirurgia Pediátrica'],
            ['especialidade' => 'Cirurgia Plástica'],
            ['especialidade' => 'Cirurgia Torácica'],
            ['especialidade' => 'Cirurgia Vascular'],
            ['especialidade' => 'Clinico Geral'],
            ['especialidade' => 'Dermatologia'],
            ['especialidade' => 'Endocrinologia e Metabologia'],
            ['especialidade' => 'Endoscopia'],
            ['especialidade' => 'Gastroenterologia'],
            ['especialidade' => 'Genética Médica'],
            ['especialidade' => 'Geriatria'],
            ['especialidade' => 'Ginecologia e Obstetrícia'],
            ['especialidade' => 'Hematologia e Hemoterapia'],
            ['especialidade' => 'Homeopatia'],
            ['especialidade' => 'Infectologia'],
            ['especialidade' => 'Mastologia'],
            ['especialidade' => 'Neurologia'],
            ['especialidade' => 'Oftalmologia'],
            ['especialidade' => 'Ortopedia'],
            ['especialidade' => 'Oncologia'],
            ['especialidade' => 'Pediatria'],
            ['especialidade' => 'Urologia'],
            ['especialidade' => 'Outro']
        ]);
    }
}

