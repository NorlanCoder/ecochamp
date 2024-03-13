<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activite>
 */
class ActiviteFactory extends Factory
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
            "Campagne",
            "Evénement",
            "Projet",
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
            'debut' => now(),
            'fin' => fake()->date(),
            'couverture' => '/images/img-'. $nbImage .'.jpg',
            'description' => fake()->sentence($nbWord),
            'activite_type' => $type[rand(0, 2)],
            'besoin'  => 'Partenaire,Bénévolat,Sponsor,Participant',
            'interventions' => $zone[rand(0, 7)],
            'user_id' => $user_id,
        ];
    }
}
