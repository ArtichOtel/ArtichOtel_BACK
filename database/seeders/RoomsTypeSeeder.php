<?php

namespace Database\Seeders;

use App\Models\RoomsType;
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
            'title' => [
                'fr_FR' => 'Chambre standard',
                'en_EN' => 'Standard room'
            ],
            'description' => [
                'fr_FR' => fake()->sentence(),
                'en_EN' => fake()->sentence()
            ],
            'url_image' => fake()->imageUrl(),
            'price' => 70
        ]);

        RoomsType::create([
            'title' => [
                'fr_FR' => 'Chambre luxe',
                'en_EN' => 'Luxury room'
            ],
            'description' => [
                'fr_FR' => fake()->sentence(),
                'en_EN' => fake()->sentence()
            ],
            'url_image' => fake()->imageUrl(),
            'price' => 140
        ]);

        RoomsType::create([
            'title' => [
                'fr_FR' => 'Suite',
                'en_EN' => 'Suite'
            ],
            'description' => [
                'fr_FR' => fake()->sentence(),
                'en_EN' => fake()->sentence()
            ],
            'url_image' => fake()->imageUrl(),
            'price' => 280
        ]);
    }
}
