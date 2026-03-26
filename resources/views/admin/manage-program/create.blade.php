<x-admin-layout :showNavbar="false">
    <div class="flex flex-col min-w-2/5 mx-auto bg-white rounded-3xl px-8 py-4">
        <div class="flex items-center justify-between">
            <h2 class="text-lg text-primary font-semibold">Tambah Program</h2>
            <a href="{{ route('manageProgram') }}" class="text-[#C30000] font-semibold">X</a>
        </div>
        <div class="flex flex-col gap-y-4 mt-4">
            <x-input 
                label="NAMA PROGRAM"
                name="nama_program"
                placeholder="Masukkan Nama Program"
                value=""
            />
            <x-input 
                label="DESKRIPSI"
                name="deskripsi"
                placeholder="Masukkan Deskripsi"
                class="bg-primary text-white placeholder:text-white"
                value=""
            />
        </div>
        <h2 class="mt-4 text-primary font-semibold">Informasi Program</h2>
        <div class="flex flex-col gap-y-4 mt-4">
            <x-input 
                label="TIPE PROGRAM"
                name="tipe_program"
                placeholder="Masukkan Tipe Program"
                value=""
            />
            <x-input 
                label="INTENSITAS KALORI"
                name="intensitas_kalori"
                placeholder="Masukkan Intensitas Kalori"
                value=""
            />
            <x-input 
                label="TARGET MINGGUAN"
                name="target"
                placeholder="Masukkan Target Mingguan"
                value=""
            />
            <x-input 
                label="DURASI ANJURAN"
                name="durasi"
                placeholder="Masukkan Durasi Anjuran"
                value=""
            />
        </div>
        <div class="flex items-center gap-x-2 justify-end mt-5">
            <x-button href="{{ route('manageProgram') }}" variant="outline">
                Batalkan
            </x-button>
            <x-button href="{{ route('manageProgram') }}">
                Tambah Program
            </x-button>
        </div>
    </div>
</x-admin-layout>