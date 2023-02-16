<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\Footer;
use App\Models\Footer_Link;
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
        Footer::factory()->count(5)->create();
        // $ids = range(1, 30);
        // Link::factory()->count(10)->create()->each(function ($link) use ($ids) {
        //     shuffle($ids);
        //     $link->footers()->attach(array_slice($ids, 0, rand(1, 4)));
        // });
        // Footer::factory()->count(10)->create();
        // Link::factory()->count(10)->create()->each(function ($link) {
        //     $link->heroes()->attach(array_slice([1], 0));
        // });


        //         SELECT * FROM footers f
        // INNER JOIN footer_link fl ON f.id = fl.footer_id
        // INNER JOIN links l ON l.id = fl.link_id

        // Link::factory()->count(5)->create();

        Link::factory()->count(5)->create()->each(function ($link) {
            $link->footers()->attach(array_slice([1], 0));
        });

        // Footer_Link::create([
        //     'footer_id' => 1,
        //     'link_id' => 3
        // ]);
        // Footer_Link::create([
        //     'footer_id' => 2,
        //     'link_id' => 4
        // ]);
        // Footer_Link::create([
        //     'footer_id' => 3,
        //     'link_id' => 5
        // ]);
        // Footer_Link::create([
        //     'footer_id' => 4,
        //     'link_id' => 6
        // ]);
        // Footer_Link::create([
        //     'footer_id' => 5,
        //     'link_id' => 7
        // ]);
    }
}
