<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allfoods = Food::with('category')->get();
        $categories = Category::all();
        return view('foods.index', [
            'foods' => $allfoods,
            'categories' => $categories,
        ]);
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'nutrition_fact' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Ambil nama makanan, buat slug dan tambah ekstensi
            $slugName = Str::slug($request->name);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = $slugName . '.' . $extension;

            // Simpan file ke folder storage/app/public
            $path = $request->file('image')->storeAs('public', $fileName);

            // Simpan path relatif untuk database, tanpa 'public/'
            $validated['image'] = $fileName;
        }

        Food::create($validated);

        return redirect()->route('foods.index')->with('success', 'Makanan berhasil ditambahkan.');
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
    public function edit($id)
    {
        $food = Food::findOrFail($id);
        $categories = Category::all(); // Untuk dropdown kategori
        return view('foods.edit', compact('food', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $food = Food::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $food->name = $request->name;
        $food->category_id = $request->category_id;
        $food->description = $request->description;
        $food->nutrition_fact = $request->nutrition;
        $food->price = $request->price;

        if ($request->hasFile('image')) {
            $filename = Str::slug($request->name) . '.jpg';
            $destination = public_path('storage/' . $filename);

            // Hapus file lama jika berbeda
            if ($food->image && $food->image !== $filename) {
                $oldPath = public_path('storage/' . $food->image);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            // Simpan file baru ke storage/
            $request->file('image')->move(public_path('storage'), $filename);

            // Simpan HANYA nama file ke database
            $food->image = $filename;
        }

        $food->save();

        return redirect()->route('foods.index')->with('success', 'Makanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        //
    }
}
