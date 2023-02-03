<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'phone_number' => '0515325845',
            'lang' => fake()->randomElement(["FR", "FR", "FR", "FR", "EN"]),
            'avatar_url' => fake()->unique()->url(),
            'user_id' => 2
        ]);

        Customer::create([
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'phone_number' => '0485965231',
            'lang' => fake()->randomElement(["FR", "FR", "FR", "FR", "EN"]),
            'avatar_url' => fake()->unique()->url(),
            'user_id' => 3
        ]);

        Customer::create([
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'phone_number' => '0352565874',
            'lang' => fake()->randomElement(["FR", "FR", "FR", "FR", "EN"]),
            'avatar_url' => fake()->unique()->url(),
            'user_id' => 4
        ]);
    }
}
