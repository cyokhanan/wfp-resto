<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->truncate();

        $orders = [
            // Customer 1 - Budi Santoso (Order 1)
            ['order_date' => '2025-04-16 10:15:00', 'status' => 'completed', 'customer_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            // Customer 2 - Siti Aminah (Order 2)
            ['order_date' => '2025-04-16 11:30:00', 'status' => 'completed', 'customer_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Customer 3 - Rudi Pratama (Order 3)
            ['order_date' => '2025-04-16 12:45:00', 'status' => 'completed', 'customer_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            // Customer 4 - Lina Mulyani (Order 4)
            ['order_date' => '2025-04-16 13:20:00', 'status' => 'completed', 'customer_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            // Customer 5 - Andi Wijaya (Order 5)
            ['order_date' => '2025-04-16 14:35:00', 'status' => 'completed', 'customer_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            // Customer 6 - Maya Susanti (Order 6 - large order)
            ['order_date' => '2025-04-16 15:50:00', 'status' => 'completed', 'customer_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            // Customer 7 - Tono Saputra (Order 7)
            ['order_date' => '2025-04-16 16:10:00', 'status' => 'completed', 'customer_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            // Customer 8 - Rina Aulia (Order 8)
            ['order_date' => '2025-04-16 17:25:00', 'status' => 'processing', 'customer_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            // Customer 9 - Eko Setiawan (Order 9)
            ['order_date' => '2025-04-16 18:40:00', 'status' => 'completed', 'customer_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            // Customer 10 - Fitri Nabila (Order 10)
            ['order_date' => '2025-04-16 19:05:00', 'status' => 'completed', 'customer_id' => 10, 'created_at' => now(), 'updated_at' => now()],
            // Customer 11 - Doni Prabowo (Order 11)
            ['order_date' => '2025-04-16 20:20:00', 'status' => 'completed', 'customer_id' => 11, 'created_at' => now(), 'updated_at' => now()],
            // Customer 12 - Vera Putri (Order 12)
            ['order_date' => '2025-04-16 21:35:00', 'status' => 'completed', 'customer_id' => 12, 'created_at' => now(), 'updated_at' => now()],
            // Customer 13 - Rizky Nugroho (Order 13 - large order)
            ['order_date' => '2025-04-16 22:15:00', 'status' => 'completed', 'customer_id' => 13, 'created_at' => now(), 'updated_at' => now()],
            // Customer 14 - Joko Santosa (Order 14)
            ['order_date' => '2025-04-16 23:30:00', 'status' => 'processing', 'customer_id' => 14, 'created_at' => now(), 'updated_at' => now()],
            // Customer 15 - Dewi Yuliana (Order 15)
            ['order_date' => '2025-04-17 00:45:00', 'status' => 'pending', 'customer_id' => 15, 'created_at' => now(), 'updated_at' => now()],
            // Customer 16 (Order 16)
            ['order_date' => '2025-04-17 09:15:00', 'status' => 'completed', 'customer_id' => 16, 'created_at' => now(), 'updated_at' => now()],
            // Customer 17 (Order 17)
            ['order_date' => '2025-04-17 10:30:00', 'status' => 'processing', 'customer_id' => 17, 'created_at' => now(), 'updated_at' => now()],
            // Customer 18 (Order 18)
            ['order_date' => '2025-04-17 11:45:00', 'status' => 'pending', 'customer_id' => 18, 'created_at' => now(), 'updated_at' => now()],
            // Customer 19 (Order 19)
            ['order_date' => '2025-04-17 12:20:00', 'status' => 'completed', 'customer_id' => 19, 'created_at' => now(), 'updated_at' => now()],
            // Customer 20 (Order 20)
            ['order_date' => '2025-04-17 13:35:00', 'status' => 'canceled', 'customer_id' => 20, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('orders')->insert($orders);
    }
}