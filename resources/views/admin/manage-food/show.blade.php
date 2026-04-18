<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen font-poppins bg-background flex justify-center items-center flex-col">
    <div class="flex flex-col bg-white rounded-3xl px-8 py-6 min-w-1/3 mt-4">
        <div class="flex justify-between items-center">
            <h3 class="text-primary font-semibold text-xl">Edit Makanan</h3>
            <a href="{{ route('admin.manage-food.index') }}" class="text-red-500 font-semibold">X</a>
        </div>
        <form action="{{ route('admin.manage-food.update', $food->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="mt-6 flex flex-col gap-y-4">
                <div class="flex flex-col">
                    <label for="food_category_id" class="font-semibold">Kategori Makanan</label>
                    <select name="food_category_id" id="food_category_id" class="px-3 py-2 appearance-none border-primary border-2 rounded-lg">
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}" {{ $food->food_category_id == $item->id ? 'selected' : '' }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="name" class="font-semibold">Nama Makanan</label>
                    <input type="text" name="name" value="{{ old('name', $food->name) }}" id="name" placeholder="Masukkan Nama Makanan" class="px-3 py-2 border-primary border-2 rounded-lg text-primary placeholder:text-primary">
                    @error('name')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="serving_description" class="font-semibold">Takaran</label>
                    <input type="text" name="serving_description" id="serving_description" value="{{ old('serving_description', $food->serving_description) }}" placeholder="Masukkan Takaran Saji" class="px-3 py-2 border-primary border-2 rounded-lg text-primary placeholder:text-primary">
                    @error('serving_description')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <h3 class="text-primary font-semibold">Nilai Gizi / 100g</h3>
                <div class="flex justify-between items-center gap-x-6">
                    <div class="flex flex-col">
                        <label for="calorie_per_100g" class="font-semibold">Kalori (KKAL)</label>
                        <input type="number" name="calorie_per_100g" id="calorie_per_100g" value="{{ old('calorie_per_100g', $food->calorie_per_100g) }}" placeholder="Jumlah Kalori" class="px-3 py-2 border-primary border-2 rounded-lg text-primary placeholder:text-primary">
                        @error('calorie_per_100g')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="carbohydrate_per_100g" class="font-semibold">Karbohidrat (gram)</label>
                        <input type="number" name="carbohydrate_per_100g" id="carbohydrate_per_100g" value="{{ old('carbohydrate_per_100g', $food->carbohydrate_per_100g) }}" placeholder="Jumlah Karbohidrat" class="px-3 py-2 border-primary border-2 rounded-lg text-primary placeholder:text-primary">
                        @error('carbohydrate_per_100g')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-between items-center gap-x-6">
                    <div class="flex flex-col">
                        <label for="protein_per_100g" class="font-semibold">Protein (gram)</label>
                        <input type="number" name="protein_per_100g" id="protein_per_100g" value="{{ old('protein_per_100g', $food->protein_per_100g) }}" placeholder="Jumlah Protein" class="px-3 py-2 border-primary border-2 rounded-lg text-primary placeholder:text-primary">
                        @error('protein_per_100g')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="fat_per_100g" class="font-semibold">Lemak (gram)</label>
                        <input type="number" name="fat_per_100g" id="fat_per_100g" value="{{ old('fat_per_100g', $food->fat_per_100g) }}" placeholder="Jumlah Lemak" class="px-3 py-2 border-primary border-2 rounded-lg text-primary placeholder:text-primary">
                        @error('fat_per_100g')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-between items-center gap-x-6">
                    <div class="flex flex-col">
                        <label for="fiber_per_100g" class="font-semibold">Serat (gram)</label>
                        <input type="number" name="fiber_per_100g" id="fiber_per_100g" value="{{ old('fiber_per_100g', $food->fiber_per_100g) }}" placeholder="Jumlah Serat" class="px-3 py-2 border-primary border-2 rounded-lg text-primary placeholder:text-primary">
                        @error('fiber_per_100g')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="serving_size_g" class="font-semibold">Porsi Umum</label>
                        <input type="number" name="serving_size_g" id="serving_size_g" value="{{ old('serving_size_g', $food->serving_size_g) }}" placeholder="Jumlah Porsi" class="px-3 py-2 border-primary border-2 rounded-lg text-primary placeholder:text-primary">
                        @error('serving_size_g')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center justify-end gap-x-4">
                    <x-button href="{{ route('admin.manage-food.index') }}" variant="logout">Batalkan</x-button>
                    <button type="submit" class="flex items-center justify-center transition-all duration-300 font-semibold text-primary bg-transparent border-2 border-primary hover:bg-primary hover:text-white px-4 py-1.5 text-base rounded-full cursor-pointer">Hapus Makanan</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>