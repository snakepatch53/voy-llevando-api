<?php

namespace Database\Seeders;

use App\Models\Shipment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shipment::factory()
            ->count(4)
            ->hasShipmentProducts(3)
            ->create();

        Shipment::factory()
            ->count(7)
            ->hasShipmentProducts(4)
            ->create();
    }
}
