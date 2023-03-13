<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Addresse>
 */
class AdresseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'country' => fake()->country(),
            'zipcode' => fake()->countryCode(),
            'city' => fake()->city(),
            'address' => fake()->streetAddress(),
            'additional' => 'apt. ' . rand(1, 30),
            'is_pro' => rand(1),
            'customer_id' => fake()->randomDigitNotZero()
        ];
    }
}
