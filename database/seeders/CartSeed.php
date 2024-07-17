<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Cart;

class CartSeed extends Seeder
{
    // vô hiệu hoá các hành động của model
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Cart::factory(10)->create();
    }
}
