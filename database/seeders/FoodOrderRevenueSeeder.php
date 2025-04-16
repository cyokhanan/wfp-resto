<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodOrderRevenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('food_order_revenue')->truncate();

        DB::table('food_order_revenue')->insert([
            // Appetizer
            ['food_id' => 1, 'order_count' => 1, 'total_revenue' => 35000],
            ['food_id' => 2, 'order_count' => 2, 'total_revenue' => 40000],
            ['food_id' => 3, 'order_count' => 1, 'total_revenue' => 22000],
            ['food_id' => 4, 'order_count' => 3, 'total_revenue' => 75000],
            ['food_id' => 5, 'order_count' => 2, 'total_revenue' => 30000],
            // Main Course
            ['food_id' => 6, 'order_count' => 5, 'total_revenue' => 175000],
            ['food_id' => 7, 'order_count' => 3, 'total_revenue' => 90000],
            ['food_id' => 8, 'order_count' => 4, 'total_revenue' => 120000],
            ['food_id' => 9, 'order_count' => 6, 'total_revenue' => 210000],
            ['food_id' => 10, 'order_count' => 2, 'total_revenue' => 60000],
            // Snack
            ['food_id' => 11, 'order_count' => 5, 'total_revenue' => 85000],
            ['food_id' => 12, 'order_count' => 4, 'total_revenue' => 76000],
            ['food_id' => 13, 'order_count' => 3, 'total_revenue' => 48000],
            ['food_id' => 14, 'order_count' => 7, 'total_revenue' => 98000],
            ['food_id' => 15, 'order_count' => 6, 'total_revenue' => 120000],
            // Dessert
            ['food_id' => 16, 'order_count' => 8, 'total_revenue' => 200000],
            ['food_id' => 17, 'order_count' => 3, 'total_revenue' => 54000],
            ['food_id' => 18, 'order_count' => 4, 'total_revenue' => 112000],
            ['food_id' => 19, 'order_count' => 5, 'total_revenue' => 75000],
            ['food_id' => 20, 'order_count' => 2, 'total_revenue' => 44000],
            // Coffee
            ['food_id' => 21, 'order_count' => 10, 'total_revenue' => 230000],
            ['food_id' => 22, 'order_count' => 12, 'total_revenue' => 240000],
            ['food_id' => 23, 'order_count' => 8, 'total_revenue' => 184000],
            ['food_id' => 24, 'order_count' => 15, 'total_revenue' => 345000],
            ['food_id' => 25, 'order_count' => 6, 'total_revenue' => 150000],
            // Non Coffee
            ['food_id' => 26, 'order_count' => 7, 'total_revenue' => 168000],
            ['food_id' => 27, 'order_count' => 5, 'total_revenue' => 125000],
            ['food_id' => 28, 'order_count' => 9, 'total_revenue' => 207000],
            ['food_id' => 29, 'order_count' => 10, 'total_revenue' => 250000],
            ['food_id' => 30, 'order_count' => 4, 'total_revenue' => 100000],
            // Healthy Juice
            ['food_id' => 31, 'order_count' => 5, 'total_revenue' => 100000],
            ['food_id' => 32, 'order_count' => 8, 'total_revenue' => 176000],
            ['food_id' => 33, 'order_count' => 6, 'total_revenue' => 138000],
        ]);
    }
}
