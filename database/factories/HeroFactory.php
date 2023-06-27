<?php

namespace Database\Factories;

use App\Models\Hero;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
 */
class HeroFactory extends Factory
{

    protected $model = Hero::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => [
                'fr_FR' => "Hôtel L'Artichaut",
                'en_EN' => "L'Artichaut Hotel"
            ],
            'subtitle' => [
                'fr_FR' => "Le confort que vous méritez, sainement",
                'en_EN' => "The comfort you deserve, healthily"
            ],
            'url_image' => config("app.url") . '/img/base_hero.jpg',
        ];
    }
}
