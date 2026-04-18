<x-user-layout>
    <main class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col min-w-1/3 mx-auto">
            <h2 class="text-4xl font-semibold text-center">Hapus Makanan</h2>
            <span class="text-center">Pastikan data yang ingin dihapus sudah benar</span>
            <div class="flex flex-col bg-white rounded-3xl px-8 py-4 mt-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg text-primary font-semibold">Hapus Makanan</h2>
                    <a href="{{ route('user') }}" class="text-[#C30000] font-semibold">X</a>
                </div>
                <div class="flex flex-col gap-y-4 mt-4 w-full">
                    <x-input 
                        label="KATEGORI"
                        name="kategori"
                        disabled
                    />
                    <x-input 
                        label="NAMA MAKANAN"
                        name="nama_makanan"
                        disabled
                    />
                    <x-input 
                        label="PILIH PORSI"
                        name="porsi"
                        disabled
                    />
                </div>
                <div class="flex items-center gap-x-2 justify-end mt-5">
                    <x-button href="{{ route('user') }}" variant="logout">
                        Batalkan
                    </x-button>
                    <x-button href="{{ route('user') }}">
                        Tambah Makanan
                    </x-button>
                </div>
            </div>
        </div>
    </main>
</x-user-layout>