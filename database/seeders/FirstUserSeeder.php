<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class FirstUserSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'first_name' => env('FIRST_USER_FIRST_NAME', 'John'),
            'last_name' => env('FIRST_USER_LAST_NAME', 'Doe'),
            'email' => env('FIRST_USER_EMAIL', 'john.doe@example.com'),
            'password' =>  Hash::make('p@sswOrd')
        ]);

        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
        }
        $user->assignRole(config('app.superadmin_role','super-admin'));
    }
}
