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
            'title' => [
                'fr_FR' => 'Proximité',
                'en_EN' => 'Proximity'
            ],
            'description' => [
                'fr_FR' => "Proximité\nAutoroute\nAéroport",
                'en_EN' => "Proximity\nHighway\nAirport"
            ],
            'icon' => 'proximity',
            'order' => 1
        ]);

        Advantage::create([
            'title' => [
                'fr_FR' => 'Wifi',
                'en_EN' => 'Wifi'
            ],
            'description' => [
                'fr_FR' => "Chaque chambre est équipée en WIFI de 5eme génération.",
                'en_EN' => "Each room is equipped with 5th generation WIFI."
            ],
            'icon' => 'wifi',
            'order' => 2
        ]);

        Advantage::create([
            'title' => [
                'fr_FR' => 'Le calme de la campagne',
                'en_EN' => 'The calm of the countryside'
            ],
            'description' => [
                'fr_FR' => "Loin du bruit,\nDans un cadre de verdure,\ncalme et reposant.",
                'en_EN' => "Away from the noise,\nIn a green setting,\nCalm and relaxing."
            ],
            'icon' => 'calm',
            'order' => 3
        ]);

        Advantage::create([
            'title' => [
                'fr_FR' => 'Petit déjeuner',
                'en_EN' => 'Breakfast'
            ],
            'description' => [
                'fr_FR' => "Sucré et salé, il est composé de sorte à ce que chacun y trouve son bonheur et se régale.",
                'en_EN' => "Sweet and salty, it is composed so that everyone finds their happiness and enjoys it."
            ],
            'icon' => 'breakfast',
            'order' => 4
        ]);

    }
}
