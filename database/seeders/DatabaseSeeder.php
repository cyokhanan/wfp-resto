<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // Menonaktifkan pengecekan foreign key sementara
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        // Jalankan seeder untuk tabel terkait
        $this->call(CategorySeeder::class);
        $this->call(FoodSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderFoodSeeder::class);
        $this->call(FoodOrderRevenueSeeder::class);
        $this->call(OrderStatusSeeder::class);
        $this->call(FoodImageSeeder::class);

        // Menyalakan kembali pengecekan foreign key
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
