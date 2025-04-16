<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Ditambahkan untuk mempersingkat "User::factory"
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

        // Membuat 10 user menggunakan factory
        User::factory(10)->create();

        // Jalankan seeder untuk tabel terkait
        $this->call(CategorySeeder::class);
        $this->call(FoodSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderFoodSeeder::class);
        $this->call(FoodOrderRevenueSeeder::class);
        $this->call(OrderStatusSeeder::class);

        // Menyalakan kembali pengecekan foreign key
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
