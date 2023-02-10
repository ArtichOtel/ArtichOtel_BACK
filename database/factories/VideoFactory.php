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
            'title' => "Visite guidée",
            'description' => "Voyagez au coeur de l'hôtel Artichaut, de la terrasse à la piscine, en passant par le grand salon, la salle de restaurant diététique, le spa et le jardin...",
            'url_video' => "https://www.youtube.com/watch?v=p7YXXieghto"
        ];
    }
}
