<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advantage::create([
            'title' => 'Proximitée',
            'description' => "Proximité\nAutoroute\nAéroport",
            'url_image' => fake()->imageUrl(),
            'order' => 1
        ]);

        Advantage::create([
            'title' => 'Wifi',
            'description' => "Proximité\nAutoroute\nAéroport",
            'url_image' => fake()->imageUrl(),
            'order' => 2
        ]);

        Advantage::create([
            'title' => 'Le calme de la campagne',
            'description' => "Loin du bruit,\nDans un cadre de verdure,\ncalme et reposant.",
            'url_image' => fake()->imageUrl(),
            'order' => 3
        ]);

        Advantage::create([
            'title' => 'Petit déjeuner',
            'description' => "Sucré et salé, il est composé de sorte à ce que chacun y trouve son bonheur et se régale.",
            'url_image' => fake()->imageUrl(),
            'order' => 4
        ]);

    }
}
