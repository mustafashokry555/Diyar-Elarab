<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRoles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        UserRoles::create([
            'role' => 'admin'
        ]);
        UserRoles::create([
            'role' => 'user'
        ]);
        $role = UserRoles::where('role','admin')->first();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'),
            'role_id' => $role->id,
        ]);
    }
}
