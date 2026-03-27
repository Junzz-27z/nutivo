<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
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

    public function profile() {
        return view('profile.index');
    }

    public function history() {
        return view('user.history');
    }

    public function historyAll() {
        return view('user.history-all');
    }

    public function foodLogCreate() {
        return view('user.food-log.create');
    }

    public function foodLogDelete() {
        return view('user.food-log.show');
    }

    public function edit() {
        return view('profile.edit');
    }
}
