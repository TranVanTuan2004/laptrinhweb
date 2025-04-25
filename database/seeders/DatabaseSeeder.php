<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();



        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            UserRoleSeeder::class
        ]);


        // Tạo 20 sản phẩm
        Product::factory()->count(20)->create();

        // Tạo 10 đơn hàng
        Order::factory()->count(200)->create();

        // Tạo chi tiết đơn hàng cho mỗi order, giả sử mỗi đơn hàng có 3 sản phẩm
        Order::all()->each(function ($order) {
            OrderDetail::factory()->count(3)->create([
                'order_id' => $order->id
            ]);
        });

    }
}
