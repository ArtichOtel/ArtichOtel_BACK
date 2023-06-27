<?php

namespace Database\Seeders;

use App\Models\Optional_service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionalServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Optional_service::create([
            'name' => [
                'fr_FR' => 'Demie-pension',
                'en_EN' => 'Half-pension'
            ],
            'u_price' => 20,
            'by_person' => 1,
            'nb_day' => 1
        ]);

        Optional_service::create([
            'name' => [
                'fr_FR' => 'Pension complète',
                'en_EN' => 'Full pension'
            ],
            'u_price' => 35,
            'by_person' => 1,
            'nb_day' => 1
        ]);

        Optional_service::create([
            'name' => [
                'fr_FR' => 'Petit déjeuner',
                'en_EN' => 'Breakfast'
            ],
            'u_price' => 9,
            'by_person' => 1,
            'nb_day' => 1
        ]);

        Optional_service::create([
            'name' => [
                'fr_FR' => 'Service pressing',
                'en_EN' => 'Laundry service'
            ],
            'u_price' => 30,
            'by_person' => 1,
            'nb_day' => 1
        ]);

        Optional_service::create([
            'name' => [
                'fr_FR' => 'Télévision',
                'en_EN' => 'Television'
            ],
            'u_price' => 10,
            'by_person' => 0,
            'nb_day' => 7
        ]);
        Optional_service::create([
            'name' => [
                'fr_FR' => 'Wifi',
                'en_EN' => 'Wifi'
            ],
            'u_price' => 25,
            'by_person' => 0,
            'nb_day' => 0
        ]);
    }
}
