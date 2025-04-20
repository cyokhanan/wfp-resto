<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// index
Route::get('/', function () {
    return view('index');
});

// coba
Route::view('/coba', view: 'index');

// food
Route::resource('listmakanan', FoodController::class);

// category
Route::resource('daftarmenu', CategoryController::class);

// customer
Route::resource('datapelanggan', CustomerController::class);

// order
Route::resource('daftarorder', OrderController::class);

//BASE_URL/welcome
Route::get('/welcome', function () {
    return view('welcome');
})-> name('welcome');

//BASE_URL/beforeorder
Route::get('/beforeorder', function () {
    return view('beforeorder');
})-> name('beforeorder');

//BASE_URL/menu/dinein
//BASE_URL/menu/takeaway
Route::get('/menu/{method}', function ($method) {
    if ($method == 'dinein') {
        return view('menu', ['method' => $method]);
    } elseif ($method == 'takeaway') {
        return view('menu', ['method' => $method]);
    }
})->name('menu');

//BASE_URL/admin/categories/
Route::get('admin/categories', function () {
    return view('admincategories');
})-> name(name: 'categories');

//BASE_URL/admin/order
Route::get('admin/order', function () {
    return view('adminorder');
})-> name('order');

//BASE_URL/admin/members
Route::get('admin/members', function () {
    return view('adminmembers');
})-> name('members');



use App\Models\Food;

Route::get('/', function () {
    $foods = Food::with('category')->get();
    return view('home', compact('foods'));
});
