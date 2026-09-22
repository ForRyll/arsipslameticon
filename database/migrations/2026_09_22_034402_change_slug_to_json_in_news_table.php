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
        Schema::table('news', function (Blueprint $table) {
            // Hapus unique index terlebih dahulu sebelum mengubah tipe kolom
            $table->dropUnique('news_slug_unique');

            // Ubah tipe kolom slug dari VARCHAR menjadi JSON
            $table->json('slug')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            // Kembalikan tipe kolom ke VARCHAR
            $table->string('slug', 255)->change();

            // Kembalikan unique index
            $table->unique('slug', 'news_slug_unique');
        });
    }
};