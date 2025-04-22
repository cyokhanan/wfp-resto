<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodImageSeeder extends Seeder
{
    public function run()
    {
        $foods = Food::all();

        foreach ($foods as $food) {
            $filename = strtolower(str_replace(' ', '-', $food->name)) . '.jpg';
            $food->image = $filename;
            $food->save();
        }
    }
}