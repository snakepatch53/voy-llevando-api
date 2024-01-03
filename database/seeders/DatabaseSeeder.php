<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
