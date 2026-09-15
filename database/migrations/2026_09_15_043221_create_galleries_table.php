<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Foreign Key ke gallery_categories
            $table->foreignUuid('category_id')
                  ->constrained('gallery_categories')
                  ->onDelete('cascade');

            $table->string('title');
            $table->integer('display_order')->default(0);
            $table->string('img_url')->nullable();
            $table->text('caption')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};