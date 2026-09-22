<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleAndUserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Role (JANGAN sertakan 'id' => 1)
        $superAdminRole = Role::firstOrCreate(['name' => 'Super Admin']);
        $staffRole      = Role::firstOrCreate(['name' => 'Staf']);

        // 2. Buat User Super Admin
        User::firstOrCreate(
            ['email' => 'admin@slameticon.com'],
            [
                'name'          => 'Super Admin',
                'password_hash' => Hash::make('password123'),
                'role_id'       => $superAdminRole->id, // Mengambil UUID dari role yang otomatis tergenerate
            ]
        );

        // 3. Buat User Staf
        $staffUsers = [
            [
                'name'    => 'Staf Content',
                'email'   => 'staf1@slameticon.com',
                'role_id' => $staffRole->id,
            ],
            [
                'name'    => 'Staf Operasional',
                'email'   => 'staf2@slameticon.com',
                'role_id' => $staffRole->id,
            ],
        ];

        foreach ($staffUsers as $userData) {
            User::firstOrCreate(
                ['email' => $userData['email']],
                array_merge($userData, [
                    'password_hash' => Hash::make('password123'),
                ])
            );
        }
    }
}