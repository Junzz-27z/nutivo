<x-admin-layout>
    <h1 class="text-4xl font-semibold">Manage Program</h1>
    <p>Kelola dan perbarui berbagai program yang tersedia</p>
    <div class="grid grid-cols-2 gap-10 pt-8">
        <div class="py-8 rounded-3xl bg-white shadow-xl">
            <div class="px-10 flex items-center justify-between">
                <h2 class="text-2xl text-primary font-semibold">PROGRAM DIET</h2>
                <button type="submit" class="flex justify-center items-center gap-x-1">
                    <a href="{{ route('manageProgram.edit') }}" class="p-1 rounded-lg text-white bg-primary w-fit">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M14.44 5.78L4.198 16.02a2 2 0 0 0-.565 1.125l-.553 3.774l3.775-.553A2 2 0 0 0 7.98 19.8L18.22 9.56m-3.78-3.78l2.229-2.23a1.6 1.6 0 0 1 2.263 0l1.518 1.518a1.6 1.6 0 0 1 0 2.263l-2.23 2.23M14.44 5.78l3.78 3.78" />
                        </svg>
                    </a>
                    <a href="{{ route('manageProgram.show') }}" class="p-1 rounded-lg text-white bg-[#C30000] w-fit">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="m14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21q.512.078 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48 48 0 0 0-3.478-.397m-12 .562q.51-.088 1.022-.165m0 0a48 48 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a52 52 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a49 49 0 0 0-7.5 0" />
                        </svg>
                    </a>
                </button>
            </div>
            <p class="px-10 mt-4">Program khusus untuk menurunkan berat badan dengan defisit kalori yang sehat dan berkelanjutan.</p>
            <div class="bg-primary py-5 mt-4">
                <div class="flex items-center justify-between px-12 gap-x-4">
                    <div class="flex flex-col text-center">
                        <h3 class="font-semibold text-lg text-white">DEFISIT KALORI</h3>
                        <span class="text-white text-sm">10% - 20% dari TTDE</span>
                    </div>
                    <div class="flex flex-col text-center">
                        <h3 class="font-semibold text-lg text-white">TARGET MINGGUAN</h3>
                        <span class="text-white text-sm">~0.3 - ~0.8 kg</span>
                    </div>
                    <div class="flex flex-col text-center">
                        <h3 class="font-semibold text-lg text-white">DURASI ANJURAN</h3>
                        <span class="text-white text-sm">21 - 45 hari</span>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between px-10 mt-6">
                <p class="text-primary font-semibold text-xs">37 Pengguna Aktif</p>
                <x-category-status />
            </div>
        </div>


        <div class="py-8 rounded-3xl bg-white shadow-xl">
            <div class="px-10 flex items-center justify-between">
                <h2 class="text-2xl text-primary font-semibold">PROGRAM BULKING</h2>
                <button type="submit" class="flex justify-center items-center gap-x-1">
                    <a href="{{ route('manageProgram.edit') }}" class="p-1 rounded-lg text-white bg-primary w-fit">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M14.44 5.78L4.198 16.02a2 2 0 0 0-.565 1.125l-.553 3.774l3.775-.553A2 2 0 0 0 7.98 19.8L18.22 9.56m-3.78-3.78l2.229-2.23a1.6 1.6 0 0 1 2.263 0l1.518 1.518a1.6 1.6 0 0 1 0 2.263l-2.23 2.23M14.44 5.78l3.78 3.78" />
                        </svg>
                    </a>
                    <a href="{{ route('manageProgram.show') }}" class="p-1 rounded-lg text-white bg-[#C30000] w-fit">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="m14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21q.512.078 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48 48 0 0 0-3.478-.397m-12 .562q.51-.088 1.022-.165m0 0a48 48 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a52 52 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a49 49 0 0 0-7.5 0" />
                        </svg>
                    </a>
                </button>
            </div>
            <p class="px-10 mt-4">Program untuk menambah massa otot dan berat badan dengan surplus kalori yang terukur.</p>
            <div class="bg-primary py-5 mt-4">
                <div class="flex items-center justify-between px-12 gap-x-4">
                    <div class="flex flex-col text-center">
                        <h3 class="font-semibold text-lg text-white">DEFISIT KALORI</h3>
                        <span class="text-white text-sm">COMING SOON</span>
                    </div>
                    <div class="flex flex-col text-center">
                        <h3 class="font-semibold text-lg text-white">TARGET MINGGUAN</h3>
                        <span class="text-white text-sm">COMING SOON</span>
                    </div>
                    <div class="flex flex-col text-center">
                        <h3 class="font-semibold text-lg text-white">DURASI ANJURAN</h3>
                        <span class="text-white text-sm">COMING SOON</span>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between px-10 mt-6">
                <p class="text-primary font-semibold text-xs">0 Pengguna Aktif</p>
                <x-category-status variant="non-aktif" />
            </div>
        </div>


        <a href="{{ route('manageProgram.create') }}" class="py-20 rounded-3xl bg-primary text-white shadow-xl flex flex-col items-center">
            <svg class="size-12 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2"/></svg>
            <h2 class="text-2xl font-semibold">TAMBAH PROGRAM BARU</h2>
            <span class="text-sm">Buat program nutrisi baru untuk pengguna</span>
        </a>
    </div>
</x-admin-layout>
