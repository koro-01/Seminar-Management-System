<?php

namespace Database\Seeders;

use App\Models\Activite;
use Illuminate\Database\Seeder;

class ActiviteSeeder extends Seeder
{
    public function run(): void
    {
        Activite::insert([
            [
                'nom' => 'Workshop on AI',
                'description' => 'Hands-on workshop on artificial intelligence.',
                'seminaire_id' => 1, // Assuming this matches a seminaire's ID
                
            ],
            [
                'nom' => 'Group Discussion',
                'description' => 'Interactive session on leadership challenges.',
                'seminaire_id' => 2,
                
            ],
        ]);
    }
}
