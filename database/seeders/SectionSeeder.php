<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        Section::create([
            "title" => "Header",
            "uri" => "header"
        ]);*/
        Section::create([
            "title" => "Hero",
            "uri" => "/hero"
        ]);
        Section::create([
            "title" => "Offers",
            "uri" => "/offers"
        ]);
        Section::create([
            "title" => "Advantages",
            "uri" => "/advantages"
        ]);
        Section::create([
            "title" => "News",
            "uri" => "/news"
        ]);
        Section::create([
            "title" => "Reviews",
            "uri" => "/reviews"
        ]);
        Section::create([
            "title" => "RoomTypes",
            "uri" => "/room-types"
        ]);
        Section::create([
            "title" => "Footers",
            "uri" => "/footers"
        ]);
    }
}
