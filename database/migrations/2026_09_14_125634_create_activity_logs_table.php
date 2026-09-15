<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Aktor yang melakukan aksi (nullable jika aksi dilakukan sistem)
            $table->foreignUuid('user_id')
                  ->nullable()
                  ->constrained('users')
                  ->onDelete('set null');

            $table->string('action'); // Contoh: 'create', 'update', 'delete', 'login'
            $table->text('description')->nullable();

            // Menghasilkan kolom target_type (varchar) dan target_id (uuid)
            $table->nullableUuidMorphs('target');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};