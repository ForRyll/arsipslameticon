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
        Schema::table('news_categories', function (Blueprint $table) {
            // Drop unique index lama terlebih dahulu karena tipe JSON tidak bisa memiliki index VARCHAR standar
            $table->dropUnique('news_categories_slug_unique');

            // Ubah tipe kolom slug menjadi JSON
            $table->json('slug')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news_categories', function (Blueprint $table) {
            $table->string('slug')->change();
            $table->unique('slug', 'news_categories_slug_unique');
        });
    }
};