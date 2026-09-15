<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat / Ambil Kategori Dummy
        $category = GalleryCategory::firstOrCreate(
            ['name' => 'Dokumentasi Kegiatan'],
            ['slug' => Str::slug('Dokumentasi Kegiatan')]
        );

        // 2. Buat Data Galeri Dummy
        Gallery::create([
            'category_id'   => $category->id,
            'title'         => 'Workshop Pengembangan Web',
            'display_order' => 1,
            'img_url'       => '/storage/galleries/sample1.jpg',
            'caption'       => 'Sesi foto bersama peserta workshop Laravel.',
        ]);

        Gallery::create([
            'category_id'   => $category->id,
            'title'         => 'Seminar Teknologi',
            'display_order' => 2,
            'img_url'       => '/storage/galleries/sample2.jpg',
            'caption'       => 'Penyampaian materi seputar arsitektur API.',
        ]);
    }
}