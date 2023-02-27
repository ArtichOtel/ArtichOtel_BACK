<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'phone_number' => fake()->phoneNumber(),
            'lang' => fake()->randomElement(["FR", "FR", "FR", "FR", "EN"]),
            'avatar_url' => fake()->unique()->url(),
            'user_id' => fake()->randomDigitNotZero()
        ];
    }
}
