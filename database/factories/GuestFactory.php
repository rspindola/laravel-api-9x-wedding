<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $elements = [
            'Familia do Noivo',
            'Familia da Noiva',
            'Amigos em comum',
            'Amigos do Noivo',
            'Amigas da Noiva',
            'Amigos dos pais da Noiva',
            'Amigos dos pais do Noivo'
        ];

        return [
            'origin' => fake()->randomElement($elements),
            'rating' => fake()->numberBetween(0, 5),
            'treatment' => fake()->title(),
            'name' => fake()->name(),
            'escorts' => fake()->numberBetween(0, 7),
            'total' => fake()->numberBetween(0, 3),
            'men' => fake()->numberBetween(0, 3),
            'women' => fake()->numberBetween(0, 3),
            'children' => fake()->boolean(),
            'save_the_date' => fake()->boolean(),
            'confirmation' => fake()->boolean(),
            'invite' => fake()->boolean(),
            'gift' => fake()->boolean(),
        ];
    }
}
