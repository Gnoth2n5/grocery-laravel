<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Suppliers;

class SuppliersSeed extends Seeder
{
    // vô hiệu hoá các hành động của model
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Suppliers::factory(10)->create();
    }
}
