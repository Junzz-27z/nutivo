<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-background">
    <main class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col min-w-1/3 mx-auto">
            <h2 class="text-4xl font-semibold text-center">Tambah Asupan Hari ini</h2>
            <span class="text-center">Tambahkan makanan hari ini</span>
            <div class="flex flex-col bg-white rounded-3xl px-8 py-4 mt-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg text-primary font-semibold">Tambah Makanan</h2>
                    <a href="{{ route('user') }}" class="text-[#C30000] font-semibold">X</a>
                </div>
                <div class="flex flex-col gap-y-4 mt-4 w-full">
                    <x-input 
                        label="KATEGORI"
                        name="kategori"
                        placeholder="Pilih Kategori"
                    />
                    <x-input 
                        label="NAMA MAKANAN"
                        name="nama_makanan"
                        placeholder="Pilih Makanan"
                    />
                    <x-input 
                        label="PORSI (GRAM)"
                        name="porsi"
                        placeholder="Pilih Porsi"
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
</body>
</html>
    
