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
            // Customer 1 orders
            ['order_id' => 1, 'food_id' => 6, 'quantity' => 2, 'total_price' => 60000],   // Nasi Goreng @ Rp 30,000
            ['order_id' => 1, 'food_id' => 21, 'quantity' => 1, 'total_price' => 23000],  // Espresso @ Rp 23,000

            // Customer 2 orders
            ['order_id' => 2, 'food_id' => 8, 'quantity' => 1, 'total_price' => 32000],   // Ayam Bakar @ Rp 32,000
            ['order_id' => 2, 'food_id' => 16, 'quantity' => 1, 'total_price' => 28000],  // Chocolate Cake @ Rp 28,000

            // Customer 3 orders
            ['order_id' => 3, 'food_id' => 2, 'quantity' => 2, 'total_price' => 50000],   // Chicken Satay @ Rp 25,000
            ['order_id' => 3, 'food_id' => 26, 'quantity' => 2, 'total_price' => 48000],  // Green Tea @ Rp 24,000

            // Customer 4 orders
            ['order_id' => 4, 'food_id' => 4, 'quantity' => 1, 'total_price' => 22500],  // Beef Rendang @ Rp 22,500
            ['order_id' => 4, 'food_id' => 22, 'quantity' => 1, 'total_price' => 20000],  // Latte @ Rp 20,000

            // Customer 5 orders
            ['order_id' => 5, 'food_id' => 9, 'quantity' => 3, 'total_price' => 114000], // Ikan Bakar @ Rp 38,000
            ['order_id' => 5, 'food_id' => 31, 'quantity' => 2, 'total_price' => 40000],  // Orange Juice @ Rp 20,000

            // Customer 6 orders (large order)
            ['order_id' => 6, 'food_id' => 6, 'quantity' => 5, 'total_price' => 150000], // Nasi Goreng @ Rp 30,000
            ['order_id' => 6, 'food_id' => 8, 'quantity' => 5, 'total_price' => 160000], // Ayam Bakar @ Rp 32,000
            ['order_id' => 6, 'food_id' => 24, 'quantity' => 10, 'total_price' => 230000],// Americano @ Rp 23,000

            // Customer 7 orders
            ['order_id' => 7, 'food_id' => 11, 'quantity' => 2, 'total_price' => 30000], // French Fries @ Rp 15,000
            ['order_id' => 7, 'food_id' => 27, 'quantity' => 1, 'total_price' => 25000], // Chocolate @ Rp 25,000

            // Customer 8 orders
            ['order_id' => 8, 'food_id' => 14, 'quantity' => 1, 'total_price' => 15000], // Nachos @ Rp 15,000
            ['order_id' => 8, 'food_id' => 28, 'quantity' => 1, 'total_price' => 23000], // Vanilla @ Rp 23,000

            // Customer 9 orders
            ['order_id' => 9, 'food_id' => 17, 'quantity' => 3, 'total_price' => 48000], // Ice Cream @ Rp 16,000
            ['order_id' => 9, 'food_id' => 32, 'quantity' => 2, 'total_price' => 44000], // Apple Juice @ Rp 22,000

            // Customer 10 orders
            ['order_id' => 10, 'food_id' => 19, 'quantity' => 2, 'total_price' => 28000], // Fruit Salad @ Rp 14,000
            ['order_id' => 10, 'food_id' => 33, 'quantity' => 1, 'total_price' => 23000], // Watermelon Juice @ Rp 23,000

            // Customer 11 orders
            ['order_id' => 11, 'food_id' => 3, 'quantity' => 1, 'total_price' => 20000], // Gado-Gado @ Rp 20,000
            ['order_id' => 11, 'food_id' => 23, 'quantity' => 1, 'total_price' => 23000], // Cappuccino @ Rp 23,000

            // Customer 12 orders
            ['order_id' => 12, 'food_id' => 5, 'quantity' => 2, 'total_price' => 26000], // Vegetable Tempura @ Rp 13,000
            ['order_id' => 12, 'food_id' => 29, 'quantity' => 1, 'total_price' => 25000], // Strawberry @ Rp 25,000

            // Customer 13 orders (large order)
            ['order_id' => 13, 'food_id' => 7, 'quantity' => 4, 'total_price' => 108000], // Mie Goreng @ Rp 27,000
            ['order_id' => 13, 'food_id' => 10, 'quantity' => 3, 'total_price' => 97500],  // Sate Padang @ Rp 32,500
            ['order_id' => 13, 'food_id' => 25, 'quantity' => 5, 'total_price' => 125000], // Mocha @ Rp 25,000

            // Customer 14 orders
            ['order_id' => 14, 'food_id' => 12, 'quantity' => 1, 'total_price' => 17000], // Onion Rings @ Rp 17,000
            ['order_id' => 14, 'food_id' => 34, 'quantity' => 1, 'total_price' => 23000], // Pineapple Juice @ Rp 23,000

            // Customer 15 orders
            ['order_id' => 15, 'food_id' => 15, 'quantity' => 2, 'total_price' => 36000], //Cheese Sticks @ Rp 18,000
            ['order_id' => 15, 'food_id' => 35, 'quantity' => 1, 'total_price' => 23000], // Mango Juice @ Rp 23,000

            // Added more orders for variety
            ['order_id' => 16, 'food_id' => 1, 'quantity' => 3, 'total_price' => 75000],   // Spring Rolls @ Rp 25,000
            ['order_id' => 16, 'food_id' => 20, 'quantity' => 2, 'total_price' => 38000],   // Pudding @ Rp 19,000
            ['order_id' => 17, 'food_id' => 13, 'quantity' => 1, 'total_price' => 15000],  // Chicken Wings @ Rp 15,000
            ['order_id' => 17, 'food_id' => 30, 'quantity' => 1, 'total_price' => 25000],  // Caramel @ Rp 25,000
            ['order_id' => 18, 'food_id' => 18, 'quantity' => 1, 'total_price' => 26000],  // Pancakes @ Rp 26,000
            ['order_id' => 18, 'food_id' => 22, 'quantity' => 2, 'total_price' => 40000],  // Latte @ Rp 20,000
        ];

        DB::table('order_foods')->insert($orderFoods);
    }
}