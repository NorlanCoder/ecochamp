<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
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
        $statut = array("Activiste", "OSC");
        $nzone = rand(0, 7);
        $nbImage = rand(1, 11);
        return [
            'firstname' => fake()->firstname,
            'lastname' => fake()->lastname,
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'intervations' => $zone[$nzone],
            'statut' => $statut[rand(0, 1)],
            'profile' => '/images/avatar-'. $nbImage .'.jpg',
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
