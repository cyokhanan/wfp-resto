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
            // Appetizers
            ['food_id' => 1, 'order_count' => 10, 'total_revenue' => 250000],
            ['food_id' => 2, 'order_count' => 12, 'total_revenue' => 300000],
            ['food_id' => 3, 'order_count' => 9,  'total_revenue' => 180000],
            ['food_id' => 4, 'order_count' => 14, 'total_revenue' => 315000],
            ['food_id' => 5, 'order_count' => 12, 'total_revenue' => 156000],

            // Main Courses
            ['food_id' => 6, 'order_count' => 15, 'total_revenue' => 450000],
            ['food_id' => 7, 'order_count' => 12, 'total_revenue' => 324000],
            ['food_id' => 8, 'order_count' => 17, 'total_revenue' => 544000],
            ['food_id' => 9, 'order_count' => 18, 'total_revenue' => 684000],
            ['food_id' => 10, 'order_count' => 10, 'total_revenue' => 325000],

            // Snacks
            ['food_id' => 11, 'order_count' => 20, 'total_revenue' => 300000],
            ['food_id' => 12, 'order_count' => 18, 'total_revenue' => 306000],
            ['food_id' => 13, 'order_count' => 15, 'total_revenue' => 225000],
            ['food_id' => 14, 'order_count' => 22, 'total_revenue' => 330000],
            ['food_id' => 15, 'order_count' => 20, 'total_revenue' => 360000],

            // Desserts
            ['food_id' => 16, 'order_count' => 20, 'total_revenue' => 560000],
            ['food_id' => 17, 'order_count' => 18, 'total_revenue' => 288000],
            ['food_id' => 18, 'order_count' => 16, 'total_revenue' => 416000],
            ['food_id' => 19, 'order_count' => 20, 'total_revenue' => 280000],
            ['food_id' => 20, 'order_count' => 15, 'total_revenue' => 285000],

            // Coffee
            ['food_id' => 21, 'order_count' => 25, 'total_revenue' => 575000],
            ['food_id' => 22, 'order_count' => 30, 'total_revenue' => 600000],
            ['food_id' => 23, 'order_count' => 22, 'total_revenue' => 506000],
            ['food_id' => 24, 'order_count' => 32, 'total_revenue' => 736000],
            ['food_id' => 25, 'order_count' => 24, 'total_revenue' => 600000],

            // Non-Coffee
            ['food_id' => 26, 'order_count' => 22, 'total_revenue' => 528000],
            ['food_id' => 27, 'order_count' => 20, 'total_revenue' => 500000],
            ['food_id' => 28, 'order_count' => 22, 'total_revenue' => 506000],
            ['food_id' => 29, 'order_count' => 24, 'total_revenue' => 600000],
            ['food_id' => 30, 'order_count' => 20, 'total_revenue' => 500000],

            // Healthy Juice
            ['food_id' => 31, 'order_count' => 22, 'total_revenue' => 440000],
            ['food_id' => 32, 'order_count' => 20, 'total_revenue' => 440000],
            ['food_id' => 33, 'order_count' => 18, 'total_revenue' => 414000],
            ['food_id' => 34, 'order_count' => 16, 'total_revenue' => 368000],
            ['food_id' => 35, 'order_count' => 14, 'total_revenue' => 322000],
        ];

        DB::table('food_order_revenue')->insert($revenues);
    }
}