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
        Schema::create('order_foods', function (Blueprint $table) {
            $table->foreignId('order_id')->constrained('orders');
            $table->foreignId('food_id')->constrained('foods');
            $table->integer('quantity')->default(1);
            $table->double('total_price', 8, 2);
            $table->primary(['order_id', 'food_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_foods');
    }
};
