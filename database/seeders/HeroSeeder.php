<?php

namespace Database\Seeders;

use App\Models\Hero;
use App\Models\Link;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Hero::factory()->count(10)->create();
        $ids = range(1, 10);
        Link::factory()->count(40)->create()->each(function ($link) use ($ids) {
            shuffle($ids);
            $link->heroes()->attach(array_slice($ids, 0, rand(1, 4)));
        });
    }
}
