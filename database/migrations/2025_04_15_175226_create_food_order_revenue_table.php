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
        Schema::create('food_order_revenue', function (Blueprint $table) {
            $table->foreignId('food_id')->constrained('foods');
            $table->integer('order_count')->default(0);
            $table->double('total_revenue', 8, 2)->default(0.00);
            $table->primary('food_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_order_revenue');
    }
};
