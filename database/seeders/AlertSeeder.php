<?php

namespace Database\Seeders;

use App\Models\Alert;
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
        Alert::factory()
            ->count(5)
            ->hasTrackings(3)
            ->hasProducts(3)
            ->create();

        Alert::factory()
            ->count(5)
            ->hasTrackings(3)
            ->hasProducts(3)
            ->create();
    }
}
