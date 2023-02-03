<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\Footer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::factory()->count(10)->create();
        $ids = range(1, 10);
        Link::factory()->count(40)->create()->each(function ($link) use ($ids) {
            shuffle($ids);
            $link->footers()->attach(array_slice($ids, 0, rand(1, 4)));
        });
    }
}
