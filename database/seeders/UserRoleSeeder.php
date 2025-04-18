<?php

namespace Database\Seeders;

use App\Models\userRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            userRole::insert([
                [
                    'user_id' => $i,
                    'role_id' => rand(1, 4),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}
