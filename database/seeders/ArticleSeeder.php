<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::insert([
            [
                'nom' => 'Téléphone',
                'description' => 'un magnifique telephone retro',
                'prix' => '999',
                'photo' => 'articles/telephone.jpg',
            ],
            [
                'nom' => 'Imprimante',
                'description' => 'elle fonctionne encore',
                'prix' => '1234',
                'photo' => 'articles/imprimante.jpg',
            ],
            [
                'nom' => 'Minitel',
                'description' => 'abonnement inclus',
                'prix' => '14256',
                'photo' => 'articles/minitel.jpg',
            ],
            [
                'nom' => 'Amiga',
                'description' => 'Manette non fournies',
                'prix' => '3560',
                'photo' => 'articles/amiga.jpg',
            ],

        ]);
        
    }
}