<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = [
            [
                'name' => 'Nasi Putih',
                'porsi' => '1 Piring (150g)',
                'karbohidrat' => 24,
                'protein' => 3.8,
                'lemak' => 2.4,
                'kalori' => 185
            ],
            [
                'name' => 'Salad Buah',
                'porsi' => '1 Piring (100g)',
                'karbohidrat' => 28,
                'protein' => 2.7,
                'lemak' => 1,
                'kalori' => 165
            ],
            [
                'name' => 'Dada Ayam',
                'porsi' => '1 Potong (200g)',
                'karbohidrat' => 10,
                'protein' => 3.8,
                'lemak' => 1.8,
                'kalori' => 125
            ],
        ];
        return view('user.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.food-log.create');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
