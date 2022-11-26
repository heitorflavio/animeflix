<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\episodios>
 */
class EpisodiosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(10),
            'image' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker'),
            'video' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker'),
            'anime_id' => $this->faker->numberBetween(1, 10),
            
        ];
    }
}
