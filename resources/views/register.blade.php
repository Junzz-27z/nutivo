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
            <p class="py-2 text-xl text-primary font-light text-center">Ayo mulai buat akun anda</p>
        </div>
        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="text-primary font-semibold">Fullname</label>
                <input value="{{ old('name') }}" type="text" name="name" id="name" placeholder="Masukkan Nama anda"
                    class="w-full border-r-primary border-2 px-2.5 py-1.5 font-semibold text-primary rounded-lg placeholder:text-[#777777] placeholder:font-medium">
                    @error('name')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="text-primary font-semibold">Username</label>
                <input value="{{ old('username') }}" type="text" name="username" id="username" placeholder="Masukkan Username anda"
                    class="w-full border-r-primary border-2 px-2.5 py-1.5 font-semibold text-primary rounded-lg placeholder:text-[#777777] placeholder:font-medium">
                    @error('username')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="text-primary font-semibold">Email</label>
                <input value="{{ old('email') }}" type="email" name="email" id="email" placeholder="Masukkan Email anda"
                    class="w-full border-r-primary border-2 px-2.5 py-1.5 font-semibold text-primary rounded-lg placeholder:text-[#777777] placeholder:font-medium">
                    @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="text-primary font-semibold">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password anda"
                    class="w-full border-r-primary border-2 px-2.5 py-1.5 font-semibold text-primary rounded-lg placeholder:text-[#777777] placeholder:font-medium">
                    @error('password')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
            </div>
            <button type="submit"
                class="bg-primary text-white w-full text-lg px-4 py-1.5 font-semibold cursor-pointer rounded-lg">REGISTER</button>
        </form>
        <a href="{{ route('login') }}" class="flex justify-center text-primary font-semibold mt-2">Already have an
            account?</a>
    </div>
</body>

</html>
