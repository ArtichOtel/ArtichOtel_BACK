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
            'title' => 'Hôtel L\'Artichaut',
            'subtitle' => 'Le confort que vous méritez sainement',
            'url_image' => config("app.url") . '/img/base_hero.png', // TODO: Changing to env('APP_URL')
        ];
    }
}
