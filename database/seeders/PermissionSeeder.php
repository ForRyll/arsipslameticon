<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $newPermissions = [
            'manage-galleries',
            'manage-clients',
            'manage-settings',
            'manage-team',
        ];

        foreach ($newPermissions as $perm) {
            Permission::firstOrCreate(
                ['name' => $perm],
                ['id' => (string) Str::uuid()]
            );
        }
    }
}