<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nbWord = rand(6, 30);
        $nbImage = rand(1, 9);
        $user_id = rand(1, 15);
        return [
            'description' => fake()->sentence($nbWord),
            'activite' => fake()->name(),
            'image1' => '/images/img-'. $nbImage .'.jpg',
            'user_id' => $user_id,
        ];
    }
}
