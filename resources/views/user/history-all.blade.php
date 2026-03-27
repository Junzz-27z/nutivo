<x-user-layout>
    <main class="min-h-screen px-25 py-20">
        <x-button href="{{ route('history') }}" class="w-fit">Kembali</x-button>
        <div class="grid grid-cols-8 gap-x-2 text-center mt-8 bg-primary text-white text-xs py-2.5 px-4 rounded-t-full">
            <span class="font-semibold">TANGGAL</span>
            <span class="font-semibold">KARBOHIDRAT</span>
            <span class="font-semibold">PROTEIN</span>
            <span class="font-semibold">LEMAK</span>
            <span class="font-semibold">SERAT</span>
            <span class="font-semibold">TOTAL KALORI</span>
            <span class="font-semibold">TARGET HARIAN</span>
            <span class="font-semibold">STATUS</span>
        </div>

        @foreach (['Sesuai Target', 'Di Atas Target', 'Di Bawah Target'] as $status)
            <div class="grid grid-cols-8 gap-x-2 text-center bg-transparent text-primary text-xs py-2.5 px-4 border-l-2 border-r-2 border-b-2 border-primary">
                <span class="font-semibold">10 Maret 2026</span>
                <span class="font-semibold">300 gram</span>
                <span class="font-semibold">200 gram</span>
                <span class="font-semibold">150 gram</span>
                <span class="font-semibold">10 gram</span>
                <span class="font-semibold">1.717 kkal</span>
                <span class="font-semibold">1.717 kkal</span>
                <span class="font-semibold">{{ $status }}</span>
            </div>
        @endforeach
    </main>
</x-user-layout>