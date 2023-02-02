<?php

namespace Database\Seeders;

use App\Models\New_info;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        New_info::factory()->count(5)->create();
    }
}
