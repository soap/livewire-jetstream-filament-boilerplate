<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => config('app.superadmin_role','super-admin'), 'guard_name' => 'web']);
        Role::create(['name' => config('app.admin_role','admin'), 'guard_name' => 'web']);
        Role::create(['name' => config('app.user_role','user'), 'guard_name' => 'web']);
    }
}
