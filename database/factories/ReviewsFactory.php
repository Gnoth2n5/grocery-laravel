<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reviews>
 */
class ReviewsFactory extends Factory
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
            'user_id' => \App\Models\User::factory(), // Tạo user trước khi gán user_id, có thể null
            'product_id' => \App\Models\Products::factory(), // Tạo product trước khi gán product_id
            'rating' => fake()->numberBetween(1, 5), // Điểm đánh giá ngẫu nhiên từ 1 đến 5
            'comment' => fake()->paragraph, // Bình luận ngẫu nhiên
        ];
    }
}
