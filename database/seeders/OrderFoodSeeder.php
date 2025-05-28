<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderFoodSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('order_foods')->truncate();

        $orderFoods = [
            ['order_id' => 1, 'food_id' => 6, 'quantity' => 2, 'total_price' => 60000],
            ['order_id' => 1, 'food_id' => 21, 'quantity' => 1, 'total_price' => 23000],
            ['order_id' => 2, 'food_id' => 8, 'quantity' => 1, 'total_price' => 32000],
            ['order_id' => 2, 'food_id' => 16, 'quantity' => 1, 'total_price' => 28000],
            ['order_id' => 3, 'food_id' => 2, 'quantity' => 3, 'total_price' => 90000],
            ['order_id' => 4, 'food_id' => 5, 'quantity' => 1, 'total_price' => 35000],
            ['order_id' => 4, 'food_id' => 12, 'quantity' => 2, 'total_price' => 44000],
            ['order_id' => 5, 'food_id' => 9, 'quantity' => 1, 'total_price' => 27000],
            ['order_id' => 6, 'food_id' => 3, 'quantity' => 4, 'total_price' => 120000],
            ['order_id' => 7, 'food_id' => 15, 'quantity' => 2, 'total_price' => 46000],
            ['order_id' => 8, 'food_id' => 4, 'quantity' => 1, 'total_price' => 22000],
            ['order_id' => 9, 'food_id' => 10, 'quantity' => 1, 'total_price' => 30000],
            ['order_id' => 10, 'food_id' => 1, 'quantity' => 3, 'total_price' => 75000],
            ['order_id' => 11, 'food_id' => 7, 'quantity' => 1, 'total_price' => 28000],
            ['order_id' => 12, 'food_id' => 11, 'quantity' => 2, 'total_price' => 52000],
            ['order_id' => 13, 'food_id' => 14, 'quantity' => 1, 'total_price' => 24000],
            ['order_id' => 14, 'food_id' => 13, 'quantity' => 1, 'total_price' => 26000],
            ['order_id' => 15, 'food_id' => 17, 'quantity' => 2, 'total_price' => 48000],
            ['order_id' => 16, 'food_id' => 18, 'quantity' => 1, 'total_price' => 29000],
            ['order_id' => 17, 'food_id' => 19, 'quantity' => 3, 'total_price' => 87000],
            ['order_id' => 18, 'food_id' => 20, 'quantity' => 2, 'total_price' => 62000],
            ['order_id' => 19, 'food_id' => 22, 'quantity' => 1, 'total_price' => 31000],
            ['order_id' => 20, 'food_id' => 23, 'quantity' => 1, 'total_price' => 28000],
        ];

        DB::table('order_foods')->insert($orderFoods);
    }
}
