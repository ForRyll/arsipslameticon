<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Helper untuk mengubah isi kolom string menjadi format JSON valid {"id": "text_lama"}
     */
    private function convertColumnToJson(string $table, string $column, bool$isNullable = false): void
    {
        // 1. Format data string biasa yang tidak NULL menjadi JSON valid
        DB::statement("
            UPDATE `{$table}` 
            SET `{$column}` = JSON_OBJECT('id', `{$column}`) 
            WHERE `{$column}` IS NOT NULL 
              AND `{$column}` NOT LIKE '{%'
        ");

        // 2. Ubah tipe kolom menjadi JSON
        Schema::table($table, function (Blueprint$tableGroup) use ($column,$isNullable) {
            if ($isNullable) {
                $tableGroup->json($column)->nullable()->change();
            } else {
                $tableGroup->json($column)->change();
            }
        });
    }

    public function up(): void
    {
        // choose_uses
        $this->convertColumnToJson('choose_uses', 'title');$this->convertColumnToJson('choose_uses', 'description', true);

        // company_profiles
        $this->convertColumnToJson('company_profiles', 'vision', true);$this->convertColumnToJson('company_profiles', 'mission', true);
        $this->convertColumnToJson('company_profiles', 'description', true);$this->convertColumnToJson('company_profiles', 'tagline', true);

        // galleries
        $this->convertColumnToJson('galleries', 'title');$this->convertColumnToJson('galleries', 'caption', true);

        // gallery_categories
        $this->convertColumnToJson('gallery_categories', 'name');

        // job_openings
        $this->convertColumnToJson('job_openings', 'title');$this->convertColumnToJson('job_openings', 'description', true);
        $this->convertColumnToJson('job_openings', 'department', true);$this->convertColumnToJson('job_openings', 'requirements', true);

        // news
        $this->convertColumnToJson('news', 'title');$this->convertColumnToJson('news', 'content');

        // news_categories
        $this->convertColumnToJson('news_categories', 'name');

        // positions
        $this->convertColumnToJson('positions', 'name');$this->convertColumnToJson('positions', 'description', true);

        // products
        $this->convertColumnToJson('products', 'name');
        $this->convertColumnToJson('products', 'sub_name', true);$this->convertColumnToJson('products', 'description', true);

        // product_categories
        $this->convertColumnToJson('product_categories', 'name');

        // services
        $this->convertColumnToJson('services', 'title');$this->convertColumnToJson('services', 'description', true);

        // team_members
        $this->convertColumnToJson('team_members', 'bio', true);
        $this->convertColumnToJson('team_members', 'about', true);$this->convertColumnToJson('team_members', 'quote', true);

        // work_phases
        $this->convertColumnToJson('work_phases', 'title');$this->convertColumnToJson('work_phases', 'description', true);
    }

    public function down(): void
    {
        //
    }
};