<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->word(),
            'description' => "Lorem ipsum dolor sit amet consectetur. Pretium gravida non integer magna.\n
            Nibh facilisi eget justo tristique.\n
            Nunc purus vehicula curabitur egestas.",
            'url_image' => config('app.url') . '/img/offer.jpg',
            'begin_date' => fake()->date(),
            'end_date' => fake()->date()
        ];
    }
}
