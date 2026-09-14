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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->uuid('id')->primary(); // UUID sebagai Primary Key menggantikan INT auto-increment
            $table->string('name');
            $table->string('email')->unique();
            $table->text('vision')->nullable(); // Menggunakan text agar muat visi panjang
            $table->text('mission')->nullable(); // Menggunakan text agar muat misi panjang
            $table->text('address')->nullable();
            $table->string('whatsapp')->nullable(); // Disarankan varchar/string agar aman dari overflow nomor telepon
            $table->string('logo_url')->nullable();
            $table->text('description')->nullable();
            $table->string('ig_url')->nullable();
            $table->string('tiktok_url')->nullable();
            $table->string('tagline')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};