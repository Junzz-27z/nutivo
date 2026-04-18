<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodCategory;
use Illuminate\Http\Request;

class ManageFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $query = Food::with('foodCategory');

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $foods = $query->oldest()->get();
        $categories = FoodCategory::all();

        return view('admin.manage-food.index', compact('foods', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $query = Food::with('foodCategory');
        $food = $query->get();
        $categories = FoodCategory::all();
        return view('admin.manage-food.create', compact('categories', 'food'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'food_category_id' => 'required',
            'name' => 'required|string',
            'serving_description' => 'required|string',
            'serving_size_g' => 'required|numeric',
            'calorie_per_100g' => 'required|numeric',
            'carbohydrate_per_100g' => 'required|numeric',
            'protein_per_100g' => 'required|numeric',
            'fat_per_100g' => 'required|numeric',
            'fiber_per_100g' => 'required|numeric'
        ], [
            'name.required' => 'Nama makanan wajib diisi.',
            'serving_description.required' => 'Deskripsi takaran wajib diisi.',
            'serving_size_g.required' => 'Takaran makanan wajib diisi.',
            'calorie_per_100g.required' => 'Jumlah kalori wajib diisi',
            'carbohydrate_per_100g.required' => 'Jumlah karbohidrat wajib diisi',
            'protein_per_100g.required' => 'Jumlah protein wajib diisi.',
            'fat_per_100g.required' => 'Jumlah lemak wajib diisi.',
            'fiber_per_100g.required' => 'Jumlah serat wajib diisi.'
        ]);

        Food::create($validated);
        return redirect()->route('admin.manage-food.index')->with('success', 'Data Makanan Berhasil Makanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = FoodCategory::all();
        $food = Food::with('foodCategory')->findOrFail($id);
        return view('admin.manage-food.edit', compact('categories', 'food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'food_category_id' => 'required',
            'name' => 'required|string',
            'serving_description' => 'required|string',
            'serving_size_g' => 'required|numeric',
            'calorie_per_100g' => 'required|numeric',
            'carbohydrate_per_100g' => 'required|numeric',
            'protein_per_100g' => 'required|numeric',
            'fat_per_100g' => 'required|numeric',
            'fiber_per_100g' => 'required|numeric'
        ]);

        $food = Food::findOrFail($id);
        $food->update($validated);

        return redirect()->route('admin.manage-food.index')->with('success', 'Data Makanan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $food = Food::findOrFail($id);
        $food->foodLog()->delete();
        $food->delete();
        return redirect()->route('admin.manage-food.index')->with('success', 'Data Makanan Berhasil dihapus');
    }
}
