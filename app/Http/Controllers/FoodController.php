<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allfoods = Food::with('category')->get();
        //dd($allfoods);

        // method 1 = nama asli
        //return view('foods.index', compact('allfoods'));

        // method 2 = nama pakai alias
        return view('foods.index', ['foods' => $allfoods]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($food)
    {
        $currentfood = Food::find($food);
        return view('foods.show', compact('currentfood'));
        // return view('foods.show', ['food' => $currentfood]);
        // dd($currentfood);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        //
    }
}
