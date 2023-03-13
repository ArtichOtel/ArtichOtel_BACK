<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
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
