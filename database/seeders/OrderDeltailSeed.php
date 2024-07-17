<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\OrderDetail;

class OrderDeltailSeed extends Seeder
{
    // vô hiệu hoá các hành động của model
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        OrderDetail::factory()->count(10)->create();
    }
}
