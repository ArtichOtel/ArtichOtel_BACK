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
            'icon' => 'airplane',
            'order' => 1
        ]);

        Advantage::create([
            'title' => 'Wifi',
            'description' => "Chaque chambre est équipée en WIFI de 5eme génération.",
            'icon' => 'wifi',
            'order' => 2
        ]);

        Advantage::create([
            'title' => 'Le calme de la campagne',
            'description' => "Loin du bruit,\nDans un cadre de verdure,\ncalme et reposant.",
            'icon' => 'tree',
            'order' => 3
        ]);

        Advantage::create([
            'title' => 'Petit déjeuner',
            'description' => "Sucré et salé, il est composé de sorte à ce que chacun y trouve son bonheur et se régale.",
            'icon' => 'coffee',
            'order' => 4
        ]);

    }
}
