<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'text' => [
                'fr_FR' => fake()->text(20),
                'en_EN' => fake()->text(20),
            ],
            'url' => fake()->url(),
            'icon' => fake()->text(20)
        ];
    }
}
