<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('batiments')->insert([
            [
                'nom' => 'Bâtiment Principal',
                'description' => 'Le bâtiment principal de notre établissement, abritant les bureaux administratifs et les salles de réunion.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Laboratoire A',
                'description' => 'Laboratoire équipé pour les recherches scientifiques et les expérimentations.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Entrepôt Nord',
                'description' => 'Entrepôt de stockage situé dans la partie nord du complexe.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}