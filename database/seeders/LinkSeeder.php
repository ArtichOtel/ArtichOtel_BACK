<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // hero's links
        Link::create([
            'text' => 'Je réserve',
            'url' => "/booking",
            'icon' => "",
        ]);

        Link::create([
            'text' => 'Choisir ma chambre',
            'url' => "/booking",
            'icon' => "",
        ]);

        // footer's links col 1
        Link::create([
            'text' => 'Accueil',
            'url' => "/",
            'icon' => "",
        ]);

        Link::create([
            'text' => 'À propos',
            'url' => "/about",
            'icon' => "",
        ]);

        Link::create([
            'text' => 'Actualités',
            'url' => "#news",
            'icon' => "",
        ]);

        Link::create([
            'text' => 'Réservations',
            'url' => "/booking",
            'icon' => "",
        ]);


        // footer's links col 2
        Link::create([
            'text' => '(+33) 4 75 00 00 00',
            'url' => "tel:+33475000000",
            'icon' => 'phone-light',
        ]);

        Link::create([
            'text' => '25 chemin du Verger, 30870 Clarensac',
            'url' => "",
            'icon' => 'map-marker',
        ]);

        Link::create([
            'text' => 'info@hotelartichaut.fr',
            'url' => 'mailto:info@hotelartichaut.fr',
            'icon' => 'envelope-thin',
        ]);


        // footer's links col 3
        Link::create([
            'text' => 'Instagram',
            'url' => "https://www.instagram.com/techprevue",
            'icon' => 'instagram',
        ]);

        Link::create([
            'text' => 'Facebook',
            'url' => "https://www.facebook.fr/artichotel",
            'icon' => 'facebook',
        ]);

    }
}
