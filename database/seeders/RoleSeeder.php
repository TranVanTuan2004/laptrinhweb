<?php

namespace Database\Seeders;

use App\Models\Role;
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
        Role::insert([
            [
                'name' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        Role::insert([
            [
                'name' => 'manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        Role::insert([
            [
                'name' => 'leader',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        Role::insert([
            [
                'name' => 'member',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
