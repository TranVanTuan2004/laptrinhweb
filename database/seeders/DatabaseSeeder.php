<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\OrderDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // DB::table('order_details')->truncate(),
        // DB::table('orders')->truncate(),
        // DB::table('products')->truncate(),
        // DB::table('role')->truncate(),
        // DB::table('user_role')->truncate(),
        // DB::table('users')->truncate(),

        $this->call([

            UserSeeder::class,
            RoleSeeder::class,
            UserRoleSeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class
        ]);
    }
}
