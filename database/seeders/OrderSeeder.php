<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->truncate();

        DB::table('orders')->insert([
            ['order_date' => '2025-04-16 10:00:00', 'status' => 'Completed', 'customer_id' => 1, 'food_id' => 1, 'quantity' => 1, 'total_price' => 35000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 12:30:00', 'status' => 'Completed', 'customer_id' => 2, 'food_id' => 2, 'quantity' => 1, 'total_price' => 30000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 14:00:00', 'status' => 'Pending', 'customer_id' => 3, 'food_id' => 3, 'quantity' => 2, 'total_price' => 70000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 15:30:00', 'status' => 'Processing', 'customer_id' => 4, 'food_id' => 4, 'quantity' => 1, 'total_price' => 25000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 16:45:00', 'status' => 'Completed', 'customer_id' => 5, 'food_id' => 5, 'quantity' => 3, 'total_price' => 105000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 18:00:00', 'status' => 'Canceled', 'customer_id' => 6, 'food_id' => 6, 'quantity' => 1, 'total_price' => 40000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 19:15:00', 'status' => 'Processing', 'customer_id' => 7, 'food_id' => 7, 'quantity' => 2, 'total_price' => 60000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 20:30:00', 'status' => 'Pending', 'customer_id' => 8, 'food_id' => 8, 'quantity' => 1, 'total_price' => 35000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 22:00:00', 'status' => 'Completed', 'customer_id' => 9, 'food_id' => 9, 'quantity' => 4, 'total_price' => 140000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 23:30:00', 'status' => 'Canceled', 'customer_id' => 10, 'food_id' => 10, 'quantity' => 1, 'total_price' => 50000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-17 01:00:00', 'status' => 'Completed', 'customer_id' => 11, 'food_id' => 11, 'quantity' => 2, 'total_price' => 70000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-17 03:00:00', 'status' => 'Pending', 'customer_id' => 12, 'food_id' => 12, 'quantity' => 3, 'total_price' => 90000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
