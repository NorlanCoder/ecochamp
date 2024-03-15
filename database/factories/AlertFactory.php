<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alert>
 */
class AlertFactory extends Factory
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
        $type = array(
            "Ordure",
            "Feu de brousse",
            "Autre pollution",
        );
        $zone = array(
            "Cotonou",
            "Abomey-Calavi",
            "Porto-novo",
            "Parakou",
            "Bohicon",
            "Djougou",
            "Abomey",
            "Adjohoun",
        );
        
        return [
            'nom' => fake()->name(),
            'date_remarque' => fake()->date(),
            'image_principale' => '/images/img-'. $nbImage .'.jpg',
            'description' => fake()->sentence($nbWord),
            'alert_type' => $type[rand(0, 2)],
            'interventions' => $zone[rand(0, 7)],
            'user_id' => $user_id,
        ];
    }
}
