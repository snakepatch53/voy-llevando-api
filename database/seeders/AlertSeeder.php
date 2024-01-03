<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            InfoSeeder::class,
            LockerSeeder::class,
            UserSeeder::class,
            ShipmentSeeder::class,
            AlertSeeder::class,
            TrackingSeeder::class,
            CategorySeeder::class,
            SubcategorySeeder::class,
            ProductSeeder::class,
            ShipmentProductSeeder::class,
        ]);
    }
}
