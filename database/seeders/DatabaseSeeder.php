<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Hero;
use App\Models\Link;
use App\Models\Footer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Footer::factory()->count(10)->create();
        $ids = range(1, 10);
        Link::factory()->count(40)->create()->each(function ($link) use ($ids) {
            shuffle($ids);
            $link->footers()->attach(array_slice($ids, 0, rand(1, 4)));
        });


        Hero::factory()->count(10)->create();
        $ids = range(1, 10);
        Link::factory()->count(40)->create()->each(function ($link) use ($ids) {
            shuffle($ids);
            $link->heroes()->attach(array_slice($ids, 0, rand(1, 4)));
        });
    }
}
