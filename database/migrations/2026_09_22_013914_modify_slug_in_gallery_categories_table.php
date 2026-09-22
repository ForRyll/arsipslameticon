<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('gallery_categories', function (Blueprint $table) {
            // Hapus constraint unique lama yang kaku
            $table->dropUnique('gallery_categories_slug_unique');
            
            // Ubah tipe kolom slug menjadi json
            $table->json('slug')->change();
        });
    }

    public function down(): void
    {
        Schema::table('gallery_categories', function (Blueprint $table) {
            $table->string('slug')->change();
            $table->unique('slug');
        });
    }
};