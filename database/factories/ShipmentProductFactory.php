<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Shipment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShipmentProduct>
 */
class ShipmentProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "shipment_id" =>  Shipment::factory(),
            "product_id" =>  Product::factory(),
        ];
    }
}
