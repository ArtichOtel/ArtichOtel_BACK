<?php

namespace Database\Seeders;

use App\Models\RoomsType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoomsType::create([
            'title' => 'Chambre standard',
            'description' => fake()->sentence(),
            'url_image' => fake()->imageUrl(),
            'price' => 70
        ]);

        RoomsType::create([
            'title' => 'Chambre luxe',
            'description' => fake()->sentence(),
            'url_image' => fake()->imageUrl(),
            'price' => 140
        ]);

        RoomsType::create([
            'title' => 'Suite',
            'description' => fake()->sentence(),
            'url_image' => fake()->imageUrl(),
            'price' => 280
        ]);
    }
}
