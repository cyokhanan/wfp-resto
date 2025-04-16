<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->truncate();

        DB::table('customers')->insert([
            ['name' => 'Budi Santoso', 'email' => 'budi@example.com', 'phone_number' => '081234567890', 'address' => 'Jl. Merdeka No. 10', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Siti Aminah', 'email' => 'siti@example.com', 'phone_number' => '082233445566', 'address' => 'Jl. Mawar No. 20', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rudi Pratama', 'email' => 'rudi@example.com', 'phone_number' => '083344556677', 'address' => 'Jl. Sejahtera No. 5', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lina Mulyani', 'email' => 'lina@example.com', 'phone_number' => '084455667788', 'address' => 'Jl. Anggrek No. 15', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Andi Wijaya', 'email' => 'andi@example.com', 'phone_number' => '085566778899', 'address' => 'Jl. Raya No. 30', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Maya Susanti', 'email' => 'maya@example.com', 'phone_number' => '086677889900', 'address' => 'Jl. Bunga No. 40', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tono Saputra', 'email' => 'tono@example.com', 'phone_number' => '087788990011', 'address' => 'Jl. Damai No. 25', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rina Aulia', 'email' => 'rina@example.com', 'phone_number' => '088899001122', 'address' => 'Jl. Teratai No. 50', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Eko Setiawan', 'email' => 'eko@example.com', 'phone_number' => '089900112233', 'address' => 'Jl. Harapan No. 60', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fitri Nabila', 'email' => 'fitri@example.com', 'phone_number' => '081112233445', 'address' => 'Jl. Merpati No. 70', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Doni Prabowo', 'email' => 'doni@example.com', 'phone_number' => '082223344556', 'address' => 'Jl. Kemenangan No. 80', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Vera Putri', 'email' => 'vera@example.com', 'phone_number' => '083334455667', 'address' => 'Jl. Cempaka No. 90', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rizky Nugroho', 'email' => 'rizky@example.com', 'phone_number' => '084445566778', 'address' => 'Jl. Kenanga No. 100', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Joko Santosa', 'email' => 'joko@example.com', 'phone_number' => '085556677889', 'address' => 'Jl. Kebangsaan No. 110', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dewi Yuliana', 'email' => 'dewi@example.com', 'phone_number' => '086667788990', 'address' => 'Jl. Pahlawan No. 120', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
