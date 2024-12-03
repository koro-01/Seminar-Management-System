<?php
namespace Database\Seeders;

use App\Models\Animateur;
use Illuminate\Database\Seeder;

class AnimateurSeeder extends Seeder
{
    public function run()
    {
        Animateur::create([
            'nom' => 'John',
            'prenom' => 'Doe',
            'telephone' => '123456789',
            'specialite' => 'Serve',
            'email' => 'john.doe@example.com',
            
        ]);
        
        Animateur::create([
            'nom' => 'Jane',
            'prenom' => 'Smith',
            'telephone' => '987654321',
            'specialite' => 'Cook',
            'email' => 'jane.smith@example.com',
            
        ]);
    }
}
