<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suppliers>
 */
class SuppliersFactory extends Factory
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
            'name' => fake()->company, // Tạo tên nhà cung cấp ngẫu nhiên
            'email' => fake()->unique()->safeEmail, // Tạo email ngẫu nhiên và duy nhất
            'phone' => fake()->phoneNumber, // Tạo số điện thoại ngẫu nhiên
        ];
    }
}
