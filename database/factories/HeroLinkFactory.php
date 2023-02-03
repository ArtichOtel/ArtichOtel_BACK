<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero_Link>
 */
class HeroLinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'heroe_id' => fake()->numberBetween(1, 10),
            'link_id' => fake()->numberBetween(1, 10)
        ];
    }
}
