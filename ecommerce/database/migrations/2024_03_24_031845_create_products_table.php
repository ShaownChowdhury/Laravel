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
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('featured_img')->nullable();
            $table->float('price');
            $table->float('selling_price')->nullable();
            $table->string('sku')->nullable();
            $table->string('brand')->nullable();
            $table->boolean('stock')->default(true);
            $table->boolean('status')->default(true);
            $table->boolean('featured')->default(false);
            $table->mediumText('short_detail')->nullable();
            $table->longText('long_detail')->nullable();
            $table->json('cross_sell')->nullable();
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
