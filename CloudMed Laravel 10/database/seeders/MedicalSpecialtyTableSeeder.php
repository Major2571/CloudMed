<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalSpecialtyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medical_specialty')->insert([
            ['medical_specialty' => 'Cardiologia'],
            ['medical_specialty' => 'Cirurgia Cardiovascular'],
            ['medical_specialty' => 'Cirurgia de Mão'],
            ['medical_specialty' => 'Cirurgia de Cabeça e Pescoço'],
            ['medical_specialty' => 'Cirurgia do Aparelho Digestivo'],
            ['medical_specialty' => 'Cirurgia Geral'],
            ['medical_specialty' => 'Cirurgia Oncológica'],
            ['medical_specialty' => 'Cirurgia Pediátrica'],
            ['medical_specialty' => 'Cirurgia Plástica'],
            ['medical_specialty' => 'Cirurgia Torácica'],
            ['medical_specialty' => 'Cirurgia Vascular'],
            ['medical_specialty' => 'Clinico Geral'],
            ['medical_specialty' => 'Dermatologia'],
            ['medical_specialty' => 'Endocrinologia e Metabologia'],
            ['medical_specialty' => 'Endoscopia'],
            ['medical_specialty' => 'Gastroenterologia'],
            ['medical_specialty' => 'Genética Médica'],
            ['medical_specialty' => 'Geriatria'],
            ['medical_specialty' => 'Ginecologia e Obstetrícia'],
            ['medical_specialty' => 'Hematologia e Hemoterapia'],
            ['medical_specialty' => 'Homeopatia'],
            ['medical_specialty' => 'Infectologia'],
            ['medical_specialty' => 'Mastologia'],
            ['medical_specialty' => 'Neurologia'],
            ['medical_specialty' => 'Oftalmologia'],
            ['medical_specialty' => 'Ortopedia'],
            ['medical_specialty' => 'Oncologia'],
            ['medical_specialty' => 'Pediatria'],
            ['medical_specialty' => 'Urologia'],
            ['medical_specialty' => 'Outro']
        ]);
    }
}

