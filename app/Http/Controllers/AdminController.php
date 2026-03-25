<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function manageUser() {
        return view('admin.manage-user.index');
    }

    public function manageFood() {
        return view('admin.manage-food.index');
    }

    public function manageFoodCreate() {
        return view('admin.manage-food.create');
    }

    public function manageFoodEdit() {
        return view('admin.manage-food.edit');
    }

    public function manageFoodShow() {
        return view('admin.manage-food.show');
    }

    public function manageProgram() {
        return view('admin.manage-program.index');
    }

    public function manageProgramCreate() {
        return view('admin.manage-program.create');
    }

    public function manageProgramEdit() {
        return view('admin.manage-program.edit');
    }

    public function manageProgramShow() {
        return view('admin.manage-program.show');
    }
}
