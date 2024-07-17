<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
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
            'name' => fake()->words(3, true), // Tạo tên sản phẩm ngẫu nhiên
            'description' => fake()->paragraph, // Tạo mô tả ngẫu nhiên
            'price' => fake()->randomFloat(2, 10, 100), // Giá ngẫu nhiên từ 10.00 đến 100.00
            'stock' => fake()->numberBetween(0, 100), // Số lượng tồn kho ngẫu nhiên từ 0 đến 100
            'image' => fake()->imageUrl(), // URL hình ảnh ngẫu nhiên
            'category_id' => fake()->randomElement([1,2,3,4,5,6,7]), // Tạo category trước khi gán category_id, có thể null
            'supplier_id' => \App\Models\Suppliers::factory(), // Tạo supplier trước khi gán supplier_id, có thể null
        ];
    }
}
