<?php

namespace Database\Seeders;

use App\Models\Membre;
use Illuminate\Database\Seeder;

class MembreSeeder extends Seeder
{
    public function run(): void
    {
        Membre::insert([
            [
                'nom' => 'Alice',
                'prenom' => 'Brown',
                'sexe' => 'Female',
                'telephone' => '555123456',
                'email' => 'alice.brown@example.com',
                
            ],
            [
                'nom' => 'Bob',
                'prenom' => 'Johnson',
                'sexe' => 'Male',
                'telephone' => '555654321',
                'email' => 'bob.johnson@example.com',
                
            ],
        ]);
    }
}
