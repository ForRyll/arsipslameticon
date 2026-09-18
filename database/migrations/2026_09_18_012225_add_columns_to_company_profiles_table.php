<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('company_profiles', function (Blueprint $table) {
            // Menambahkan kolom tahun berdiri, status aktif, dan linkedin
            $table->year('founded_year')->nullable()->after('tagline');
            $table->string('linkedin_url')->nullable()->after('tiktok_url');
            $table->boolean('is_active')->default(true)->after('founded_year');

            // Menambahkan kolom addresses (JSON) untuk menampung banyak alamat sekaligus
            // Format data di DB misal: ["Alamat Kantor Pusat", "Alamat Cabang Jakarta"]
            $table->json('addresses')->nullable()->after('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('company_profiles', function (Blueprint $table) {
            $table->dropColumn([
                'founded_year',
                'linkedin_url',
                'is_active',
                'addresses',
            ]);
        });
    }
};