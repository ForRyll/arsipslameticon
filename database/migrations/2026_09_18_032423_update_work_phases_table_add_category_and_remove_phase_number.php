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
        Schema::table('work_phases', function (Blueprint $table) {
            // 1. Tambah kolom product_category_id jika belum ada
            if (! Schema::hasColumn('work_phases', 'product_category_id')) {
                $table->uuid('product_category_id')->nullable()->after('id');
            } else {
                // Jika kolom sudah terlanjur dibuat di percobaan sebelumnya, ubah jadi nullable
                $table->uuid('product_category_id')->nullable()->change();
            }

            // 2. Hapus phase_number jika kolomnya masih ada
            if (Schema::hasColumn('work_phases', 'phase_number')) {
                $table->dropColumn('phase_number');
            }
        });

        // 3. Tambahkan foreign key constraint secara terpisah
        Schema::table('work_phases', function (Blueprint $table) {
            $table->foreign('product_category_id')
                ->references('id')
                ->on('product_categories')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('work_phases', function (Blueprint $table) {
            $table->dropForeign(['product_category_id']);
            $table->dropColumn('product_category_id');

            if (! Schema::hasColumn('work_phases', 'phase_number')) {
                $table->string('phase_number')->nullable()->after('id');
            }
        });
    }
};