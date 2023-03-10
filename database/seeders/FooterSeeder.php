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
        Footer::factory()->count(3)->create();

        foreach (Footer::all() as $footer) {
            foreach (Link::all() as $link) {
                $footer->links()->attach($link->id);
            }
        }
    }
}
