<?php

namespace Database\Factories;

use App\Models\Alert;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            "description" => $this->faker->sentence(6),
            "price" => $this->faker->numberBetween(50, 200),
            "weight" => $this->faker->numberBetween(1, 20),
            "quantity" => $this->faker->numberBetween(1, 20),
            "subcategory_id" => Subcategory::factory(),
            "alert_id" => Alert::factory(),
        ];
    }
}
