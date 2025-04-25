<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::inRandomOrder()->value('id'), // tạo user và gán id
            'total_amount' => fake()->numberBetween(100000, 5000000), // ví dụ từ 100k đến 5tr
            'address' => fake()->address(),
        ];
    }
}
