<x-user-layout :hideNavbar="true">
    <div class="flex items-center justify-between">
        <div class="flex flex-col">
            <h1 class="text-4xl font-semibold">Halo, Megadhana</h1>
            <p>Hari ke-18 diet | Kamu sudah 80% menuju target kalori hari ini</p>
        </div>
        <x-button href="{{ route('history') }}" variant="outline">Lihat Riwayat</x-button>
    </div>

    <div class="flex items-center justify-between mt-6 px-8 py-4 rounded-3xl bg-primary text-white">
        <div class="flex flex-col">
            <h2 class="text-xl font-semibold">Program Aktif</h2>
            <span>Diet Standar | Defisit 15% Kalori</span>
        </div>
        <div class="flex items-center gap-x-8 text-center">
            <div class="flex flex-col">
                <h2 class="text-2xl font-semibold">16 hari</h2>
                <span>Sisa Program</span>
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-semibold">1717</h2>
                <span>Target kkal</span>
            </div>
        </div>
    </div>

    <div class="flex items-start gap-x-15 mt-6">
        <div class="flex flex-col w-2/5 rounded-3xl px-8 py-4 shadow-xl">
            <h3 class="text-primary font-semibold">KONSUMSI HARI INI</h3>
            <p class="mt-2">Total : <span class="font-semibold">1.374 kkal</span></p>
            @foreach ($datas as $data)
            <div class="flex items-center justify-between bg-primary text-white rounded-xl px-4 py-1 mt-2">
                <div class="flex flex-col">
                    <p class="text-xs font-semibold">{{ $data['name'] }}</p>
                    <span class="text-xs">{{ $data['porsi'] }}</span>
                </div>
                <div class="flex items-center justify-center gap-x-2">
                    <span
                        class="flex items-center justify-center w-13 px-2 py-0.5 text-xs rounded-full text-white font-semibold bg-[#FFB200]">K
                        {{ $data['karbohidrat'] }}g</span>
                    <span
                        class="flex items-center justify-center w-13 px-2 py-0.5 text-xs rounded-full text-white font-semibold bg-[#C30000]">P
                        {{ $data['protein'] }}g</span>
                    <span
                        class="flex items-center justify-center w-13 px-2 py-0.5 text-xs rounded-full text-white font-semibold bg-[#00C8FF]">L
                        {{ $data['lemak'] }}g</span>
                    <span class="text-xs font-semibold">{{ $data['kalori'] }} Kkal</span>
                    <a href="{{ route('foodLog.show') }}" class="p-1 rounded-lg text-white bg-[#C30000] w-fit">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="m14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21q.512.078 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48 48 0 0 0-3.478-.397m-12 .562q.51-.088 1.022-.165m0 0a48 48 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a52 52 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a49 49 0 0 0-7.5 0" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
            <x-button href="{{ route('foodLog.create') }}" class="mt-4" variant="outline">+ Tambah Makanan</x-button>
        </div>

        <div class="grid grid-cols-3 gap-5 w-3/5">
            <div class="flex flex-col justify-center items-center p-7 rounded-xl bg-primary text-white">
                <h2 class="text-3xl font-semibold">1.374</h2>
                <p>kkal hari ini</p>
                <p class="font-semibold">80% target</p>
            </div>
            <div class="flex flex-col justify-center items-center p-7 rounded-xl bg-primary text-white">
                <h2 class="text-3xl font-semibold">118g</h2>
                <p>Karbohidrat</p>
                <p class="font-semibold">sisa 54g</p>
            </div>
            <div class="flex flex-col justify-center items-center p-7 rounded-xl bg-primary text-white">
                <h2 class="text-3xl font-semibold">92g</h2>
                <p>Protein</p>
                <p class="font-semibold">sisa 58g</p>
            </div>
            <div class="flex flex-col justify-center items-center p-7 rounded-xl bg-primary text-white">
                <h2 class="text-3xl font-semibold">1.750</h2>
                <p>ml Air</p>
                <p class="font-semibold">91% target</p>
            </div>
            <div class="flex flex-col justify-center items-center p-7 rounded-xl bg-primary text-white">
                <h2 class="text-3xl font-semibold">36g</h2>
                <p>Lemak</p>
                <p class="font-semibold">sisa 12g</p>
            </div>
            <div class="flex flex-col justify-center items-center p-7 rounded-xl bg-primary text-white">
                <h2 class="text-3xl font-semibold">18g</h2>
                <p>Serat</p>
                <p class="font-semibold">sisa 10g</p>
            </div>
        </div>
    </div>
</x-user-layout>
