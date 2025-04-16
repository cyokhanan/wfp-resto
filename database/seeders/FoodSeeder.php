<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table(table: 'foods')->truncate();

        // Menambahkan data baru
        DB::table('foods')->insert([
            // Appetizer
            ['name' => 'Bruschetta', 'nutrition_fact' => 'Kalori: 200-250 kkal', 'description' => 'Roti panggang dengan tomat cincang dan basil.', 'price' => 18000, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mini Spring Roll', 'nutrition_fact' => 'Kalori: 150-200 kkal', 'description' => 'Lumpia mini dengan sayuran dan saus.', 'price' => 20000, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Caprese Skewer', 'nutrition_fact' => 'Kalori: 250-300 kkal', 'description' => 'Tusuk mozzarella, tomat, dan daun basil.', 'price' => 22000, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Stuffed Mushrooms', 'nutrition_fact' => 'Kalori: 200-250 kkal', 'description' => 'Jamur isi keju dan rempah.', 'price' => 25000, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Garlic Bread', 'nutrition_fact' => 'Kalori: 150-200 kkal', 'description' => 'Roti dengan mentega dan bawang putih.', 'price' => 15000, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            // Main Course
            [
                'name' => 'Nasi Merah dengan Ayam Panggang Kecap & Tumis Kangkung',
                'nutrition_fact' => 'Kalori: 400-550 kkal Protein: 30-40 gram Lemak: 15-25 gram Karbohidrat: 50-70 gram Serat: 5-8 gram',
                'description' => 'Nikmati hidangan sehat dan lezat dengan Nasi Merah yang kaya serat, dipadukan dengan Ayam Panggang Kecap & Tumis Kangkung.',
                'price' => 35000,
                'category_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Nasi Hitam dan Tumis Ca Kailan',
                'nutrition_fact' => 'Kalori: 400-550 kkal Protein: 30-40 gram Lemak: 15-25 gram Karbohidrat: 50-70 gram Serat: 5-8 gram',
                'description' => 'Nikmati hidangan sehat dan lezat dengan Nasi Hitam yang kaya serat.',
                'price' => 30000,
                'category_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],
            // Snack
            ['name' => 'French Fries', 'nutrition_fact' => 'Kalori: 300-350 kkal', 'description' => 'Kentang goreng renyah.', 'price' => 17000, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chicken Nugget', 'nutrition_fact' => 'Kalori: 250-300 kkal', 'description' => 'Nugget ayam goreng krispi.', 'price' => 19000, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Onion Ring', 'nutrition_fact' => 'Kalori: 200-250 kkal', 'description' => 'Bawang bombai goreng tepung.', 'price' => 16000, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tofu Crispy', 'nutrition_fact' => 'Kalori: 150-200 kkal', 'description' => 'Tahu goreng krispi dengan bumbu.', 'price' => 14000, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cheesy Nachos', 'nutrition_fact' => 'Kalori: 300-350 kkal', 'description' => 'Nachos dengan saus keju.', 'price' => 20000, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            // Dessert
            ['name' => 'Chocolate Lava Cake', 'nutrition_fact' => 'Kalori: 350-400 kkal', 'description' => 'Cake coklat dengan lelehan coklat.', 'price' => 25000, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Vanilla Pudding', 'nutrition_fact' => 'Kalori: 180-220 kkal', 'description' => 'Puding vanila dengan saus karamel.', 'price' => 18000, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Strawberry Cheesecake', 'nutrition_fact' => 'Kalori: 250-300 kkal', 'description' => 'Cheesecake dengan topping strawberry.', 'price' => 28000, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ice Cream Sandwich', 'nutrition_fact' => 'Kalori: 200-250 kkal', 'description' => 'Es krim di antara dua cookies.', 'price' => 15000, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mango Mousse', 'nutrition_fact' => 'Kalori: 250-300 kkal', 'description' => 'Mousse mangga lembut.', 'price' => 22000, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            // Coffee
            ['name' => 'Espresso', 'nutrition_fact' => 'Kalori: 10-20 kkal', 'description' => 'Kopi hitam pekat.', 'price' => 18000, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Americano', 'nutrition_fact' => 'Kalori: 15-25 kkal', 'description' => 'Espresso dengan air panas.', 'price' => 20000, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cappuccino', 'nutrition_fact' => 'Kalori: 100-150 kkal', 'description' => 'Kopi susu dengan foam.', 'price' => 23000, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cafe Latte', 'nutrition_fact' => 'Kalori: 120-160 kkal', 'description' => 'Espresso dengan susu steam.', 'price' => 23000, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Flat White', 'nutrition_fact' => 'Kalori: 130-170 kkal', 'description' => 'Kopi espresso dengan susu steamed lebih sedikit dari cappuccino.', 'price' => 24000, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mocha', 'nutrition_fact' => 'Kalori: 250-300 kkal', 'description' => 'Kopi espresso dengan susu dan coklat.', 'price' => 26000, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Caramel Macchiato', 'nutrition_fact' => 'Kalori: 200-250 kkal', 'description' => 'Latte dengan sirup karamel.', 'price' => 25000, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            // Non Coffee
            ['name' => 'Red Velvet Latte', 'nutrition_fact' => 'Kalori: 200-250 kkal', 'description' => 'Minuman latte rasa red velvet.', 'price' => 24000, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Matcha Latte', 'nutrition_fact' => 'Kalori: 150-200 kkal', 'description' => 'Minuman matcha dengan susu.', 'price' => 24000, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Taro Latte', 'nutrition_fact' => 'Kalori: 180-230 kkal', 'description' => 'Latte rasa talas.', 'price' => 23000, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chocolate Milkshake', 'nutrition_fact' => 'Kalori: 250-300 kkal', 'description' => 'Milkshake coklat manis.', 'price' => 25000, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Strawberry Milkshake', 'nutrition_fact' => 'Kalori: 250-300 kkal', 'description' => 'Milkshake strawberry segar.', 'price' => 25000, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            // Healthy Juice
            ['name' => 'Jus Jeruk Segar', 'nutrition_fact' => 'Kalori: 120-150 kkal', 'description' => 'Perasan jeruk asli.', 'price' => 20000, 'category_id' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jus Apel dan Wortel', 'nutrition_fact' => 'Kalori: 150-180 kkal', 'description' => 'Campuran apel dan wortel.', 'price' => 22000, 'category_id' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Green Detox Juice', 'nutrition_fact' => 'Kalori: 180-220 kkal', 'description' => 'Bayam, apel, dan lemon.', 'price' => 23000, 'category_id' => 7, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
