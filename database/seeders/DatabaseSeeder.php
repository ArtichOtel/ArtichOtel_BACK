<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Customer;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          $this->call([
              RoleSeeder::class,
              UserSeeder::class,
              CustomerSeeder::class,
              ReviewSeeder::class
              ]);
    }
}
