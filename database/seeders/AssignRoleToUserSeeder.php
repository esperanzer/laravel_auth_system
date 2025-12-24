<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AssignRoleToUserSeeder extends Seeder
{
    public function run()
    {
        // Create admin user
        $user = User::firstOrCreate(
            ['email' => 'admin01@example.com'],
            [
                'name' => 'esperanza admin user',
                'password' => bcrypt('password123'),
            ]
        );

        // Assign admin role
        $user->assignRole('admin');
    }
}
