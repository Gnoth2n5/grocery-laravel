<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupons>
 */
class CouponsFactory extends Factory
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
            'code' => fake()->unique()->regexify('[A-Za-z0-9]{10}'), // Tạo mã ngẫu nhiên có độ dài 10 ký tự
            'discount' => fake()->numberBetween(5, 50), // Giảm giá ngẫu nhiên từ 5 đến 50 phần trăm
            'expiry_date' => fake()->dateTimeBetween('now', '+1 year')->format('Y-m-d'), // Ngày hết hạn ngẫu nhiên trong vòng 1 năm
            'min_value' => fake()->randomFloat(2, 50, 500), // Giá trị tối thiểu ngẫu nhiên từ 50.00 đến 500.00
        ];
    }
}
