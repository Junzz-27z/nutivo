<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Nutivo</title>
</head>
<body class="font-poppins min-h-screen flex flex-col">
    <header class="flex items-center justify-between px-25 py-8">
        <h1 class="font-belgrano text-3xl text-primary font-semibold">Nutivo</h1>
        <x-navbar></x-navbar>
        <div class="flex justify-between items-center gap-x-4">
            @auth
                <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Are you want to logout?')">
                    @csrf
                    <x-button variant="logout" class="cursor-pointer">Logout</x-button>
                </form>
            @endauth
            @guest
                <x-button href="{{ route('login') }}">Sign In</x-button>
                <x-button href="{{ route('register') }}" variant="outline">Sign Up</x-button>
            @endguest
        </div>
    </header>

    <main class="px-25 flex-1">
        @yield('content')
    </main>

    <x-footer></x-footer>
</body>
</html>