<?php

namespace Database\Seeders;

use App\Models\Tracking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tracking::factory()
            ->count(10)
            ->create();
    }
}
