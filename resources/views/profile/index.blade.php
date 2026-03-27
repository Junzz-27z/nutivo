<x-user-layout>
    <main class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col min-w-3/5 mx-auto">
            <x-button href="{{ route('user') }}" class="w-fit">Kembali ke Dashboard</x-button>
            <div class="flex items-start p-8 gap-x-10 rounded-3xl bg-background shadow-xl mt-5">
                <div class="flex flex-col relative w-1/2 p-24 bg-white rounded-lg items-center justify-center">
                    <svg class="size-36 text-primary w-fit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
                    <div class="flex flex-col text-center px-8 py-1.5 rounded-lg bg-background">
                        <p>Bergabung sejak :</p>
                        <span class="font-semibold">Maret 2026</span>
                    </div>
                    <x-button href="{{ route('profile.edit') }}" class="absolute top-4 right-4" variant="outline">Edit Foto</x-button>
                </div>

                <div class="flex flex-col">
                    <h2 class="font-semibold text-primary font-belgrano text-4xl">Nutivo</h2>
                    <p class="font-semibold text-lg mt-2">Data Profil</p>
                    <p>Informasi akun dan identitas diri</p>
                    <div class="grid grid-cols-2 mt-2 gap-y-2 gap-x-4">
                        <x-input 
                                label="Username :"
                                name="username"
                                value="Surya"
                                class="text-xs"
                        />
                        <x-input 
                                label="Email :"
                                name="email"
                                value="nutivoadmin@admin.com"
                                class="text-xs"
                        />
                        <x-input 
                                label="Berat Badan :"
                                name="weight"
                                value="70 kg"
                                class="text-xs"
                        />
                        <x-input 
                                label="Tinggi Badan :"
                                name="weight"
                                value="181 cm"
                                class="text-xs"
                        />
                        <x-input 
                                label="Tinggi Badan :"
                                name="weight"
                                value="181 cm"
                                class="text-xs"
                        />
                        <x-input 
                                label="Tinggi Badan :"
                                name="weight"
                                value="181 cm"
                                class="text-xs"
                        />
                    </div>
                    <div class="flex items-center gap-x-4 mt-2">
                        <x-input 
                                label="Tinggi Badan :"
                                name="weight"
                                value="181 cm"
                                class="text-xs"
                        />
                        <x-button href="{{ route('profile.edit') }}">Edit Profil</x-button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-user-layout>