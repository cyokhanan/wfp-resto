<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodOrderRevenueSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('food_order_revenue')->truncate();

      $revenues = [
    ['food_id' => 1, 'order_count' => 3, 'total_revenue' => 75000],
    ['food_id' => 2, 'order_count' => 2, 'total_revenue' => 50000],
    ['food_id' => 3, 'order_count' => 1, 'total_revenue' => 20000],
    ['food_id' => 4, 'order_count' => 1, 'total_revenue' => 22500],
    ['food_id' => 5, 'order_count' => 2, 'total_revenue' => 26000],
    ['food_id' => 6, 'order_count' => 7, 'total_revenue' => 210000],
    ['food_id' => 7, 'order_count' => 4, 'total_revenue' => 108000],
    ['food_id' => 8, 'order_count' => 6, 'total_revenue' => 192000],
    ['food_id' => 9, 'order_count' => 3, 'total_revenue' => 114000],
    ['food_id' => 10, 'order_count' => 3, 'total_revenue' => 97500],
    ['food_id' => 11, 'order_count' => 2, 'total_revenue' => 30000],
    ['food_id' => 12, 'order_count' => 1, 'total_revenue' => 17000],
    ['food_id' => 13, 'order_count' => 1, 'total_revenue' => 15000],
    ['food_id' => 14, 'order_count' => 1, 'total_revenue' => 15000],
    ['food_id' => 15, 'order_count' => 2, 'total_revenue' => 36000],
    ['food_id' => 16, 'order_count' => 1, 'total_revenue' => 28000],
    ['food_id' => 17, 'order_count' => 3, 'total_revenue' => 48000],
    ['food_id' => 18, 'order_count' => 1, 'total_revenue' => 26000],
    ['food_id' => 19, 'order_count' => 2, 'total_revenue' => 28000],
    ['food_id' => 20, 'order_count' => 2, 'total_revenue' => 38000],
    ['food_id' => 21, 'order_count' => 1, 'total_revenue' => 23000],
    ['food_id' => 22, 'order_count' => 3, 'total_revenue' => 60000],
    ['food_id' => 23, 'order_count' => 1, 'total_revenue' => 23000],
    ['food_id' => 24, 'order_count' => 10, 'total_revenue' => 230000],
    ['food_id' => 25, 'order_count' => 5, 'total_revenue' => 125000],
    ['food_id' => 26, 'order_count' => 2, 'total_revenue' => 48000],
    ['food_id' => 27, 'order_count' => 1, 'total_revenue' => 25000],
    ['food_id' => 28, 'order_count' => 1, 'total_revenue' => 23000],
    ['food_id' => 29, 'order_count' => 1, 'total_revenue' => 25000],
    ['food_id' => 30, 'order_count' => 1, 'total_revenue' => 25000],
    ['food_id' => 31, 'order_count' => 2, 'total_revenue' => 40000],
    ['food_id' => 32, 'order_count' => 2, 'total_revenue' => 44000],
    ['food_id' => 33, 'order_count' => 1, 'total_revenue' => 23000],
    ['food_id' => 34, 'order_count' => 1, 'total_revenue' => 23000],
    ['food_id' => 35, 'order_count' => 1, 'total_revenue' => 23000],
];


        DB::table('food_order_revenue')->insert($revenues);
    }
}
