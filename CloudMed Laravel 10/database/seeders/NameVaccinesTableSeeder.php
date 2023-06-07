<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NameVaccinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('name_vaccines')->insert([
            ['name_vaccine' => 'BCG'],
            ['name_vaccine' => 'Cólera'],
            ['name_vaccine' => 'COVID-19'],
            ['name_vaccine' => 'DTP (tríplice bacteriana)'],
            ['name_vaccine' => 'DTP/Tríplice bacteriana (Difteria, tétano e coqueluche)'],
            ['name_vaccine' => 'dT (dupla adulto)'],
            ['name_vaccine' => 'dTpa (DTP adulto)'],
            ['name_vaccine' => 'Febre amarela'],
            ['name_vaccine' => 'Febre amarela fracionada'],
            ['name_vaccine' => 'Febre tifoide'],
            ['name_vaccine' => 'Hepatite A'],
            ['name_vaccine' => 'Hepatite B'],
            ['name_vaccine' => 'Hepatite delta (para pessoas com hepatite B crônica)'],
            ['name_vaccine' => 'Hepatite E'],
            ['name_vaccine' => 'HPV'],
            ['name_vaccine' => 'HPV quadrivalente'],
            ['name_vaccine' => 'Influenza (Gripe)'],
            ['name_vaccine' => 'Influenza de alta dose (pessoas acima de 65 anos)'],
            ['name_vaccine' => 'Encefalite Japonesa'],
            ['name_vaccine' => 'Meningocócica ACWY'],
            ['name_vaccine' => 'Meningocócica B'],
            ['name_vaccine' => 'Meningocócica C'],
            ['name_vaccine' => 'Penta (DTP/Hib/Hep. B)'],
            ['name_vaccine' => 'Pneumocócica'],
            ['name_vaccine' => 'Poliomielite'],
            ['name_vaccine' => 'Raiva'],
            ['name_vaccine' => 'Rotavírus Humano (VRH)'],
            ['name_vaccine' => 'Sarampo, Rubéola e Caxumba (Tríplice Viral / SRC)'],
            ['name_vaccine' => 'Tetraviral (sarampo, caxumba, rubéola e varicela)'],
            ['name_vaccine' => 'Varicela'],
            ['name_vaccine' => 'Varicela Zoster'],
        ]);
    }
}
