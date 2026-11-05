<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\CompanyProfile;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\JobApplication;
use App\Models\JobOpening;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Permission;
use App\Models\Position;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Role;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\User;
use App\Models\WorkPhase;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DummyDataSeeder extends Seeder
{
    public function run(): void
    {
        // ----------------------------------------------------
        // 1. PERMISSIONS & ROLES SETUP
        // ----------------------------------------------------
        // Daftar permission disesuaikan persis dengan string di Policy
        $permissionNames = [
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

        $permissions = [];
        foreach ($permissionNames as $name) {
            $permissions[] = Permission::firstOrCreate(['name' => $name]);
        }

        $superAdminRole = Role::firstOrCreate(['name' => 'Super Admin']);
        $staffRole      = Role::firstOrCreate(['name' => 'Staf']);

        // Super Admin dapat semua permission
        $superAdminRole->permissions()->sync(collect($permissions)->pluck('id'));

        // Staf diberi contoh modul yang bisa diakses (misal: Berita, Galeri, Lowongan Kerja, dan Produk)
        $staffPermissions = Permission::whereIn('name', [
            'manage-news',
            'manage-galleries',
            'manage-jobs',
            'manage-products',
        ])->pluck('id');

        $staffRole->permissions()->sync($staffPermissions);

        // Ambil User Admin untuk relasi
        $adminUser = User::where('email', 'admin@slameticon.com')->first();

        // ----------------------------------------------------
        // 2. COMPANY PROFILE
        // ----------------------------------------------------
        CompanyProfile::firstOrCreate(
            ['email' => 'info@slameticon.com'],
            [
                'name'         => 'PT Slameticon Solusindo',
                'vision'       => ['id' => 'Menjadi penyedia solusi TI terdepan di Indonesia.'],
                'mission'      => ['id' => 'Memberikan layanan terbaik, inovatif, dan handal.'],
                'address'      => 'Jl. Raya Purwokerto No. 123, Central Java',
                'whatsapp'     => '6281234567890',
                'description'  => ['id' => 'Perusahaan konsultan dan pengembang solusi digital.'],
                'tagline'      => ['id' => 'Innovating Your Digital Future'],
                'founded_year' => 2024,
                'is_active'    => true,
            ]
        );

        // ----------------------------------------------------
        // 3. CLIENTS
        // ----------------------------------------------------
        $client1 = Client::create([
            'name'        => 'Telkom Indonesia',
            'website_url' => 'https://telkom.co.id',
            'display_url' => 'telkom.co.id',
        ]);

        $client2 = Client::create([
            'name'        => 'Bank Central Asia',
            'website_url' => 'https://bca.co.id',
            'display_url' => 'bca.co.id',
        ]);

        // ----------------------------------------------------
        // 4. NEWS CATEGORY & NEWS
        // ----------------------------------------------------
        $newsCategoryName = 'Teknologi';
        $newsCat = NewsCategory::create([
            'name' => ['id' => $newsCategoryName],
            'slug' => Str::slug($newsCategoryName),
        ]);

        if ($adminUser) {
            News::create([
                'author_id'   => $adminUser->id,
                'category_id' => $newsCat->id,
                'title'       => ['id' => 'Peluncuran Platform Baru Slameticon'],
                'slug'        => 'peluncuran-platform-baru-slameticon',
                'content'     => ['id' => 'Kami bangga mengumumkan sistem backend dan admin panel baru kami berbasis Filament v3.'],
            ]);
        }

        // ----------------------------------------------------
        // 5. GALLERY CATEGORY & GALLERY
        // ----------------------------------------------------
        $galleryCategoryName = 'Kegiatan Kantor';
        $galCat = GalleryCategory::create([
            'name' => ['id' => $galleryCategoryName],
            'slug' => Str::slug($galleryCategoryName),
        ]);

        Gallery::create([
            'category_id'   => $galCat->id,
            'title'         => ['id' => 'Gathering Tahunan 2026'],
            'display_order' => 1,
            'caption'       => ['id' => 'Foto kebersamaan tim Slameticon saat acara tahunan.'],
        ]);

        // ----------------------------------------------------
        // 6. JOB OPENING & APPLICATIONS
        // ----------------------------------------------------
        $job = JobOpening::create([
            'title'        => ['id' => 'Senior Backend Developer'],
            'description'  => ['id' => 'Mencari Laravel / Go developer berpengalaman.'],
            'status'       => 'open',
            'location'     => 'Purwokerto / Remote',
            'job_type'     => 'Full-time',
            'department'   => ['id' => 'Engineering'],
            'requirements' => ['id' => 'Menguasai Laravel, REST API, SQL, dan Git.'],
        ]);

        JobApplication::create([
            'job_opening_id' => $job->id,
            'name'           => 'Budi Santoso',
            'email'          => 'budi@example.com',
            'phone'          => '081299887766',
            'status'         => 'applied',
            'cv_url'         => 'cvs/budi-cv.pdf',
            'cover_letter'   => 'Saya sangat berminat untuk bergabung sebagai Backend Developer.',
        ]);

        // ----------------------------------------------------
        // 7. PRODUCT CATEGORIES, PRODUCTS & WORK PHASES
        // ----------------------------------------------------
        $productCategoryName = 'Web Application';
        $prodCat = ProductCategory::create([
            'name' => ['id' => $productCategoryName],
            'slug' => Str::slug($productCategoryName),
        ]);

        Product::create([
            'category_id'   => $prodCat->id,
            'client_id'     => $client1->id,
            'name'          => ['id' => 'Enterprise Resource Planning System'],
            'sub_name'      => ['id' => 'ERP Platform'],
            'display_order' => 1,
            'description'   => ['id' => 'Sistem manufaktur dan inventaris terintegrasi.'],
        ]);

        WorkPhase::create([
            'product_category_id' => $prodCat->id,
            'title'               => ['id' => 'Analisis Kebutuhan & Architecture Design'],
            'description'         => ['id' => 'Tahap awal perancangan skema DB dan UI/UX Wireframe.'],
            'display_order'       => 1,
        ]);

        // ----------------------------------------------------
        // 8. POSITIONS & TEAM MEMBERS
        // ----------------------------------------------------
        $position = Position::create([
            'name'        => ['id' => 'Chief Executive Officer'],
            'description' => ['id' => 'Pimpinan Eksekutif Perusahaan'],
        ]);

        TeamMember::create([
            'position_id' => $position->id,
            'name'        => 'Hadiq Fadlul Wafi',
            'about'       => ['id' => 'Fokus pada arsitektur perangkat lunak yang scalable.'],
            'quote'       => ['id' => 'Continuous improvement through clean code.'],
        ]);

        // ----------------------------------------------------
        // 9. SERVICES & CONTACTS
        // ----------------------------------------------------
        Service::create([
            'title'         => ['id' => 'Software Custom Development'],
            'description'   => ['id' => 'Pengembangan aplikasi web dan mobile sesuai kebutuhan bisnis.'],
            'display_order' => 1,
        ]);

        Contact::create([
            'name'    => 'Rina Wijaya',
            'email'   => 'rina@example.com',
            'phone'   => '085711223344',
            'subject' => 'Penawaran Kerjasama Web Development',
            'message' => 'Halo tim Slameticon, kami ingin melakukan konsultasi pembuatan aplikasi mobile.',
            'status'  => 'unread',
        ]);
    }
}
