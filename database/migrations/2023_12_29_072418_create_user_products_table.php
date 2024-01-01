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
        Schema::create('user_products', function (Blueprint $table) {
            $table->id();
            $table->string("image")->nullable();
            $table->text("description")->nullable();
            $table->decimal("price", 10, 2)->nullable();
            $table->decimal("sale_price", 10, 2)->nullable();
            $table->decimal("discount_price", 10, 2)->nullable();
            $table->boolean("on_sale")->nullable()->default(false);
            $table->enum("status", ["active", "in_active", "cancelled", "approved"])->default("in_active");
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_products');
    }
};
