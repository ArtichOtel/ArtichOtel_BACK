<?php

namespace Database\Seeders;

use App\Models\Review;
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
        Review::create([
            'title' => 'Extraordinaire !',
            'description' => "Je n'aurais jamais imaginé passer un moment si agréable.",
            'note' => 5,
            'customer_id' => 1
        ]);

        Review::create([
            'title' => 'Super !',
            'description' => "Je n'aurais jamais imaginé passer un moment si agréable.",
            'note' => 3,
            'customer_id' => 2
        ]);

        Review::create([
            'title' => '300 caractères',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum metus mauris, convallis vehicula mi facilisis et. Quisque et rutrum nunc, non pharetra tortor. Sed malesuada dui justo, ac vestibulum odio elementum sed. Cra turpis lacus, sodales efficitur blandit et, venenatis at erat molestie.",
            'note' => 4,
            'customer_id' => 3
        ]);
    }
}
