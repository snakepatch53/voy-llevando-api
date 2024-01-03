<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(2)
            ->hasAlerts(3)
            ->hasShipments(3)
            ->create();

        User::factory()
            ->count(5)
            ->hasAlerts(3)
            ->create();

        User::factory()
            ->count(5)
            ->hasShipments(3)
            ->create();
    }
}
