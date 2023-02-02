<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Review::factory()->create([
            'title' => 'Parfait !',
            'description' => 'Mon séjour a été un régal.',
            'note' => 5
        ]);
    }
}