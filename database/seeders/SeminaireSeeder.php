<?php

namespace Database\Seeders;

use App\Models\Seminaire;
use Illuminate\Database\Seeder;

class SeminaireSeeder extends Seeder
{
    public function run(): void
    {
        Seminaire::insert([
            [
                'theme' => 'Tech Innovation',
                'date_debut' => '2024-12-01',
                'date_fin' => '2024-12-05',
                'description' => 'A seminar about the latest in technology innovation.',
                'cout_journalier' => 200.50,
                'animateur_id' => 1, // Assuming this matches an animateur's ID
                
            ],
            [
                'theme' => 'Leadership Skills',
                'date_debut' => '2024-12-10',
                'date_fin' => '2024-12-12',
                'description' => 'A seminar focused on developing leadership skills.',
                'cout_journalier' => 150.00,
                'animateur_id' => 2,
                
            ],
        ]);
    }
}
