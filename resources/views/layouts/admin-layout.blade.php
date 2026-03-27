@props(['showNavbar' => true])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nutivo</title>
    @vite(['resources/css/app.css'])
</head>
<body class="font-poppins bg-background">
    @if (!$showNavbar)
        <main class="min-h-screen flex items-center justify-center">
            {{ $slot }}
        </main>
    @else
        <header class="flex items-center justify-between px-25 pt-8">
            <h1 class="font-belgrano text-3xl text-primary font-semibold">Nutivo</h1>
            <nav class="flex items-center gap-x-7">
                <x-nav-link href="{{ route('admin') }}" :active="request()->routeIs('admin')">Dashboard</x-nav-link>
                <x-nav-link href="{{ route('manageUser') }}" :active="request()->routeIs('manageUser*')">Manage User</x-nav-link>
                <x-nav-link href="{{ route('manageFood') }}" :active="request()->routeIs('manageFood*')">Manage Food</x-nav-link>
                <x-nav-link href="{{ route('manageProgram') }}" :active="request()->routeIs('manageProgram*')">Manage Program</x-nav-link>
            </nav>
            <x-button href="/logout" variant="logout" class="px-3 py-2 rounded-lg">Logout</x-button>
        </header>
        <main class="px-25 pt-8">
            {{ $slot }}
        </main>
    @endif
    
</body>
</html>