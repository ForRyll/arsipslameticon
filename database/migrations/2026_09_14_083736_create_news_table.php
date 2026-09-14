<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Foreign Key ke tabel users sebagai author
            $table->foreignUuid('author_id')
                  ->constrained('users')
                  ->onDelete('cascade');

            // Foreign Key ke tabel news_categories
            $table->foreignUuid('category_id')
                  ->constrained('news_categories')
                  ->onDelete('cascade');

            $table->string('title');
            $table->string('slug')->unique();
            $table->string('img_url')->nullable();
            $table->longText('content');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};