<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nbWord = rand(6, 30);
        $nbImage = rand(1, 10);
        $user_id = rand(1, 15);
        $categorie_id = rand(1, 3);

        return [
            'nom' => fake()->name(),
            'description' => fake()->sentence($nbWord),
            'price' => rand(120, 2500),
            'image' => '/images/product-'. $nbImage .'.jpg',
            'user_id' => $user_id,
            'categorie_id' => $categorie_id,
        ];
    }
}
