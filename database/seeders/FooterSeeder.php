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
/*        Footer::factory()->count(3)->create();

        foreach (Footer::all() as $footer) {
            foreach (Link::all() as $link) {
                $footer->links()->attach($link->id);
            }
        }*/

        Footer::create([
            'title' => [
                'fr_FR' => "Hôtel L'Artichaut",
                'en_EN' => "L'Artichaut Hotel"
            ],
            'order' => 1
        ]);
        Footer::create([
            'title' => [
                'fr_FR' => "Contact",
                'en_EN' => "Contact"
            ],
            'order' => 2
        ]);
        Footer::create([
            'title' => [
                'fr_FR' => "Réseaux sociaux",
                'en_EN' => "Social Networks"
            ],
            'order' => 3
        ]);

        foreach (Footer::all() as $footer) {
            if ($footer->id === 1 ) {
                foreach (Link::all() as $link) {
                    if ($link->id > 2 && $link->getAttribute('id') <7) {
                        $footer->links()->attach($link->id);
                    }
                };
            }

            if ($footer->id === 2 ) {
                foreach (Link::all() as $link) {
                    if ($link->id > 6 && $link->getAttribute('id') <10) {
                        $footer->links()->attach($link->id);
                    }
                };
            }

            if ($footer->id === 3 ) {
                foreach (Link::all() as $link) {
                    if ($link->id > 9) {
                        $footer->links()->attach($link->id);
                    }
                };
            }

        }

    }
}
