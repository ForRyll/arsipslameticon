<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_openings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->text('description')->nullable();
            
            // Enum status lowongan
            $table->enum('status', ['draft', 'open', 'closed', 'archived'])->default('draft');
            
            $table->string('location')->nullable(); // misal: 'Jakarta, Indonesia' / 'Remote'
            $table->string('job_type')->nullable(); // misal: 'Full-time', 'Part-time', 'Contract', 'Internship'
            $table->string('department')->nullable(); // misal: 'Engineering', 'Marketing', 'HR'
            $table->text('requirements')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_openings');
    }
};