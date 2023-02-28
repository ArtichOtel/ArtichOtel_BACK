<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'begin_date' => fake()->date(),
            'end_date' => fake()->date(),
            'rooms_id' => fake()->randomDigitNotZero(),
            'customers_id' => fake()->randomDigitNotZero(),
        ];
    }
}
