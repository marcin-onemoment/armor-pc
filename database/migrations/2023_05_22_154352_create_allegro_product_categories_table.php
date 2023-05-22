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
        Schema::create('allegro_product_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('allegro_product_id')->unsigned();
            $table->unsignedBigInteger('allegro_category_id')->unsigned();
            $table->foreign('allegro_product_id')->references('id')->on('allegro_products')->onDelete('cascade');
            $table->foreign('allegro_category_id')->references('id')->on('allegro_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allegro_product_categories');
    }
};
