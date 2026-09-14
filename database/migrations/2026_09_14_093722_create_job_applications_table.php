<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Foreign Key ke tabel job_openings (menggunakan naming standar Laravel)
            $table->foreignUuid('job_opening_id')
                  ->constrained('job_openings')
                  ->onDelete('cascade');

            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            
            // Enum status sesuai catatan gambar
            $table->enum('status', [
                'applied',
                'screened',
                'interview_scheduled',
                'job_offer_extended',
                'accepted',
                'rejected'
            ])->default('applied');

            $table->string('cv_url');
            $table->text('cover_letter')->nullable();
            $table->timestamp('applied_at')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};