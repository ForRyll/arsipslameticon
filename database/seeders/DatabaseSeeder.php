<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\CompanyProfile;
use App\Models\Position;
use App\Models\TeamMember;
use App\Models\NewsCategory;
use App\Models\News;
use App\Models\ProductCategory;
use App\Models\Client;
use App\Models\Product;
use App\Models\GalleryCategory;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Contact;
use App\Models\JobOpening;
use App\Models\JobApplication;
use App\Models\ActivityLog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Roles & Permissions (Attach dengan UUID pivot)
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleStaf  = Role::create(['name' => 'staf']);

        $permissionsList = [
            'manage-users',
            'manage-company-profile',
            'manage-news',
            'manage-products',
            'manage-services',
            'manage-jobs',
            'manage-contacts',
            'view-activity-logs',
        ];

        $adminSyncData = [];
        foreach ($permissionsList as $permName) {
            $perm = Permission::create(['name' => $permName]);
            $adminSyncData[$perm->id] = ['id' => (string) Str::uuid()];
        }

        // Role Admin memiliki semua permission
        $roleAdmin->permissions()->attach($adminSyncData);

        // 2. Users (Admin & Staf)
        $user = User::create([
            'role_id' => $roleAdmin->id,
            'name' => 'Super Admin',
            'email' => 'admin@slameticon.com',
            'password_hash' => 'password',
        ]);

        $stafUser = User::create([
            'role_id' => $roleStaf->id,
            'name' => 'Staf News',
            'email' => 'staf@slameticon.com',
            'password_hash' => 'password',
        ]);

        // Contoh: Memberikan akses 'manage-news' ke role staf
        $newsPermission = Permission::where('name', 'manage-news')->first();
        if ($newsPermission) {
            $roleStaf->permissions()->attach([
                $newsPermission->id => ['id' => (string) Str::uuid()]
            ]);
        }

        // 3. Company Profiles
        CompanyProfile::create([
            'name' => 'Slameticon Digital',
            'email' => 'info@slameticon.com',
            'tagline' => 'Solusi Digital Terintegrasi',
            'description' => 'Solusi Digital Terintegrasi untuk Bisnis Anda',
            'whatsapp' => '081234567890',
            'address' => 'Jl. Kebon Jeruk No. 12, Jakarta',
            'vision' => 'Menjadi perusahaan IT terdepan',
            'mission' => 'Memberikan layanan digital terbaik',
        ]);

        // 4. Positions & Team Members
        $position = Position::create([
            'name' => 'Chief Executive Officer',
            'description' => 'Executive Officer',
        ]);
        
        TeamMember::create([
            'position_id' => $position->id,
            'name' => 'Budi Santoso',
            'bio' => 'Founder & CEO',
        ]);

        // 5. News Categories & News
        $newsCategory = NewsCategory::create(['name' => 'Teknologi', 'slug' => 'teknologi']);
        $news = News::create([
            'category_id' => $newsCategory->id,
            'author_id' => $user->id,
            'title' => 'Peluncuran Platform Slameticon',
            'slug' => 'peluncuran-platform-slameticon',
            'content' => 'Slameticon resmi meluncurkan layanan terbaru berbasis Laravel.',
        ]);

        // 6. Product Categories, Clients & Products
        $productCategory = ProductCategory::create(['name' => 'Enterprise System', 'slug' => 'enterprise-system']);
        $client = Client::create(['name' => 'PT Bank Nusantara', 'website_url' => 'https://banknusantara.co.id']);
        Product::create([
            'category_id' => $productCategory->id,
            'client_id' => $client->id,
            'name' => 'Core Banking API',
            'description' => 'Integrasi API perbankan aman.',
        ]);

        // 7. Gallery Categories
        GalleryCategory::create(['name' => 'Event & Gathering', 'slug' => 'event-gathering']);

        // 8. Services
        Service::create([
            'title' => 'Custom Software Development',
            'description' => 'Pengembangan aplikasi backend & frontend khusus.',
            'display_order' => 1,
        ]);

        // 9. Settings
        Setting::create(['key' => 'site_title', 'value' => 'Slameticon Official']);
        Setting::create(['key' => 'maintenance_mode', 'value' => 'false']);

        // 10. Contacts
        Contact::create([
            'name' => 'Pelanggan Potential',
            'email' => 'client@example.com',
            'subject' => 'Tanya Layanan API',
            'message' => 'Halo, saya ingin bertanya mengenai integrasi API.',
            'status' => 'unread',
        ]);

        // 11. Job Openings & Job Applications
        $job = JobOpening::create([
            'title' => 'Senior Laravel Developer',
            'description' => 'Mencari backend developer berpengalaman.',
            'status' => 'open',
            'location' => 'Remote / Jakarta',
            'job_type' => 'Full-time',
            'department' => 'Engineering',
        ]);

        JobApplication::create([
            'job_opening_id' => $job->id,
            'name' => 'Pelamar Kerja',
            'email' => 'pelamar@gmail.com',
            'status' => 'applied',
            'cv_url' => 'https://storage.slameticon.com/cv/sample.pdf',
        ]);

        // 12. Activity Logs
        ActivityLog::create([
            'user_id' => $user->id,
            'action' => 'create',
            'description' => 'Membuat berita baru: Peluncuran Platform Slameticon',
            'target_type' => News::class,
            'target_id' => $news->id,
        ]);
    }
}