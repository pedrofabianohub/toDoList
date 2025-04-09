<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            "name" => "Admin",
            "email" => "teste@123.com",
            "password" => Hash::make('12345678'),
        ]);
    }
}
