<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamp('order_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('status', ['pending', 'completed', 'canceled', 'processing'])->default('pending');
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('food_id')->constrained('foods');
            $table->integer('quantity')->default(1);
            $table->double('total_price', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
