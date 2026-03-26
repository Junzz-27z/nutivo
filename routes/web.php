<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/manage-user', [AdminController::class, 'manageUser'])->name('manageUser');
Route::get('/manage-food', [AdminController::class, 'manageFood'])->name('manageFood');
Route::get('/manage-program', [AdminController::class, 'manageProgram'])->name('manageProgram');



Route::get('/manage-food/create', [AdminController::class, 'manageFoodCreate'])->name('manageFood.create');
Route::get('/manage-food/edit', [AdminController::class, 'manageFoodEdit'])->name('manageFood.edit');
Route::get('/manage-food/delete', [AdminController::class, 'manageFoodShow'])->name('manageFood.show');

Route::get('/manage-program/create', [AdminController::class, 'manageProgramCreate'])->name('manageProgram.create');
Route::get('/manage-program/edit', [AdminController::class, 'manageProgramEdit'])->name('manageProgram.edit');
Route::get('/manage-program/delete', [AdminController::class, 'manageProgramShow'])->name('manageProgram.show');