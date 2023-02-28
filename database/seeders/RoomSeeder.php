<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(101, 110) as $iteration) {
            Room::factory()->create(['number' => $iteration]);
        }
        foreach (range(201, 210) as $iteration) {
            Room::factory()->create(['number' => $iteration]);
        }
        foreach (range(301, 305) as $iteration) {
            Room::factory()->create(['number' => $iteration]);
        }
    }
}
