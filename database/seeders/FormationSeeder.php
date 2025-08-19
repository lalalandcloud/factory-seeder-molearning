<?php

namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formation::insert([
            [
                'nom' => 'Développement Web',
                'description' => 'Formation complète en développement web moderne incluant HTML, CSS, JavaScript, PHP et frameworks populaires.'
            ],
            [
                'nom' => 'Data Science',
                'description' => 'Analyse de données, machine learning, Python, R et visualisation de données pour devenir data scientist.'
            ],
            [
                'nom' => 'Cybersécurité',
                'description' => 'Protection des systèmes informatiques, ethical hacking, sécurité réseau et gestion des vulnérabilités.'
            ],
            [
                'nom' => 'Marketing Digital',
                'description' => 'Stratégies de marketing en ligne, SEO, réseaux sociaux, publicité digitale et analytics.'
            ],
            [
                'nom' => 'Design UX/UI',
                'description' => 'Conception d\'interfaces utilisateur, expérience utilisateur, prototypage et design thinking.'
            ],
            [
                'nom' => 'Gestion de Projet',
                'description' => 'Méthodologies agiles, planification, leadership d\'équipe et outils de gestion de projet modernes.'
            ]
        ]);
    }
}
