<?php

namespace Database\Seeders;

use App\Models\ShipmentProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShipmentProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShipmentProduct::factory()
            ->count(10)
            ->create();
    }
}
