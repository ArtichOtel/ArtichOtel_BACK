<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Footer_Link>
 */
class FooterLinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'link_id' => fake()->numberBetween(1, 10),
            'footer_id' => fake()->numberBetween(1, 10)
        ];
    }
}
