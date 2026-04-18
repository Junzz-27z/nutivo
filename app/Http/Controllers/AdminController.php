<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        $userCount = User::where('role', '!=', 'admin')->count();
        $foodCount = Food::count();
        return view('admin.index', compact(['userCount', 'foodCount']));
    }
}