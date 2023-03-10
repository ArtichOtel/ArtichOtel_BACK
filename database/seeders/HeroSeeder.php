<?php

namespace Database\Seeders;

use App\Models\Hero;
use App\Models\Link;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Hero::factory()->count(1)->create();
        Link::factory()->count(10)->create()->each(function ($link) {
            $link->heroes()->attach(array_slice([1], 0));
        });

        // foreach (Hero::all() as $hero) {
        //     foreach (Link::all() as $link) {
        //         $hero->links()->attach($link->id);
        //     }
        // }
    }
}
