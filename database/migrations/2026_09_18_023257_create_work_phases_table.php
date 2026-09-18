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
        Schema::create('work_phases', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('phase_number')->nullable(); // Contoh: "01", "02"
            $table->string('title');                    // Contoh: "Discovery & Business Analysis"
            $table->text('description')->nullable();    // Deskripsi singkat fase kerja
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_phases');
    }
};