<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => [
                'fr_FR' => 'Visite guidée',
                'en_EN' => 'Guided tour'
            ],
            'description' => [
                'fr_FR' => "Voyagez au coeur de l'hôtel Artichaut, de la terrasse à la piscine, en passant par le grand salon, la salle de restaurant diététique, le spa et le jardin...",
                'en_EN' => "Travel to the heart of the Artichaut hotel, from the terrace to the swimming pool, passing through the large lounge, the dietetic restaurant room, the spa and the garden..."
            ],
            'url_video' => "https://www.youtube.com/watch?v=p7YXXieghto"
        ];
    }
}
