<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\OrderStatus;

class OrderStatusSeed extends Seeder
{
    // vô hiệu hoá các hành động của model
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        OrderStatus::create([
            'name' => 'Pending',
            'description' => 'test'
        ]);
        OrderStatus::create([
            'name' => 'Shipped',
            'description' => 'test'
        ]);
        OrderStatus::create([
            'name' => 'Delivered',
            'description' => 'test'
        ]);
        OrderStatus::create([
            'name' => 'Cancelled',
            'description' => 'test'
        ]);
        OrderStatus::create([
            'name' => 'Returned',
            'description' => 'test'
        ]);
        OrderStatus::create([
            'name' => 'Refunded',
            'description' => 'test'
        ]);
        OrderStatus::create([
            'name' => 'Partially Refunded',
            'description' => 'test'
        ]);
        OrderStatus::create([
            'name' => 'Completed',
            'description' => 'test'
        ]);
    }
}
