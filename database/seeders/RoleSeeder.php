<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roles::insert([
            [
                'name' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        Roles::insert([
            [
                'name' => 'manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        Roles::insert([
            [
                'name' => 'leader',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        Roles::insert([
            [
                'name' => 'member',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
