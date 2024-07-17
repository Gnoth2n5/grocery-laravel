<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'order_id' => \App\Models\Orders::factory(), // Tạo order trước khi gán order_id
            'product_id' => \App\Models\Products::factory(), // Tạo product trước khi gán product_id, có thể null
            'quantity' => fake()->numberBetween(1, 10), // Số lượng ngẫu nhiên từ 1 đến 10
            'price' => fake()->randomFloat(2, 1, 100), // Giá ngẫu nhiên từ 1.00 đến 100.00
        ];
    }
}
