<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    public function run(): void
    {
        Reservation::insert([
            [
                'date_reservation' => '2024-12-01',
                'status' => 'Confirmed',
                'membre_id' => 1, // Assuming this matches a membre's ID
                'seminaire_id' => 1, // Assuming this matches a seminaire's ID
               
            ],
            [
                'date_reservation' => '2024-12-02',
                'status' => 'Pending',
                'membre_id' => 2,
                'seminaire_id' => 2,
                
            ],
        ]);
    }
}
