<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        $adminRole = role::where('name', 'admin')->first();
       $admin = User::updateOrCreate(
    ['email' => 'admin@example.com'], // condition
    [
        'name' => 'Admin User',
        'password' => Hash::make('Lb123456'),
    ]
);

        $admin->roles()->sync([$adminRole->id]);
    }
}
