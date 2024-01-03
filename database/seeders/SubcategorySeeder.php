<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::factory()
            ->count(5)
            ->hasProducts(5)
            ->create();

        Subcategory::factory()
            ->count(5)
            ->hasProducts(5)
            ->create();
    }
}
