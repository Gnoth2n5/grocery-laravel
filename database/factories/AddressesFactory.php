<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Addresses>
 */
class AddressesFactory extends Factory
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
            'recipent_name' => fake()->name,
            'recipent_phone' => fake()->phoneNumber,
            'commune' => fake()->streetName,
            'district' => fake()->city,
            'city' => fake()->state,
            'detail' => fake()->address,
        ];
    }
}
