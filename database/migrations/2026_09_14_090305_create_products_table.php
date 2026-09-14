<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Foreign Key ke product_categories
            $table->foreignUuid('category_id')
                  ->constrained('product_categories')
                  ->onDelete('cascade');

            // Foreign Key ke clients (nullable jika produk tidak terikat ke client tertentu)
            $table->foreignUuid('client_id')
                  ->nullable()
                  ->constrained('clients')
                  ->onDelete('set null');

            $table->string('name');
            $table->integer('display_order')->default(0);
            $table->text('description')->nullable();
            $table->string('link_url')->nullable();
            $table->string('img_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};