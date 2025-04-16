<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            ['created_at' => now(), 'updated_at' => now(), 'name' => 'Appetizer'],
            ['created_at' => now(), 'updated_at' => now(), 'name' => 'Main Course'],
            ['created_at' => now(), 'updated_at' => now(), 'name' => 'Snack'],
            ['created_at' => now(), 'updated_at' => now(), 'name' => 'Dessert'],
            ['created_at' => now(), 'updated_at' => now(), 'name' => 'Coffee'],
            ['created_at' => now(), 'updated_at' => now(), 'name' => 'Non Coffee'],
            ['created_at' => now(), 'updated_at' => now(), 'name' => 'Healthy Juice']
        ]);
    }
}
