<x-user-layout>
    <main class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col max-w-2/5 mx-auto justify-center">
            <h2 class="text-4xl font-semibold text-center">Hapus Log Makanan</h2>
            <span class="text-center">Pastikan data yang ingin dihapus sudah benar</span>
            <div class="flex flex-col bg-white rounded-3xl px-8 py-4 mt-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg text-primary font-semibold">Hapus Makanan</h2>
                    <a href="{{ route('user') }}" class="text-[#C30000] font-semibold">X</a>
                </div>
                <div class="flex flex-col gap-y-4 mt-4 w-full">
                    <x-input 
                        label="NAMA MAKANAN"
                        name="nama_makanan"
                        placeholder="Masukkan Nama Makanan"
                        value="Nasi Putih"
                    />
                    <div class="flex items-center gap-x-5">
                        <x-input 
                            label="KATEGORI"
                            name="kategori"
                            placeholder="Masukkan Kategori Makanan"
                            value="Karbohidrat"
                        />
                        <x-input 
                            label="PORSI (GRAM)"
                            name="porsi"
                            placeholder="Masukkan porsi"
                            type="number"
                            value="120"
                        />
                    </div>
                    <x-input 
                        label="PORSI UMUM"
                        name="porsi_umum"
                        placeholder="Porsi umum"
                        value="100"
                    />
                </div>
                <div class="flex items-center gap-x-2 justify-end mt-5">
                    <x-button href="{{ route('user') }}" variant="outline">
                        Batalkan
                    </x-button>
                    <x-button href="{{ route('user') }}" variant="logout">
                        Hapus Makanan
                    </x-button>
                </div>
            </div>
        </div>
    </main>
</x-user-layout>