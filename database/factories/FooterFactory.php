<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Footer>
 */
class FooterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $order = 1;
        return [
            'title' => [
                'fr_FR' => fake()->name(),
                'en_EN' => fake()->name()
            ],
            'order' => $order++
        ];
    }
}
