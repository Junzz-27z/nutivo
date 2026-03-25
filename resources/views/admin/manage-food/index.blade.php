<x-admin-layout>
    <h1 class="text-4xl font-semibold">Manage Food</h1>
    <p>Cari dan perbarui berbagai jenis data makanan dan minuman yang ada</p>
    <div class="flex items-center justify-between w-full pt-8">
        <div class="flex items-center gap-x-4 w-48">
            <div class="flex items-center gap-x-2 px-4 py-2 rounded-full w-full text-white bg-primary">
                <svg class="size-5 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14" />
                </svg>
                <input 
                    type="text" 
                    placeholder="Cari Makanan..." 
                    class="outline-none placeholder:text-white min-w-0 w-fit" 
                    name="search"
                    value="">
            </div>
            <div class="relative" id="dropdown-wrapper">
                <button type="button" onclick="toggleDropdown()"
                    class="flex items-center justify-between gap-x-2 px-4 py-2 rounded-full min-w-44 text-white bg-primary cursor-pointer">
                    <span id="dropdown-label" class="whitespace-nowrap">Semua Kategori</span>
                    <svg id="dropdown-arrow" class="size-4 shrink-0 transition-transform duration-200"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path fill="currentColor" fill-rule="non-zero"
                            d="M13.069 5.157L8.384 9.768a.546.546 0 0 1-.768 0L2.93 5.158a.55.55 0 0 0-.771 0a.53.53 0 0 0 0 .759l4.684 4.61a1.65 1.65 0 0 0 2.312 0l4.684-4.61a.53.53 0 0 0 0-.76a.55.55 0 0 0-.771 0" />
                    </svg>
                </button>
    
                <ul id="dropdown-list"
                    class="hidden absolute z-10 mt-1 bg-white border w-full border-none outline-none rounded-lg shadow-lg overflow-hidden">
                    @foreach (['Semua Kategori', 'Karbohidrat', 'Protein Hewani', 'Protein Nabati', 'Lemak Sehat', 'Buah', 'Olahan Susu'] as $option)
                    <li
                        class="px-3 py-1.5 font-semibold text-sm hover:text-white hover:bg-primary transition-colors cursor-pointer" onclick="selectedOption(this)">
                        {{ $option }}</li>
                    <li
                    @endforeach
                </ul>
            </div>
        </div>
        <a href="{{ route('manageFood.create') }}" class="flex items-center gap-x-2 px-4 py-2 rounded-full text-white bg-primary">
            <svg class="size-6 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2"/></svg>
            Tambah Makanan
        </a>    
    </div>
    <div class="grid grid-cols-7 gap-x-10 mt-5 items-center justify-between text-center text-xs bg-primary text-white font-semibold rounded-t-full px-4 py-2.5">
        <span>MAKANAN</span>
        <span>KATEGORI</span>
        <span>KALORI</span>
        <span class="col-span-2">MAKRO/100g</span>
        <span>SERAT/100g</span>
        <span>AKSI</span>
    </div>
    <div class="grid grid-cols-7 gap-x-10 items-center justify-between text-center text-xs bg-transparent border-r-2 border-l-2 border-b-2 border-primary text-black py-2 px-4">
        <div class="flex flex-col">
            <p class="font-semibold">Nasi Putih</p>
            <span class="text-xs">1 piring (150g)</span>
        </div>
        <button class="flex justify-center"><x-category-food variant="karbohidrat" /></button>
        <p class="text-sm"><span class="font-semibold">195 </span>kkal</p>
        <div class="col-span-2 flex items-center justify-center gap-x-2">
            <span class="flex items-center justify-center w-13 px-2 py-1 text-xs rounded-full text-white font-semibold bg-[#FFB200]">K 28g</span>
            <span class="flex items-center justify-center w-13 px-2 py-1 text-xs rounded-full text-white font-semibold bg-[#C30000]">P 2.7g</span>
            <span class="flex items-center justify-center w-13 px-2 py-1 text-xs rounded-full text-white font-semibold bg-[#00C8FF]">L 0.3g</span>
        </div>
        <span class="font-semibold text-sm">0.4g</span>
        <button type="submit" class="flex justify-center items-center gap-x-1">
            <a href="{{ route('manageFood.edit') }}" class="p-1 rounded-lg text-white bg-primary w-fit">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.44 5.78L4.198 16.02a2 2 0 0 0-.565 1.125l-.553 3.774l3.775-.553A2 2 0 0 0 7.98 19.8L18.22 9.56m-3.78-3.78l2.229-2.23a1.6 1.6 0 0 1 2.263 0l1.518 1.518a1.6 1.6 0 0 1 0 2.263l-2.23 2.23M14.44 5.78l3.78 3.78"/></svg>
            </a>
            <a href="{{ route('manageFood.show') }}" class="p-1 rounded-lg text-white bg-[#C30000] w-fit">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21q.512.078 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48 48 0 0 0-3.478-.397m-12 .562q.51-.088 1.022-.165m0 0a48 48 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a52 52 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a49 49 0 0 0-7.5 0"/></svg>
            </a>
        </button>
    </div>
    <script>
        function toggleDropdown() {
            const list = document.getElementById('dropdown-list')
            const arrow = document.getElementById('dropdown-arrow')
            list.classList.toggle('hidden')
            arrow.classList.toggle('rotate-180')
        }

        function selectedOption(el) {
            document.getElementById('dropdown-label').textContent = el.textContent.trim()
            document.getElementById('dropdown-list').classList.add('hidden')
            document.getElementById('dropdown-arrow').classList.remove('rotate-180')
        }

        document.addEventListener('click', function(e) {
            const wrapper = document.getElementById('dropdown-wrapper')
            if (!wrapper.contains(e.target)) {
                document.getElementById('dropdown-list').classList.add('hidden')
                document.getElementById('dropdown-arrow').classList.remove('rotate-180')
            }
        })
    </script>
</x-admin-layout>
