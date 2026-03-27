<x-admin-layout>
    <h1 class="text-4xl font-semibold">Manage User</h1>
    <p>Pantau status keaktifan pengguna dan kendalikan manajemen akun</p>
    <div class="flex items-center justify-between pt-8">
        <div class="relative" id="dropdown-wrapper">
            <button type="button" onclick="toggleDropdown()"
                class="flex items-center justify-between gap-x-2 px-4 py-2 rounded-full min-w-44 text-white bg-primary cursor-pointer">
                <span id="dropdown-label" class="font-semibold">Semua Program</span>
                <svg id="dropdown-arrow" class="size-4 transition-transform duration-200"
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <path fill="currentColor" fill-rule="non-zero"
                        d="M13.069 5.157L8.384 9.768a.546.546 0 0 1-.768 0L2.93 5.158a.55.55 0 0 0-.771 0a.53.53 0 0 0 0 .759l4.684 4.61a1.65 1.65 0 0 0 2.312 0l4.684-4.61a.53.53 0 0 0 0-.76a.55.55 0 0 0-.771 0" />
                </svg>
            </button>

            <ul id="dropdown-list"
                class="hidden absolute z-10 w-full mt-1 bg-white border border-gray-300 rounded-lg shadow-lg overflow-hidden">
                @foreach (['Semua Program', 'Diet Ketat', 'Diet Ringan', 'Diet Standar'] as $option)
                <li
                    class="px-3 py-1.5 font-semibold text-sm hover:text-white hover:bg-primary transition-colors cursor-pointer" onclick="selectedOption(this)">
                    {{ $option }}</li>
                <li
                @endforeach
            </ul>
        </div>
        <div class="flex items-center gap-x-2 px-4 py-2 rounded-full text-white bg-primary">
            <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14" />
            </svg>
            <input 
                type="text" 
                placeholder="Cari Pengguna..." 
                class="outline-none placeholder:text-white"
                name="search"
                value=""
            >
        </div>
    </div>

    <div class="grid grid-cols-7 gap-x-10 mt-5 items-center justify-between text-center text-xs bg-primary text-white font-semibold rounded-t-full px-4 py-2.5">
        <span>USER</span>
        <span class="col-span-2">EMAIL</span>
        <span>PROGRAM</span>
        <span>TERAKHIR AKTIF</span>
        <span>STATUS</span>
        <span>AKSI</span>
    </div>
    <div class="grid grid-cols-7 gap-x-10 items-center justify-between text-center text-xs bg-transparent border-r-2 border-l-2 border-b-2 border-primary text-black font-semibold py-2 px-4">
        <span>Mega</span>
        <span class="col-span-2">megadhanaganteng@gmail.com</span>
        <span class="flex justify-center"><x-category-diet variant="ringan" /></span>
        <span>3 Hari lalu</span>
        <span class="flex justify-center"><x-category-status variant="non-aktif" /></span>
        <a href="{{ route('profile.show') }}" type="submit" class="flex justify-center">
            <span class="p-1 rounded-lg text-white bg-[#C30000] w-fit">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21q.512.078 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48 48 0 0 0-3.478-.397m-12 .562q.51-.088 1.022-.165m0 0a48 48 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a52 52 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a49 49 0 0 0-7.5 0"/></svg>
            </span>
        </a>
    </div>
    <div class="grid grid-cols-7 gap-x-10 items-center justify-between text-center text-xs bg-transparent border-r-2 border-l-2 border-b-2 border-primary text-black font-semibold py-2 px-4">
        <span>Intan</span>
        <span class="col-span-2">citraintan@gmail.com</span>
        <span class="flex justify-center"><x-category-diet variant="standar" /></span>
        <span>Hari ini</span>
        <span class="flex justify-center"><x-category-status variant="aktif" /></span>
        <a href="{{ route('profile.show') }}" type="submit" class="flex justify-center">
            <span class="p-1 rounded-lg text-white bg-[#C30000] w-fit">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21q.512.078 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48 48 0 0 0-3.478-.397m-12 .562q.51-.088 1.022-.165m0 0a48 48 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a52 52 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a49 49 0 0 0-7.5 0"/></svg>
            </span>
        </a>
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
