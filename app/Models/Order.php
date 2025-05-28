<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function foods()
    {
        return $this->belongsToMany(Food::class, 'order_foods');
    } // pakai order_foods, bukan food_order default-nya laravel
}
