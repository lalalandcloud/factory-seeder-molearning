<?php

namespace Database\Seeders;

use App\Models\TypeFormation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeFormation::insert([
            [
                'nom' => 'Intelligence Artificielle',
                'description' => 'Apprentissage automatique, réseaux de neurones, deep learning et applications pratiques de l\'IA.'
            ],
            [
                'nom' => 'Cloud Computing',
                'description' => 'Architecture cloud, AWS, Azure, conteneurisation Docker et déploiement d\'applications distribuées.'
            ],
            [
                'nom' => 'DevOps',
                'description' => 'Intégration continue, déploiement automatisé, monitoring et collaboration développement-opérations.'
            ],
            [
                'nom' => 'Blockchain',
                'description' => 'Technologie blockchain, cryptomonnaies, smart contracts et développement d\'applications décentralisées.'
            ],
            [
                'nom' => 'Mobile Development',
                'description' => 'Développement d\'applications mobiles natives et cross-platform pour iOS et Android.'
            ],
            [
                'nom' => 'Business Intelligence',
                'description' => 'Analyse décisionnelle, tableaux de bord, reporting et transformation des données en insights.'
            ],
            [
                'nom' => 'E-commerce',
                'description' => 'Création de boutiques en ligne, stratégies de vente digitale et optimisation des conversions.'
            ],
            [
                'nom' => 'Réseaux et Systèmes',
                'description' => 'Administration système, infrastructure réseau, serveurs et maintenance des environnements IT.'
            ],
            [
                'nom' => 'Game Development',
                'description' => 'Création de jeux vidéo, moteurs de jeu, programmation gameplay et design interactif.'
            ],
            [
                'nom' => 'IoT et Robotique',
                'description' => 'Internet des objets, programmation de capteurs, automatisation et systèmes embarqués.'
            ]
            ]);
    }
}
