<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\Product;

class OrderDetailFactory extends Factory
{
    public function definition(): array
    {
        return [
            'order_id' => Order::inRandomOrder()->value('id'),  // Lấy ngẫu nhiên order_id
            'product_id' => Product::inRandomOrder()->value('id'),  // Lấy ngẫu nhiên product_id
            'quantity' => fake()->numberBetween(1, 10),  // Số lượng sản phẩm
            'notes' => fake()->sentence(),  // Ghi chú ngẫu nhiên
        ];
    }
}
