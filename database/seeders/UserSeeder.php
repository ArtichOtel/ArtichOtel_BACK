<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'info@hotelartichaut.com',
            'pseudo' => 'Admin',
            //'password' => '$2y$10$ZcuDKMJ.ZHCiqPrPOzII3O0/3hdnZcr0NW8SkqFDklcXbKtsPNWbi⏎',
            'password' => Hash::make('admin'),
            'role_id' => 1
        ]);

        User::create([
            'email' => fake()->unique()->safeEmail(),
            'pseudo' => fake()->unique()->userName(),
            'password' => fake()->password(),
            'role_id' => 2
        ]);

        User::create([
            'email' => fake()->safeEmail(),
            'pseudo' => fake()->userName(),
            'password' => fake()->password(),
            'role_id' => 2
        ]);

        User::create([
            'email' => fake()->safeEmail(),
            'pseudo' => fake()->userName(),
            'password' => fake()->password(),
            'role_id' => 2
        ]);
    }
}
