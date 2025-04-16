<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(table: 'order_foods')->truncate();

        DB::table('order_foods')->insert([
            ['order_id' => 1, 'food_id' => 1, 'quantity' => 1, 'total_price' => 35000],
            ['order_id' => 2, 'food_id' => 2, 'quantity' => 1, 'total_price' => 30000],
            ['order_id' => 3, 'food_id' => 3, 'quantity' => 2, 'total_price' => 40000],
            ['order_id' => 4, 'food_id' => 4, 'quantity' => 1, 'total_price' => 25000],
            ['order_id' => 5, 'food_id' => 5, 'quantity' => 3, 'total_price' => 90000],
            ['order_id' => 6, 'food_id' => 6, 'quantity' => 1, 'total_price' => 35000],
            ['order_id' => 7, 'food_id' => 7, 'quantity' => 2, 'total_price' => 70000],
            ['order_id' => 8, 'food_id' => 8, 'quantity' => 1, 'total_price' => 30000],
            ['order_id' => 9, 'food_id' => 9, 'quantity' => 4, 'total_price' => 140000],
            ['order_id' => 10, 'food_id' => 10, 'quantity' => 1, 'total_price' => 35000],
            ['order_id' => 11, 'food_id' => 11, 'quantity' => 2, 'total_price' => 50000],
            ['order_id' => 12, 'food_id' => 12, 'quantity' => 3, 'total_price' => 90000],
            ['order_id' => 13, 'food_id' => 1, 'quantity' => 1, 'total_price' => 35000],
            ['order_id' => 14, 'food_id' => 4, 'quantity' => 1, 'total_price' => 25000],
            ['order_id' => 15, 'food_id' => 3, 'quantity' => 2, 'total_price' => 40000],
        ]);
    }
}
