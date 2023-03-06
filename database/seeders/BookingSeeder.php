<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Booking::factory()->count(25)->create();

        foreach (range(1, 25) as $iteration) {
            Booking::factory()->create([
                'begin_date' => '2000-01-01',
                'end_date' => '2000-01-01',
                'rooms_id' => $iteration,
                'customers_id' => 1
            ]);
        }
        foreach (range(1, 25) as $iteration) {
            Booking::factory()->create([
                'begin_date' => '2222-01-01',
                'end_date' => '2222-01-01',
                'rooms_id' => $iteration,
                'customers_id' => 1
            ]);
        }
    }
}
