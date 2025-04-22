<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('order_status')->truncate();

$statuses = [
    // Order 1 - Completed
    ['order_id' => 1, 'status' => 'Pending', 'changed_at' => '2025-04-16 10:15:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 1, 'status' => 'Processing', 'changed_at' => '2025-04-16 10:20:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 1, 'status' => 'Completed', 'changed_at' => '2025-04-16 10:45:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 2
    ['order_id' => 2, 'status' => 'Pending', 'changed_at' => '2025-04-16 11:30:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 2, 'status' => 'Processing', 'changed_at' => '2025-04-16 11:35:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 2, 'status' => 'Completed', 'changed_at' => '2025-04-16 11:55:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 3
    ['order_id' => 3, 'status' => 'Pending', 'changed_at' => '2025-04-16 12:45:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 3, 'status' => 'Processing', 'changed_at' => '2025-04-16 12:50:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 3, 'status' => 'Completed', 'changed_at' => '2025-04-16 13:10:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 4
    ['order_id' => 4, 'status' => 'Pending', 'changed_at' => '2025-04-16 13:20:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 4, 'status' => 'Processing', 'changed_at' => '2025-04-16 13:25:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 4, 'status' => 'Completed', 'changed_at' => '2025-04-16 13:50:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 5
    ['order_id' => 5, 'status' => 'Pending', 'changed_at' => '2025-04-16 14:35:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 5, 'status' => 'Processing', 'changed_at' => '2025-04-16 14:40:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 5, 'status' => 'Completed', 'changed_at' => '2025-04-16 15:05:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 6
    ['order_id' => 6, 'status' => 'Pending', 'changed_at' => '2025-04-16 15:50:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 6, 'status' => 'Processing', 'changed_at' => '2025-04-16 15:55:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 6, 'status' => 'Completed', 'changed_at' => '2025-04-16 16:30:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 7
    ['order_id' => 7, 'status' => 'Pending', 'changed_at' => '2025-04-16 16:10:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 7, 'status' => 'Processing', 'changed_at' => '2025-04-16 16:15:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 7, 'status' => 'Completed', 'changed_at' => '2025-04-16 16:40:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 8
    ['order_id' => 8, 'status' => 'Pending', 'changed_at' => '2025-04-16 17:25:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 8, 'status' => 'Processing', 'changed_at' => '2025-04-16 17:30:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 9
    ['order_id' => 9, 'status' => 'Pending', 'changed_at' => '2025-04-16 18:40:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 9, 'status' => 'Processing', 'changed_at' => '2025-04-16 18:45:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 9, 'status' => 'Completed', 'changed_at' => '2025-04-16 19:05:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 10
    ['order_id' => 10, 'status' => 'Pending', 'changed_at' => '2025-04-16 19:05:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 10, 'status' => 'Processing', 'changed_at' => '2025-04-16 19:10:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 10, 'status' => 'Completed', 'changed_at' => '2025-04-16 19:30:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 11
    ['order_id' => 11, 'status' => 'Pending', 'changed_at' => '2025-04-16 20:20:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 11, 'status' => 'Processing', 'changed_at' => '2025-04-16 20:25:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 11, 'status' => 'Completed', 'changed_at' => '2025-04-16 20:50:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 12
    ['order_id' => 12, 'status' => 'Pending', 'changed_at' => '2025-04-16 21:35:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 12, 'status' => 'Processing', 'changed_at' => '2025-04-16 21:40:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 12, 'status' => 'Completed', 'changed_at' => '2025-04-16 22:10:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 13
    ['order_id' => 13, 'status' => 'Pending', 'changed_at' => '2025-04-16 22:15:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 13, 'status' => 'Processing', 'changed_at' => '2025-04-16 22:20:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 13, 'status' => 'Completed', 'changed_at' => '2025-04-16 22:50:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 14
    ['order_id' => 14, 'status' => 'Pending', 'changed_at' => '2025-04-16 23:30:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 14, 'status' => 'Processing', 'changed_at' => '2025-04-16 23:35:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 15
    ['order_id' => 15, 'status' => 'Pending', 'changed_at' => '2025-04-17 00:45:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 16
    ['order_id' => 16, 'status' => 'Pending', 'changed_at' => '2025-04-17 09:15:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 16, 'status' => 'Processing', 'changed_at' => '2025-04-17 09:20:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 16, 'status' => 'Completed', 'changed_at' => '2025-04-17 09:45:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 17
    ['order_id' => 17, 'status' => 'Pending', 'changed_at' => '2025-04-17 10:30:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 17, 'status' => 'Processing', 'changed_at' => '2025-04-17 10:35:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 18
    ['order_id' => 18, 'status' => 'Pending', 'changed_at' => '2025-04-17 11:45:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 19
    ['order_id' => 19, 'status' => 'Pending', 'changed_at' => '2025-04-17 12:20:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 19, 'status' => 'Processing', 'changed_at' => '2025-04-17 12:25:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 19, 'status' => 'Completed', 'changed_at' => '2025-04-17 12:50:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 20
    ['order_id' => 20, 'status' => 'Pending', 'changed_at' => '2025-04-17 13:35:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 20, 'status' => 'Canceled', 'changed_at' => '2025-04-17 13:40:00', 'created_at' => now(), 'updated_at' => now()],
];
$statuses = [
    // Order 1 - Completed
    ['order_id' => 1, 'status' => 'Pending', 'changed_at' => '2025-04-16 10:15:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 1, 'status' => 'Processing', 'changed_at' => '2025-04-16 10:20:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 1, 'status' => 'Completed', 'changed_at' => '2025-04-16 10:45:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 2
    ['order_id' => 2, 'status' => 'Pending', 'changed_at' => '2025-04-16 11:30:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 2, 'status' => 'Processing', 'changed_at' => '2025-04-16 11:35:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 2, 'status' => 'Completed', 'changed_at' => '2025-04-16 11:55:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 3
    ['order_id' => 3, 'status' => 'Pending', 'changed_at' => '2025-04-16 12:45:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 3, 'status' => 'Processing', 'changed_at' => '2025-04-16 12:50:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 3, 'status' => 'Completed', 'changed_at' => '2025-04-16 13:10:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 4
    ['order_id' => 4, 'status' => 'Pending', 'changed_at' => '2025-04-16 13:20:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 4, 'status' => 'Processing', 'changed_at' => '2025-04-16 13:25:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 4, 'status' => 'Completed', 'changed_at' => '2025-04-16 13:50:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 5
    ['order_id' => 5, 'status' => 'Pending', 'changed_at' => '2025-04-16 14:35:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 5, 'status' => 'Processing', 'changed_at' => '2025-04-16 14:40:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 5, 'status' => 'Completed', 'changed_at' => '2025-04-16 15:05:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 6
    ['order_id' => 6, 'status' => 'Pending', 'changed_at' => '2025-04-16 15:50:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 6, 'status' => 'Processing', 'changed_at' => '2025-04-16 15:55:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 6, 'status' => 'Completed', 'changed_at' => '2025-04-16 16:30:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 7
    ['order_id' => 7, 'status' => 'Pending', 'changed_at' => '2025-04-16 16:10:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 7, 'status' => 'Processing', 'changed_at' => '2025-04-16 16:15:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 7, 'status' => 'Completed', 'changed_at' => '2025-04-16 16:40:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 8
    ['order_id' => 8, 'status' => 'Pending', 'changed_at' => '2025-04-16 17:25:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 8, 'status' => 'Processing', 'changed_at' => '2025-04-16 17:30:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 9
    ['order_id' => 9, 'status' => 'Pending', 'changed_at' => '2025-04-16 18:40:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 9, 'status' => 'Processing', 'changed_at' => '2025-04-16 18:45:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 9, 'status' => 'Completed', 'changed_at' => '2025-04-16 19:05:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 10
    ['order_id' => 10, 'status' => 'Pending', 'changed_at' => '2025-04-16 19:05:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 10, 'status' => 'Processing', 'changed_at' => '2025-04-16 19:10:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 10, 'status' => 'Completed', 'changed_at' => '2025-04-16 19:30:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 11
    ['order_id' => 11, 'status' => 'Pending', 'changed_at' => '2025-04-16 20:20:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 11, 'status' => 'Processing', 'changed_at' => '2025-04-16 20:25:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 11, 'status' => 'Completed', 'changed_at' => '2025-04-16 20:50:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 12
    ['order_id' => 12, 'status' => 'Pending', 'changed_at' => '2025-04-16 21:35:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 12, 'status' => 'Processing', 'changed_at' => '2025-04-16 21:40:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 12, 'status' => 'Completed', 'changed_at' => '2025-04-16 22:10:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 13
    ['order_id' => 13, 'status' => 'Pending', 'changed_at' => '2025-04-16 22:15:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 13, 'status' => 'Processing', 'changed_at' => '2025-04-16 22:20:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 13, 'status' => 'Completed', 'changed_at' => '2025-04-16 22:50:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 14
    ['order_id' => 14, 'status' => 'Pending', 'changed_at' => '2025-04-16 23:30:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 14, 'status' => 'Processing', 'changed_at' => '2025-04-16 23:35:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 15
    ['order_id' => 15, 'status' => 'Pending', 'changed_at' => '2025-04-17 00:45:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 16
    ['order_id' => 16, 'status' => 'Pending', 'changed_at' => '2025-04-17 09:15:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 16, 'status' => 'Processing', 'changed_at' => '2025-04-17 09:20:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 16, 'status' => 'Completed', 'changed_at' => '2025-04-17 09:45:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 17
    ['order_id' => 17, 'status' => 'Pending', 'changed_at' => '2025-04-17 10:30:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 17, 'status' => 'Processing', 'changed_at' => '2025-04-17 10:35:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 18
    ['order_id' => 18, 'status' => 'Pending', 'changed_at' => '2025-04-17 11:45:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 19
    ['order_id' => 19, 'status' => 'Pending', 'changed_at' => '2025-04-17 12:20:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 19, 'status' => 'Processing', 'changed_at' => '2025-04-17 12:25:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 19, 'status' => 'Completed', 'changed_at' => '2025-04-17 12:50:00', 'created_at' => now(), 'updated_at' => now()],
    
    // Order 20
    ['order_id' => 20, 'status' => 'Pending', 'changed_at' => '2025-04-17 13:35:00', 'created_at' => now(), 'updated_at' => now()],
    ['order_id' => 20, 'status' => 'Canceled', 'changed_at' => '2025-04-17 13:40:00', 'created_at' => now(), 'updated_at' => now()],
];

        DB::table('order_status')->insert($statuses);
    }
}
