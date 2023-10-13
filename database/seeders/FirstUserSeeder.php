<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class FirstUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => env('FIRST_USER_FIRST_NAME', 'John'),
            'last_name' => env('FIRST_USER_LAST_NAME', 'Doe'),
            'email' => env('FIRST_USER_EMAIL', 'john.doe@gmail.com'),
            'password' => env('FIRST_USER_PASSWORD_HASH', Hash::make('password'))
        ]);
    }
}
