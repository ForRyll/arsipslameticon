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
        $this->call([
            GallerySeeder::class,
        ]);
    }
}