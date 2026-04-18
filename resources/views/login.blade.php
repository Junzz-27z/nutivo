<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-primary font-poppins h-screen flex flex-col items-center justify-center">
    <div class="flex flex-col px-12 py-8 bg-white rounded-3xl w-1/3 mx-auto">
        <div class="mb-2">
            <a href="/" class="text-4xl text-primary font-bold font-belgrano w-full flex justify-center">Nutivo</a>
            <p class="py-2 text-xl text-primary font-light text-center">Ayo kembali dengan akun anda</p>
        </div>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="text-primary font-semibold">Username</label>
                <input value="{{ old('username') }}" type="text" name="username" id="username" placeholder="Masukkan Username anda"
                class="w-full border-r-primary border-2 px-2.5 py-1.5 font-semibold text-primary rounded-lg placeholder:text-[#777777] placeholder:font-medium">
                @error('username')
                    <p class="text-red-500 mb-1.5">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="text-primary font-semibold">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password anda"
                    class="w-full border-r-primary border-2 px-2.5 py-1.5 font-semibold text-primary rounded-lg placeholder:text-[#777777] placeholder:font-medium">
                @error('password')
                    <p class="text-red-500 mb-1.5">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="bg-primary text-white w-full text-lg px-4 py-1.5 font-semibold cursor-pointer rounded-lg">LOGIN</button>
        </form>
        <a href="{{ route('register') }}" class="flex justify-center text-primary font-semibold mt-2">Don't have an account?</a>
    </div>
</body>

</html>
