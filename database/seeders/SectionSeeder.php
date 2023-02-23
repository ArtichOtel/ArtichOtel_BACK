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
            "title" => "Offres du moment",
            "uri" => "/offers"
        ]);
        Section::create([
            "title" => "Nos services",
            "uri" => "/advantages"
        ]);
        Section::create([
            "title" => "Actualités",
            "uri" => "/news"
        ]);
        Section::create([
            "title" => "Avis",
            "uri" => "/reviews"
        ]);
        Section::create([
            "title" => "Nos chambres",
            "uri" => "/room-types"
        ]);
        Section::create([
            "title" => "Visite guidée",
            "uri" => "/video"
        ]);
        Section::create([
            "title" => "Footers",
            "uri" => "/footers"
        ]);
    }
}
