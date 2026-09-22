<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar 15 permission utama sesuai Policy
        $permissions = [
            'manage-users',
            'manage-roles',
            'manage-permissions',
            'manage-clients',
            'manage-company-profile',
            'manage-contacts',
            'manage-galleries',
            'manage-jobs',
            'manage-news',
            'manage-team',
            'manage-products',
            'manage-services',
            'manage-settings',
            'manage-work-phases',
            'view-activity-logs',
        ];

        foreach ($permissions as $permissionName) {
            Permission::firstOrCreate(
                ['name' => $permissionName],
                ['id' => (string) Str::uuid()]
            );
        }
    }
}