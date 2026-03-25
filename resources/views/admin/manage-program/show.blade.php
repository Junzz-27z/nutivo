<x-admin-layout :showNavbar="false">
    <div class="flex flex-col min-w-2/5 mx-auto bg-white rounded-3xl px-8 py-4">
        <div class="flex items-center justify-between">
            <h2 class="text-lg text-primary font-semibold">Hapus Program</h2>
            <a href="{{ route('manageProgram') }}" class="text-[#C30000] font-semibold">X</a>
        </div>
        <div class="flex flex-col gap-y-4 mt-4">
            <x-input 
                label="NAMA PROGRAM"
                name="nama_program"
                placeholder="Masukkan Nama Program"
                value="Program Diet"
            />
            <x-input 
                label="DESKRIPSI"
                name="deskripsi"
                placeholder="Masukkan Deskripsi"
                class="bg-primary text-white placeholder:text-white"
                value="Program khusus untuk menurunkan berat badan dengan defisit kalori yang sehat dan berkelanjutan."
            />
        </div>
        <h2 class="mt-4 text-primary font-semibold">Nilai Gizi per 100g</h2>
        <div class="flex flex-col gap-y-4 mt-4">
            <x-input 
                label="TIPE PROGRAM"
                name="tipe_program"
                placeholder="Masukkan Tipe Program"
                value="Diet Ringan"
            />
            <x-input 
                label="INTENSITAS KALORI"
                name="intensitas_kalori"
                placeholder="Masukkan Intensitas Kalori"
                value="Defisit 15% dari TTDE"
            />
            <x-input 
                label="TARGET MINGGUAN"
                name="target"
                placeholder="Masukkan Target Mingguan"
                value="~0.5 kg turun"
            />
            <x-input 
                label="DURASI ANJURAN"
                name="durasi"
                placeholder="Masukkan Durasi Anjuran"
                value="30 - 45 hari"
            />
        </div>
        <div class="flex items-center gap-x-2 justify-end mt-5">
            <x-button href="{{ route('manageProgram') }}" variant="outline">
                Batalkan
            </x-button>
            <x-button href="{{ route('manageProgram') }}" variant="logout">
                Hapus Program
            </x-button>
        </div>
    </div>
</x-admin-layout>