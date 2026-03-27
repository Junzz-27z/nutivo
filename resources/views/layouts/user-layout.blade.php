@props(['hideNavbar' => false])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body class="font-poppins bg-background">
    @if (!$hideNavbar)
        {{ $slot }}
    @else
        <x-navbar :navUser="true" />
        <main class="px-25 pt-8">
            {{ $slot }}
        </main>
    @endif
</body>
</html>