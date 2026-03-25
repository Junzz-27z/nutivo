<x-admin-layout :showNavbar="false">
    <div class="flex flex-col max-w-2/5 mx-auto bg-white rounded-3xl px-8 py-4">
        <div class="flex items-center justify-between">
            <h2 class="text-lg text-primary font-semibold">Tambah Makanan</h2>
            <a href="{{ route('manageFood') }}" class="text-[#C30000] font-semibold">X</a>
        </div>
        <div class="flex flex-col gap-y-4 mt-4">
            <x-input 
                label="NAMA MAKANAN"
                name="nama_makanan"
                placeholder="Masukkan Nama Makanan"
            />
            <x-input 
                label="KATEGORI"
                name="kategori"
                placeholder="Masukkan Kategori Makanan"
            />
        </div>
        <h2 class="mt-4 text-primary font-semibold">Nilai Gizi per 100g</h2>
        <div class="flex flex-col gap-y-4 mt-4">
            <div class="flex items-center gap-x-5">
                <x-input 
                    label="KALORI (KKAL)"
                    name="kalori"
                    placeholder="130"
                    value="130"
                /> 
                <x-input 
                    label="KARBOHIDRAT (GRAM)"
                    name="karbohidrat"
                    placeholder="130"
                    value="130"
                /> 
            </div>
            <div class="flex items-center gap-x-5">
                <x-input 
                    label="PROTEIN (GRAM)"
                    name="protein"
                    placeholder="100"
                    value="125"
                /> 
                <x-input 
                    label="LEMAK (GRAM)"
                    name="lemak"
                    placeholder="145"
                    value="160"
                /> 
            </div>
            <div class="flex items-center gap-x-5">
                <x-input 
                    label="SERAT (GRAM)"
                    name="serat"
                    placeholder="125"
                    value="120"
                /> 
                <x-input 
                    label="PORSI UMUM"
                    name="porsi"
                    placeholder="100"
                    value="110"
                /> 
            </div>
        </div>
        <div class="flex items-center gap-x-2 justify-end mt-5">
            <x-button href="{{ route('manageFood') }}" variant="outline">
                Batalkan
            </x-button>
            <x-button href="{{ route('manageFood') }}">
                Tambah Makanan
            </x-button>
        </div>
    </div>
</x-admin-layout>