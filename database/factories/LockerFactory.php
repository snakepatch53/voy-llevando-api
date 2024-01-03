<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locker>
 */
class LockerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "popup" => $this->faker->randomElement([1, 0]),
            "img" => $this->faker->randomElement(['1.png', '2.png', '3.png', '4.png', '5.png']),
        ];
    }
}
