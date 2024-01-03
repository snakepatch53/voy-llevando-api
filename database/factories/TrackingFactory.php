<?php

namespace Database\Factories;

use App\Models\Alert;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tracking>
 */
class TrackingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "place" => $this->faker->randomElement(['Bodega', 'Aeropuerto', 'Oficina de Correos', 'En tránsito', 'En reparto', 'Entregado']),
            "description" => $this->faker->sentence(6),
            "alert_id" => Alert::factory(),
        ];
    }
}
