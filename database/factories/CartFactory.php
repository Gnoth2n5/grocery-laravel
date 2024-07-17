<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(), // Tạo user trước khi gán user_id
            'product_id' => \App\Models\Products::factory(), // Tạo product trước khi gán product_id, có thể null
            'quantity' => fake()->numberBetween(1, 10),
        ];
    }
}
