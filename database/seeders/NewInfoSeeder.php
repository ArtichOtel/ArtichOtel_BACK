<?php

namespace Database\Seeders;

use App\Models\NewInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewInfo::create([
            'title' => [
                'fr_FR' => 'Nouvelle literie',
                'en_EN' => 'New bedding'
            ],
            'description' => [
                'fr_FR' => "Nous avons choisi une literie en coton bio d’égypte. De quoi  vous offrir des nuits douces aux charmes d’orient.",
                'en_EN' => "We have chosen organic Egyptian cotton bedding. What offer you sweet nights with the charms of the Orient."
            ],
            'url_image' => config('app.url') . '/img/advantage1.jpg',
            'order' => 1
        ]);
        NewInfo::create([
            'title' => [
                'fr_FR' => 'Décoration Zen',
                'en_EN' => 'Zen decoration'
            ],
            'description' => [
                'fr_FR' => "Avec l'aide de notre nouvelle décoration dîtes 'Zen', vous pourez profiter un maximum de votre chambre.",
                'en_EN' => "With the help of our new decoration say 'Zen', you will be able to make the most of your room."
            ],
            'url_image' => config('app.url') . '/img/advantage2.jpg',
            'order' => 2
        ]);
        NewInfo::create([
            'title' => [
                'fr_FR' => 'Accès piscine',
                'en_EN' => 'Pool access'
            ],
            'description' => [
                'fr_FR' => "En préparation de cet été, nous vous offrons la mise à l'accès de notre nouvelle piscine toute neuve.",
                'en_EN' => "In preparation for this summer, we are offering access to our brand new swimming pool."
            ],
            'url_image' => config('app.url') . '/img/advantage3.jpg',
            'order' => 3
        ]);
    }
}
