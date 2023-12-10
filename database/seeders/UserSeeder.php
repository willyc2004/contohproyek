<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();
        // User::create([
        //     'name' => "test",
        //     'email' => "test@gmail.com",
        //     'email_verified_at' => now(),
        //     'password' => bcrypt("12345678"), // password
        //     'role_id' => 3,
        //     'its_login' => '0',
        //     'its_active' => '1',
        //     'remember_token' => Str::random(10),
        // ]);
    }
}
