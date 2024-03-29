<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Booking;
use Illuminate\Database\Seeder;
use Database\Seeders\HeroSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\RoomSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\FooterSeeder;
use Database\Seeders\ReviewSeeder;
use Database\Seeders\SectionSeeder;
use Database\Seeders\CustomerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            AdvantageSeeder::class,
            NewInfoSeeder::class,
            OfferSeeder::class,
            RoomsTypeSeeder::class,
            VideoSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CustomerSeeder::class,
            ReviewSeeder::class,
            LinkSeeder::class,
            HeroSeeder::class,
            FooterSeeder::class,
            SectionSeeder::class,
            RoomSeeder::class,
            BookingSeeder::class,
            OptionalServicesSeeder::class
        ]);
    }
}
