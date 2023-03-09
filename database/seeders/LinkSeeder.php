<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Seeder;

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
            'text' => [
                'fr_FR' => 'Je réserve',
                'en_EN' => 'I book'
            ],
            'url' => "/selection",
            'icon' => null,
        ]);

        Link::create([
            'text' => [
                'fr_FR' => 'Choisir ma chambre',
                'en_EN' => 'I choose my room'
            ],
            'url' => "/selection",
            'icon' => null,
        ]);

        // footer's links col 1
        Link::create([
            'text' => [
                'fr_FR' => 'Accueil',
                'en_EN' => 'Home'
            ],
            'url' => "/",
            'icon' => null,
        ]);

        Link::create([
            'text' => [
                'fr_FR' => 'À propos',
                'en_EN' => 'About'
            ],
            'url' => "/about",
            'icon' => null,
        ]);

        Link::create([
            'text' => [
                'fr_FR' => 'Actualités',
                'en_EN' => 'News'
            ],
            'url' => "#news",
            'icon' => null,
        ]);

        Link::create([
            'text' => [
                'fr_FR' => 'Réservations',
                'en_EN' => 'Bookings'
            ],
            'url' => "/selection",
            'icon' => null,
        ]);


        // footer's links col 2
        Link::create([
            'text' => [
                'fr_FR' => '(+33) 4 75 00 00 00',
                'en_EN' => '(+33) 4 75 00 00 00'
            ],
            'url' => "tel:+33475000000",
            'icon' => 'call',
        ]);

        Link::create([
            'text' => [
                'fr_FR' => '25 chemin du Verger, 30870 Clarensac',
                'en_EN' => '25 chemin du Verger, 30870 Clarensac'
            ],
            'url' => "",
            'icon' => 'location-pin',
        ]);

        Link::create([
            'text' => [
                'fr_FR' => 'info@hotelartichaut.fr',
                'en_EN' => 'info@hotelartichaut.fr'
            ],
            'url' => 'mailto:info@hotelartichaut.fr',
            'icon' => 'sms',
        ]);


        // footer's links col 3
        Link::create([
            'text' => [
                'fr_FR' => 'Instagram',
                'en_EN' => 'Instagram'
            ],
            'url' => "https://www.instagram.com/techprevue",
            'icon' => 'instagram',
        ]);

        Link::create([
            'text' => [
                'fr_FR' => 'Facebook',
                'en_EN' => 'Facebook'
            ],
            'url' => "https://www.facebook.fr/artichotel",
            'icon' => 'facebook',
        ]);

    }
}
