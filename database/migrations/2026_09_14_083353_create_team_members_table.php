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
        Schema::create('team_members', function (Blueprint $table) {
            $table->uuid('id')->primary(); // Primary Key UUID
            
            // Foreign Key ke tabel positions (menggunakan UUID)
            $table->foreignUuid('position_id')
                  ->constrained('positions')
                  ->onDelete('cascade');

            $table->string('name');
            $table->string('photo_url')->nullable();
            $table->text('bio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};