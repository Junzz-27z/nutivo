<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin() {
        return view('login');
    }
    public function login(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            $role = Auth::user()->role;

            return match($role) {
                'admin' => redirect()->route('admin.dashboard'),
                'user' => redirect()->route('user.food-logs.index'),
                default => redirect()->route('home')
            };
        }

        return back()->withInput($request->only('username'))->withErrors([
            'username' => 'Username atau password salah!'
        ]);
    }
    public function showRegister() {
        return view('register');
    }
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|max:100|min:8',
            'username' => 'required|min:8',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect(route('user.food-logs.index'));
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('home'));
    }
}
