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

         foreach (Hero::all() as $hero) {
             foreach (Link::all() as $link) {
                 if ($link->id < 3) {
                     $hero->links()->attach($link->id);
                 }
             }
         }
    }
}
