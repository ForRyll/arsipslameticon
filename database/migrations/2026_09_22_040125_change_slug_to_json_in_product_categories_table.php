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
        // 1. Hapus kunci Unique dari kolom slug terlebih dahulu
        Schema::table('product_categories', function (Blueprint $table) {
            $table->dropUnique(['slug']);
        });

        // 2. Baru ubah tipe kolom slug dari VARCHAR menjadi JSON
        Schema::table('product_categories', function (Blueprint $table) {
            $table->json('slug')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_categories', function (Blueprint $table) {
            // Kembalikan ke VARCHAR jika rollback
            $table->string('slug', 255)->change();
            $table->unique('slug');
        });
    }
};
