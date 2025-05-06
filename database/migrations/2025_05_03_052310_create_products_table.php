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
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();

            $table->string('name')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('sku')->nullable()->unique();
            $table->string('barcode')->nullable();
            $table->string('thumbnail')->nullable();
            $table->longText('description')->nullable();

            $table->decimal('purchase_price', 10, 2);
            $table->decimal('selling_price', 10, 2);
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->decimal('tax_rate', 10, 2)->nullable();

            $table->boolean('is_featured')->default(1);
            $table->boolean('is_bestselling')->default(1);
            $table->boolean('is_online')->default(1);
            $table->boolean('is_pos')->default(1);
            $table->boolean('status')->default(1);

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

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
