@extends('layouts.main')
@section('content')
    @if(session('success'))
        <div class="mt-4 px-4 py-3 bg-green-50 border border-green-200 text-green-700 rounded-lg">
        {{ session('success') }}
        </div>
    @endif
    <h1 class="text-4xl font-semibold">Manage User</h1>
    <p>Pantau status keaktifan pengguna dan kendalikan manajemen akun</p>
    <div class="flex items-center justify-between pt-8">
        <form action="{{ route('admin.manage-user.index') }}" method="GET">
            <div class="flex items-center gap-x-2 px-4 py-2 rounded-full text-white bg-primary">
                <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14" />
                </svg>
                <input 
                    type="text" 
                    placeholder="Cari Pengguna..." 
                    class="outline-none placeholder:text-white"
                    name="search"
                    value="{{ request('search') }}"
                >
            </div>
        </form>
    </div>

    <div class="grid grid-cols-7 gap-x-10 mt-5 items-center justify-between text-center text-xs bg-primary text-white font-semibold rounded-t-full px-4 py-2.5">
        <span>USER</span>
        <span class="col-span-2">EMAIL</span>
        <span>PROGRAM</span>
        <span>TERAKHIR AKTIF</span>
        <span>STATUS</span>
        <span>AKSI</span>
    </div>
    @forelse ($users as $user)
        <div class="grid grid-cols-7 gap-x-10 items-center justify-between text-center text-xs bg-transparent border-r-2 border-l-2 border-b-2 border-primary text-black font-semibold py-2 px-4">
            <span>{{ $user->name }}</span>
            <span class="col-span-2">{{ $user->email }}</span>
            <span class="flex justify-center"><x-category-diet variant="{{ $user->userTarget?->diet_plan_id ?? 2 }}" /></span>
            <span>3 Hari lalu</span>
            <span class="flex justify-center"><x-category-status variant="non-aktif" /></span>
            <div class="flex justify-center">
                <form action="{{ route('admin.manage-user.destroy', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="flex justify-center cursor-pointer">
                        <span class="p-1 rounded-lg text-white bg-[#C30000] w-fit">
                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21q.512.078 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48 48 0 0 0-3.478-.397m-12 .562q.51-.088 1.022-.165m0 0a48 48 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a52 52 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a49 49 0 0 0-7.5 0"/></svg>
                        </span>
                    </button>
                </form>
            </div>
        </div>
    @empty
    <div class="flex flex-col items-center justify-center py-16 text-gray-400 border-r-2 border-l-2 border-b-2 border-primary rounded-b-4xl">
        <p class="font-semibold text-sm">Belum ada pengguna yang terdaftar</p>
    </div>
    @endforelse  
@endsection
