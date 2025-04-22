<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->truncate();

        $customers = [
            ['name' => 'Budi Santoso', 'email' => 'budi.santoso@example.com', 'phone_number' => '081234567890', 'address' => 'Jl. Merdeka No. 10, Jakarta', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Siti Aminah', 'email' => 'siti.aminah@example.com', 'phone_number' => '082233445566', 'address' => 'Jl. Mawar No. 20, Bandung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rudi Pratama', 'email' => 'rudi.pratama@example.com', 'phone_number' => '083344556677', 'address' => 'Jl. Sejahtera No. 5, Surabaya', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lina Mulyani', 'email' => 'lina.mulyani@example.com', 'phone_number' => '084455667788', 'address' => 'Jl. Anggrek No. 15, Medan', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Andi Wijaya', 'email' => 'andi.wijaya@example.com', 'phone_number' => '085566778899', 'address' => 'Jl. Raya No. 30, Yogyakarta', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Maya Susanti', 'email' => 'maya.susanti@example.com', 'phone_number' => '086677889900', 'address' => 'Jl. Bunga No. 40, Semarang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tono Saputra', 'email' => 'tono.saputra@example.com', 'phone_number' => '087788990011', 'address' => 'Jl. Damai No. 25, Bali', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rina Aulia', 'email' => 'rina.aulia@example.com', 'phone_number' => '088899001122', 'address' => 'Jl. Teratai No. 50, Makassar', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Eko Setiawan', 'email' => 'eko.setiawan@example.com', 'phone_number' => '089900112233', 'address' => 'Jl. Harapan No. 60, Palembang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fitri Nabila', 'email' => 'fitri.nabila@example.com', 'phone_number' => '081112233445', 'address' => 'Jl. Merpati No. 70, Bogor', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Doni Prabowo', 'email' => 'doni.prabowo@example.com', 'phone_number' => '082223344556', 'address' => 'Jl. Kemenangan No. 80, Depok', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Vera Putri', 'email' => 'vera.putri@example.com', 'phone_number' => '083334455667', 'address' => 'Jl. Cempaka No. 90, Tangerang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rizky Nugroho', 'email' => 'rizky.nugroho@example.com', 'phone_number' => '084445566778', 'address' => 'Jl. Kenanga No. 100, Bekasi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Joko Santosa', 'email' => 'joko.santosa@example.com', 'phone_number' => '085556677889', 'address' => 'Jl. Kebangsaan No. 110, Malang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dewi Yuliana', 'email' => 'dewi.yuliana@example.com', 'phone_number' => '086667788990', 'address' => 'Jl. Pahlawan No. 120, Solo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ahmad Fauzi', 'email' => 'ahmad.fauzi@example.com', 'phone_number' => '087778889991', 'address' => 'Jl. Melati No. 35, Bandar Lampung', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nia Kurniawan', 'email' => 'nia.kurniawan@example.com', 'phone_number' => '088889990022', 'address' => 'Jl. Dahlia No. 45, Padang', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fajar Hermawan', 'email' => 'fajar.hermawan@example.com', 'phone_number' => '089990001133', 'address' => 'Jl. Flamboyan No. 55, Banjarmasin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dina Rahmawati', 'email' => 'dina.rahmawati@example.com', 'phone_number' => '081111222344', 'address' => 'Jl. Sakura No. 65, Samarinda', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hendra Gunawan', 'email' => 'hendra.gunawan@example.com', 'phone_number' => '082222333455', 'address' => 'Jl. Tulip No. 75, Pontianak', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('customers')->insert($customers);
    }
}