<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AnimateurSeeder::class,
            SeminaireSeeder::class,
            ActiviteSeeder::class,
            MembreSeeder::class,
            ReservationSeeder::class,
        ]);
    }
} 

