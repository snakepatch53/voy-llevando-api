<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()
            ->count(5)
            ->hasSubcategories(3)
            ->create();

        Category::factory()
            ->count(5)
            ->hasSubcategories(3)
            ->create();
    }
}
