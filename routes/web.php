<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodLogController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ManageFoodController;
use App\Http\Controllers\ManageProgramController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuestController::class, 'index'])->name('home');

Route::get('/manage-user', [AdminController::class, 'manageUser'])->name('manageUser');
Route::get('/manage-food', [AdminController::class, 'manageFood'])->name('manageFood');
Route::get('/manage-program', [AdminController::class, 'manageProgram'])->name('manageProgram');

Route::get('/manage-food/create', [AdminController::class, 'manageFoodCreate'])->name('manageFood.create');
Route::get('/manage-food/edit', [AdminController::class, 'manageFoodEdit'])->name('manageFood.edit');
Route::get('/manage-food/delete', [AdminController::class, 'manageFoodShow'])->name('manageFood.show');

Route::get('/manage-program/create', [AdminController::class, 'manageProgramCreate'])->name('manageProgram.create');
Route::get('/manage-program/edit', [AdminController::class, 'manageProgramEdit'])->name('manageProgram.edit');
Route::get('/manage-program/delete', [AdminController::class, 'manageProgramShow'])->name('manageProgram.show');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/history', [UserController::class, 'history'])->name('history');
Route::get('/history-all', [UserController::class, 'historyAll'])->name('historyAll');

Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/profile/edit', [UserController::class, 'edit'])->name('profile.edit');
Route::get('/profile/delete', [AdminController::class, 'profileDelete'])->name('profile.show');
Route::get('/food-log/create', [UserController::class, 'foodLogCreate'])->name('foodLog.create');
Route::get('/food-log/delete', [UserController::class, 'foodLogDelete'])->name('foodLog.show');

Route::get('/profile-setup', function() {
    return view('profile-setup');
});


Route::prefix('user')->name('user.')->group(function () {
    Route::resource('food-logs', FoodLogController::class);
});

Route::middleware('guest')->group(function() {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
    });

Route::middleware('auth')->group(function() {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('is-admin')->group(function() {
    Route::prefix('admin')->name('admin.')->group(function() {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::resource('manage-food', ManageFoodController::class);
        Route::resource('manage-user', ManageUserController::class);
    });
});
