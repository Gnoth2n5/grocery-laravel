<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
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
            'user_id' => \App\Models\User::factory(), // Tạo user trước khi gán user_id
            'total' => fake()->randomFloat(2, 20, 500), // Tổng tiền ngẫu nhiên từ 20.00 đến 500.00
            'shipping_address_id' => \App\Models\Addresses::factory(), // Tạo address trước khi gán shipping_address_id, có thể null
            'coupon_id' => \App\Models\Coupons::factory(), // Tạo coupon trước khi gán coupon_id, có thể null
            'status_id' => fake()->randomElement([1,2,3,4,5,6,7,8]), // Tạo status trước khi gán status_id
            'payment_method' => fake()->randomElement(['payment by card', 'payment on delivery']), // Phương thức thanh toán ngẫu nhiên
        ];
    }
}
