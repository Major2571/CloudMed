<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VacinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos-vacinas')->insert([
            ['nomeVacina' => 'BCG'],
            ['nomeVacina' => 'Cólera'],
            ['nomeVacina' => 'COVID-19'],
            ['nomeVacina' => 'DTP (tríplice bacteriana)'],
            ['nomeVacina' => 'DTP/Tríplice bacteriana (Difteria, tétano e coqueluche)'],
            ['nomeVacina' => 'dT (dupla adulto)'],
            ['nomeVacina' => 'dTpa (DTP adulto)'],
            ['nomeVacina' => 'Febre amarela'],
            ['nomeVacina' => 'Febre amarela fracionada'],
            ['nomeVacina' => 'Febre tifoide'],
            ['nomeVacina' => 'Hepatite A'],
            ['nomeVacina' => 'Hepatite B'],
            ['nomeVacina' => 'Hepatite delta (para pessoas com hepatite B crônica)'],
            ['nomeVacina' => 'Hepatite E'],
            ['nomeVacina' => 'HPV'],
            ['nomeVacina' => 'HPV quadrivalente'],
            ['nomeVacina' => 'Influenza (Gripe)'],
            ['nomeVacina' => 'Influenza de alta dose (pessoas acima de 65 anos)'],
            ['nomeVacina' => 'Encefalite Japonesa'],
            ['nomeVacina' => 'Meningocócica ACWY'],
            ['nomeVacina' => 'Meningocócica B'],
            ['nomeVacina' => 'Meningocócica C'],
            ['nomeVacina' => 'Penta (DTP/Hib/Hep. B)'],
            ['nomeVacina' => 'Pneumocócica'],
            ['nomeVacina' => 'Poliomielite'],
            ['nomeVacina' => 'Raiva'],
            ['nomeVacina' => 'Rotavírus Humano (VRH)'],
            ['nomeVacina' => 'Sarampo, Rubéola e Caxumba (Tríplice Viral / SRC)'],
            ['nomeVacina' => 'Tetraviral (sarampo, caxumba, rubéola e varicela)'],
            ['nomeVacina' => 'Varicela'],
            ['nomeVacina' => 'Varicela Zoster'],
        ]);
    }
}
