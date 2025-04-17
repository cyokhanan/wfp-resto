# 🍽️ WFP Resto - Laravel Food Ordering System

WFP Resto adalah aplikasi sistem pemesanan makanan berbasis web menggunakan Laravel. Sistem ini mendukung pengelolaan data makanan, kategori, pelanggan, pesanan, dan laporan statistik.

## 🚀 Fitur Utama

- Manajemen Master Data:
  - ✅ Kategori Makanan
  - ✅ Daftar Makanan
  - ✅ Data Pelanggan
  - ✅ Order / Pemesanan
- CRUD untuk semua data
- Laporan:
  - 📊 Kategori dengan jumlah makanan terbanyak
  - 📦 Makanan paling sering dipesan
  - 👥 Pelanggan dengan total pesanan tertinggi
  - 💸 Total omzet berdasarkan tanggal
- Pencarian & Filter
- Validasi Form
- Seeder dan migrasi database otomatis

## 🧰 Teknologi

- Laravel 10+
- MySQL
- Bootstrap / Tailwind (opsional untuk styling)
- Laravel Seeder, Factory, dan Migration

## ⚙️ Instalasi
1. **Clone repo:**
   ```bash
   git clone https://github.com/username/wfp_resto.git
   cd wfp_resto
   
2. **Install dependency:**
      ```bash
    composer install
   
4. **Copy file .env:**
      ```bash
    cp .env.example .env

6. **Atur konfigurasi database di file .env:**
      ```bash
    DB_DATABASE=wfp_resto
    DB_USERNAME=root
    DB_PASSWORD=
   
7. **Generate app key:**
      ```bash
    php artisan key:generate

8. **Jalankan migrasi & seeder:**
      ```bash
    php artisan migrate --seed

9. **Jalankan server lokal:**
      ```bash
    php artisan serve

10. Buka http://localhost:8000 di browser.

## 📁 Struktur Database
categories: data kategori makanan
foods: data makanan
customers: data pelanggan
orders: data pemesanan makanan
Relasi: foods.category_id, orders.food_id, orders.customer_id

## 📃 Lisensi
Proyek ini bebas digunakan untuk keperluan pembelajaran. Silakan fork dan kembangkan lebih lanjut! ❤️
