<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin123')
        ]);
        $user = User::create([
            'name' => 'user',
            'email' => 'user@mail.com',
            'password' => bcrypt('admin123')
        ]);

        $admin->assignRole('admin');
        $user->assignRole('user');
    }
}
