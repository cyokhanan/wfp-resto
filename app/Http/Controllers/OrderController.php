<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with(['user', 'foods'])->get();
        return view('orders.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = \App\Models\User::all();
    $foods = \App\Models\Food::all();
    return view('orders.create', compact('users', 'foods'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'food_ids' => 'required|array',
            'food_ids.*' => 'exists:foods,id',
        ]);
    
        $order = Order::create([
            'user_id' => $request->user_id,
            // tambahkan field lain seperti status jika ada
        ]);
    
        $order->foods()->attach($request->food_ids);
    
        return redirect()->route('orders.index')->with('success', 'Order berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $order->load('user', 'foods'); // load relasi untuk detail
    return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $users = \App\Models\User::all();
        $foods = \App\Models\Food::all();
        $order->load('foods');
        return view('orders.edit', compact('order', 'users', 'foods'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'food_ids' => 'required|array',
            'food_ids.*' => 'exists:foods,id',
        ]);
    
        $order->update(['user_id' => $request->user_id]);
        $order->foods()->sync($request->food_ids);
    
        return redirect()->route('orders.index')->with('success', 'Order berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->foods()->detach();
        $order->delete();
    
        return redirect()->route('orders.index')->with('success', 'Order berhasil dihapus.');
    }
}
