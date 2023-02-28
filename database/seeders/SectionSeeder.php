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
        Section::create([
            'title' => [
                'fr_FR' => 'Hero',
                'en_EN' => 'Hero'
            ],
            "uri" => "/hero"
        ]);
        Section::create([
            'title' => [
                'fr_FR' => 'Offres du moment',
                'en_EN' => 'Current offers'
            ],
            "uri" => "/offers"
        ]);
        Section::create([
            'title' => [
                'fr_FR' => 'Nos services',
                'en_EN' => 'Our services'
            ],
            "uri" => "/advantages"
        ]);
        Section::create([
            'title' => [
                'fr_FR' => 'Actualités',
                'en_EN' => 'News'
            ],
            "uri" => "/news"
        ]);
        Section::create([
            'title' => [
                'fr_FR' => 'Avis',
                'en_EN' => 'Reviews'
            ],
            "uri" => "/reviews"
        ]);
        Section::create([
            'title' => [
                'fr_FR' => 'Nos chambres',
                'en_EN' => 'Our rooms'
            ],
            "uri" => "/room-types"
        ]);
        Section::create([
            'title' => [
                'fr_FR' => 'Visite guidée',
                'en_EN' => 'Guided tour'
            ],
            "uri" => "/video"
        ]);
        Section::create([
            'title' => [
                'fr_FR' => 'Footers',
                'en_EN' => 'Footers'
            ],
            "uri" => "/footers"
        ]);
    }
}
