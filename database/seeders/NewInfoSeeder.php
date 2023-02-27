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
            'title' => 'Nouvelle literie',
            'description' => 'Nous avons choisi une literie en coton bio d’égypte. De quoi  vous offrir des nuits douces aux charmes d’orient.',
            'url_image' => config('app.url') . '/img/advantage1.jpg',
            'order' => 1
        ]);
        NewInfo::create([
            'title' => 'Décoration Zen',
            'description' => "Avec l'aide de notre nouvelle décoration dîtes 'Zen', vous pourez profiter un maximum de votre chambre.",
            'url_image' => config('app.url') . '/img/advantage2.jpg',
            'order' => 2
        ]);
        NewInfo::create([
            'title' => 'Accès piscine',
            'description' => "En préparation de cet été, nous vous offrons la mise à l'accès de note nouvelle piscine toute neuve.",
            'url_image' => config('app.url') . '/img/advantage3.jpg',
            'order' => 3
        ]);
    }
}
