<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name' => 'Trần Văn Tuấn',
            'email' => 'tuantran280504@gmail.com',
            'password' => Hash::make('123456'),
            'email_verified_at' => now(),
            'remember_token' => 'adb12312',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        User::factory(100)->create();
    }
}
