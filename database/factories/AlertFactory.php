<?php

namespace Database\Factories;

use App\Models\Alert;
use App\Models\Locker;
use App\Models\User;
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
    public function definition()
    {
        return [
            "buyer_name" => $this->faker->name(),
            "carrier_name" => $this->faker->name(),
            "store" => $this->faker->randomElement(['Amazon', 'Ebay', 'Aliexpress', 'Wish', 'Mercado Libre', 'Otro']),
            "tracking_code" => "000000" . $this->faker->numberBetween(10, 99),
            "bill_file" => $this->faker->randomElement(['1.pdf', '2.pdf', '3.pdf', '4.pdf', '5.pdf']),
            "description" => $this->faker->sentence(5),
            "status" => $this->faker->randomElement(array_keys(Alert::$_STATUS)),
            "user_id" => User::factory(),
            "locker_id" => Locker::factory(),
        ];
    }
}
