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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('subcategory_id')->nullable()->constrained('sub_categories')->onDelete('set null');
            $table->string('brand')->nullable();
            $table->decimal('weight', 5, 2)->nullable();
            $table->enum('gender', ['Men', 'Women', 'Unisex'])->default('Unisex');
            $table->integer('sku_number')->nullable();
            $table->json('tags')->nullable();
            $table->enum('refundable', ['refundable', 'non-refundable'])->default('non-refundable');
            $table->string('product_display_image')->nullable();
            $table->json('product_gallery_images')->nullable(); // Handles multiple images
            $table->integer('stock_quantity')->nullable();
            $table->enum('stock_status', ['in-stock', 'out-of-stock', 'pre-order'])->default('in-stock');
            $table->decimal('price', 10, 2);
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
