<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Food;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $customers = Customer::with('orders.foods')->get();
        return view('orders.index', compact('customers'));
    }

    public function create()
    {
        $customers = Customer::all();
        $foods = Food::all();
        return view('orders.create', compact('customers', 'foods'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'food_ids' => 'required|array',
            'food_ids.*' => 'exists:foods,id',
        ]);

        $order = Order::create([
            'customer_id' => $request->customer_id,
        ]);

        $order->foods()->attach($request->food_ids);

        return redirect()->route('orders.index')->with('success', 'Order berhasil dibuat.');
    }

    public function show(Customer $customer)
    {
        $customer->load('orders.foods');
        return view('orders.show', compact('customer'));
    }


    public function edit(Order $order)
    {
        $customers = Customer::all();
        $foods = Food::all();
        $order->load('foods');
        return view('orders.edit', compact('order', 'customers', 'foods'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'food_ids' => 'required|array',
            'food_ids.*' => 'exists:foods,id',
        ]);

        $order->update(['customer_id' => $request->customer_id]);
        $order->foods()->sync($request->food_ids);

        return redirect()->route('orders.index')->with('success', 'Order berhasil diperbarui.');
    }

    public function destroy(Order $order)
    {
        $order->foods()->detach();
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order berhasil dihapus.');
    }
}