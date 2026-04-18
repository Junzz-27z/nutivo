@extends('layouts.main')
@section('content')
    <h1 class="text-4xl font-semibold">Admin Dashboard</h1>
    <p>Kelola semua user dan database makanan yang ada</p>
    <div class="grid grid-cols-2 gap-10 pt-4">
        <a href="{{ route('admin.manage-user.index') }}" class="flex flex-col items-center bg-primary text-white py-12 rounded-2xl">
            <svg class="size-16" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
            </svg>
            <h2 class="font-semibold pb-1.5 text-3xl">MANAGE USER</h2>
            <p class="text-xl">{{ $userCount }} Pengguna</p>
        </a>
        <a href="{{ route('admin.manage-food.index') }}"
            class="flex flex-col items-center bg-primary text-white py-12 rounded-2xl">
            <svg class="size-16" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M8.1 13.34L3.91 9.16a4.01 4.01 0 0 1 0-5.66l7.02 7zm5.31-.34l6.88 6.88l-1.41 1.41L12 14.41l-6.88 6.88l-1.41-1.41l9.65-9.66l-.2-.22a1.98 1.98 0 0 1 0-2.81l4.34-4.37l.93.92L15.19 7l.96.94l3.24-3.25l.92.92l-3.25 3.24l.94.96l3.26-3.25l.92.94l-4.37 4.34c-.78.78-2.04.78-2.81 0l-.22-.2z" />
            </svg>
            <h2 class="font-semibold pb-1.5 text-3xl">MANAGE FOOD</h2>
            <p class="text-xl">{{ $foodCount }} Menu</p>
        </a>
    </div>
@endsection
