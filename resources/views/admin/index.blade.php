<x-admin-layout>
    <h1 class="text-4xl font-semibold">Admin Dashboard</h1>
    <p>Kelola semua user dan database makanan yang ada</p>
    <div class="grid grid-cols-2 gap-10 pt-8">
        <a href="{{ route('manageUser') }}" class="flex flex-col items-center bg-primary text-white py-12 rounded-2xl">
            <svg class="size-16" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
            <h2 class="font-semibold pb-1.5 text-3xl">MANAGE USER</h2>
            <p class="text-xl">45 Pengguna</p>
        </a>
        <a href="{{ route('manageFood') }}" class="flex flex-col items-center bg-primary text-white py-12 rounded-2xl">
            <svg class="size-16" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M8.1 13.34L3.91 9.16a4.01 4.01 0 0 1 0-5.66l7.02 7zm5.31-.34l6.88 6.88l-1.41 1.41L12 14.41l-6.88 6.88l-1.41-1.41l9.65-9.66l-.2-.22a1.98 1.98 0 0 1 0-2.81l4.34-4.37l.93.92L15.19 7l.96.94l3.24-3.25l.92.92l-3.25 3.24l.94.96l3.26-3.25l.92.94l-4.37 4.34c-.78.78-2.04.78-2.81 0l-.22-.2z"/></svg>
            <h2 class="font-semibold pb-1.5 text-3xl">MANAGE FOOD</h2>
            <p class="text-xl">120 Menu</p>
        </a>
        <a href="{{ route('manageProgram') }}" class="flex flex-col items-center bg-primary text-white py-12 rounded-2xl">
            <svg class="size-16" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M8.1 21.213q-1.825-.788-3.175-2.138T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22t-3.9-.788m9.575-3.537Q20 15.35 20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20t5.675-2.325M7.75 16.25Q6 14.5 6 12t1.75-4.25T12 6t4.25 1.75T18 12t-1.75 4.25T12 18t-4.25-1.75m7.075-1.425Q16 13.65 16 12t-1.175-2.825T12 8T9.175 9.175T8 12t1.175 2.825T12 16t2.825-1.175m-4.237-1.412Q10 12.825 10 12t.588-1.412T12 10t1.413.588T14 12t-.587 1.413T12 14t-1.412-.587"/></svg>
            <h2 class="font-semibold pb-1.5 text-3xl">MANAGE PROGRAM</h2>
            <p class="text-xl">2 Program</p>
        </a>
    </div>
</x-admin-layout>