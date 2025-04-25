<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'image' => fake()->imageUrl(640, 480, 'products', true), // ảnh giả dạng sản phẩm
            'price' => fake()->numberBetween(10000, 1000000), // giá từ 10k đến 1 triệu
            'quantity' => fake()->numberBetween(1, 100), // số lượng
            'description' => fake()->sentence()
        ];
    }
}
