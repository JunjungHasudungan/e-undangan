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
        $users = [
            [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password'  => bcrypt('password'),
                'role'   => 'user'
            ],
            [
               'name' => 'Test Admin',
                'email' => 'admin@admin.com',
                'password'  => bcrypt('password'),
                'role'  => 'admin'
            ],
        ];

        User::insert($users);
    }
}
