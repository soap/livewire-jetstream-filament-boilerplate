<?php

namespace App\Console\Commands;

use BezhanSalleh\FilamentShield\Commands\MakeShieldSuperAdminCommand as BaseCommand;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\text;
use function Laravel\Prompts\password;

class CreateSuperAdminCommand extends BaseCommand
{
    protected function createSuperAdmin(): Authenticatable
    {
        return static::getUserModel()::create([
            'first_name' => text(label: 'First Name', required: true),
            'last_name' => text(label: 'Last Name', required: true),
            'email' => text(
                label: 'Email address',
                required: true,
                validate: fn (string $email): ?string => match (true) {
                    !filter_var($email, FILTER_VALIDATE_EMAIL) => 'The email address must be valid.',
                    static::getUserModel()::where('email', $email)->exists() => 'A user with this email address already exists',
                    default => null,
                },
            ),
            'password' => Hash::make(password(
                label: 'Password',
                required: true,
                validate: fn (string $value) => match (true) {
                    strlen($value) < 8 => 'The password must be at least 8 characters.',
                    default => null
                }
            )),
        ]);
    }
}
