@props([
    'navAdmin' => false,
    'navUser' => false,
    'navGuest' => false,
])

@if ($navAdmin)
    <header class="flex items-center justify-between px-25 pt-8">
        <h1 class="font-belgrano text-3xl text-primary font-semibold">Nutivo</h1>
        <nav class="flex items-center gap-x-7">
            <x-nav-link href="{{ route('admin') }}" :active="request()->routeIs('admin')">Dashboard</x-nav-link>
            <x-nav-link href="{{ route('manageUser') }}" :active="request()->routeIs('manageUser*')">Manage User</x-nav-link>
            <x-nav-link href="{{ route('manageFood') }}" :active="request()->routeIs('manageFood*')">Manage Food</x-nav-link>
            <x-nav-link href="{{ route('manageProgram') }}" :active="request()->routeIs('manageProgram*')">Manage Program</x-nav-link>
        </nav>
        <x-button href="/logout" variant="logout">Logout</x-button>
    </header>
@elseif ($navUser)
    <header class="flex items-center justify-between px-25 pt-8">
        <h1 class="font-belgrano text-3xl text-primary font-semibold">Nutivo</h1>
        <nav class="flex items-center gap-x-7">
            <x-nav-link href="{{ route('user') }}" :active="request()->routeIs('user')">Dashboard</x-nav-link>
            <x-nav-link href="{{ route('profile') }}" :active="request()->routeIs('profile')">Profile</x-nav-link>
        </nav>
        <x-button href="/logout" variant="logout">Logout</x-button>
    </header>
@else 
    <header class="flex items-center justify-between px-25 pt-8">
        <h1 class="font-belgrano text-3xl text-primary font-semibold">Nutivo</h1>
        <nav class="flex items-center gap-x-7">
            
        </nav>
        
    </header>
@endif
