<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()
            ->count(3)
            ->hasShipmentProducts(4)
            ->create();

        Product::factory()
            ->count(5)
            ->hasShipmentProducts(2)
            ->create();
    }
}
