<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Categories;

class CategoriesSeed extends Seeder
{
    // vô hiệu hoá các hành động của model
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Categories::create(['name' => 'Fruits', 'description' => 'Fruits']);
        Categories::create(['name' => 'Vegetables', 'description' => 'Vegetables']);
        Categories::create(['name' => 'Meat', 'description' => 'Meat']);
        Categories::create(['name' => 'Dairy', 'description' => 'Dairy']);
        Categories::create(['name' => 'Bakery', 'description' => 'Bakery']);
        Categories::create(['name' => 'Beverages', 'description' => 'Beverages']);
        Categories::create(['name' => 'Snacks', 'description' => 'Snacks']);
    }
}
