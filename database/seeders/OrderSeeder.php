<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->truncate();

        DB::table('orders')->insert([
            // Customer 1
            ['order_date' => '2025-04-16 10:00:00', 'status' => 'Completed', 'customer_id' => 1, 'food_id' => 1, 'quantity' => 2, 'total_price' => 70000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 10:05:00', 'status' => 'Completed', 'customer_id' => 1, 'food_id' => 3, 'quantity' => 1, 'total_price' => 30000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 10:10:00', 'status' => 'Completed', 'customer_id' => 1, 'food_id' => 7, 'quantity' => 1, 'total_price' => 30000, 'created_at' => now(), 'updated_at' => now()],

            // Customer 2
            ['order_date' => '2025-04-16 11:00:00', 'status' => 'Completed', 'customer_id' => 2, 'food_id' => 2, 'quantity' => 1, 'total_price' => 30000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 11:10:00', 'status' => 'Completed', 'customer_id' => 2, 'food_id' => 5, 'quantity' => 2, 'total_price' => 70000, 'created_at' => now(), 'updated_at' => now()],

            // Customer 3
            ['order_date' => '2025-04-16 12:00:00', 'status' => 'Pending', 'customer_id' => 3, 'food_id' => 3, 'quantity' => 2, 'total_price' => 60000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 12:15:00', 'status' => 'Pending', 'customer_id' => 3, 'food_id' => 6, 'quantity' => 1, 'total_price' => 40000, 'created_at' => now(), 'updated_at' => now()],

            // Customer 4
            ['order_date' => '2025-04-16 13:00:00', 'status' => 'Processing', 'customer_id' => 4, 'food_id' => 4, 'quantity' => 1, 'total_price' => 25000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 13:10:00', 'status' => 'Processing', 'customer_id' => 4, 'food_id' => 8, 'quantity' => 3, 'total_price' => 105000, 'created_at' => now(), 'updated_at' => now()],

            // Customer 5
            ['order_date' => '2025-04-16 14:00:00', 'status' => 'Completed', 'customer_id' => 5, 'food_id' => 9, 'quantity' => 1, 'total_price' => 35000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 14:05:00', 'status' => 'Completed', 'customer_id' => 5, 'food_id' => 10, 'quantity' => 2, 'total_price' => 100000, 'created_at' => now(), 'updated_at' => now()],

            // Customer 6 (GGWP)
            ['order_date' => '2025-04-16 15:00:00', 'status' => 'Completed', 'customer_id' => 6, 'food_id' => 1, 'quantity' => 15, 'total_price' => 525000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 15:10:00', 'status' => 'Completed', 'customer_id' => 6, 'food_id' => 2, 'quantity' => 10, 'total_price' => 300000, 'created_at' => now(), 'updated_at' => now()],

            // Customer 7
            ['order_date' => '2025-04-16 16:00:00', 'status' => 'Processing', 'customer_id' => 7, 'food_id' => 7, 'quantity' => 1, 'total_price' => 30000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 16:15:00', 'status' => 'Processing', 'customer_id' => 7, 'food_id' => 12, 'quantity' => 2, 'total_price' => 60000, 'created_at' => now(), 'updated_at' => now()],

            // Customer 8
            ['order_date' => '2025-04-16 17:00:00', 'status' => 'Pending', 'customer_id' => 8, 'food_id' => 5, 'quantity' => 2, 'total_price' => 70000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 17:10:00', 'status' => 'Pending', 'customer_id' => 8, 'food_id' => 6, 'quantity' => 1, 'total_price' => 40000, 'created_at' => now(), 'updated_at' => now()],

            // Customer 9
            ['order_date' => '2025-04-16 18:00:00', 'status' => 'Completed', 'customer_id' => 9, 'food_id' => 11, 'quantity' => 2, 'total_price' => 70000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 18:10:00', 'status' => 'Completed', 'customer_id' => 9, 'food_id' => 8, 'quantity' => 1, 'total_price' => 35000, 'created_at' => now(), 'updated_at' => now()],

            // Customer 10
            ['order_date' => '2025-04-16 19:00:00', 'status' => 'Canceled', 'customer_id' => 10, 'food_id' => 4, 'quantity' => 1, 'total_price' => 25000, 'created_at' => now(), 'updated_at' => now()],

            // Customer 11
            ['order_date' => '2025-04-16 20:00:00', 'status' => 'Completed', 'customer_id' => 11, 'food_id' => 3, 'quantity' => 1, 'total_price' => 30000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 20:10:00', 'status' => 'Completed', 'customer_id' => 11, 'food_id' => 9, 'quantity' => 2, 'total_price' => 70000, 'created_at' => now(), 'updated_at' => now()],

            // Customer 12
            ['order_date' => '2025-04-16 21:00:00', 'status' => 'Completed', 'customer_id' => 12, 'food_id' => 10, 'quantity' => 1, 'total_price' => 50000, 'created_at' => now(), 'updated_at' => now()],

            // Customer 13 (GGWP)
            ['order_date' => '2025-04-16 22:00:00', 'status' => 'Completed', 'customer_id' => 13, 'food_id' => 11, 'quantity' => 12, 'total_price' => 420000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-16 22:10:00', 'status' => 'Completed', 'customer_id' => 13, 'food_id' => 12, 'quantity' => 10, 'total_price' => 300000, 'created_at' => now(), 'updated_at' => now()],

            // Customer 14
            ['order_date' => '2025-04-16 23:00:00', 'status' => 'Completed', 'customer_id' => 14, 'food_id' => 5, 'quantity' => 2, 'total_price' => 70000, 'created_at' => now(), 'updated_at' => now()],

            // Customer 15
            ['order_date' => '2025-04-17 00:00:00', 'status' => 'Pending', 'customer_id' => 15, 'food_id' => 6, 'quantity' => 1, 'total_price' => 40000, 'created_at' => now(), 'updated_at' => now()],
            ['order_date' => '2025-04-17 00:10:00', 'status' => 'Pending', 'customer_id' => 15, 'food_id' => 8, 'quantity' => 1, 'total_price' => 35000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
