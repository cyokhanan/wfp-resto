<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(table: 'order_status')->truncate();

        DB::table('order_status')->insert([
            ['order_id' => 1, 'status' => 'Completed', 'changed_at' => '2025-04-16 11:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['order_id' => 2, 'status' => 'Completed', 'changed_at' => '2025-04-16 13:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['order_id' => 3, 'status' => 'Pending', 'changed_at' => '2025-04-16 14:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['order_id' => 4, 'status' => 'Processing', 'changed_at' => '2025-04-16 15:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['order_id' => 5, 'status' => 'Completed', 'changed_at' => '2025-04-16 16:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['order_id' => 6, 'status' => 'Canceled', 'changed_at' => '2025-04-16 17:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['order_id' => 7, 'status' => 'Processing', 'changed_at' => '2025-04-16 18:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['order_id' => 8, 'status' => 'Pending', 'changed_at' => '2025-04-16 19:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['order_id' => 9, 'status' => 'Completed', 'changed_at' => '2025-04-16 20:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['order_id' => 10, 'status' => 'Canceled', 'changed_at' => '2025-04-16 21:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['order_id' => 11, 'status' => 'Processing', 'changed_at' => '2025-04-16 22:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['order_id' => 12, 'status' => 'Completed', 'changed_at' => '2025-04-16 23:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['order_id' => 13, 'status' => 'Completed', 'changed_at' => '2025-04-17 01:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['order_id' => 14, 'status' => 'Pending', 'changed_at' => '2025-04-17 02:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['order_id' => 15, 'status' => 'Processing', 'changed_at' => '2025-04-17 03:00:00', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
