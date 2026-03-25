<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belgrano&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'], ['resources/js/home.js'])
    <title>Nutivo</title>
</head>
<body>
    <header class="flex justify-between items-center px-25 py-9 sticky top-0 bg-white flex-nowrap z-50">
        <h2 class="text-3xl font-belgrano">Nutivo</h2>
        <nav class="nav-menu items-center gap-6 font-nunito bg-white w-auto flex-row mt-0">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Features</a>
            <a href="">Program</a>
        </nav>
        <div class="auth-group gap-6 font-nunito w-auto mt-0">
            <x-button>Login</x-button>
            <x-button variant='outline'>Register</x-button>
        </div>
    </header>
    <footer class="bg-primary text-white px-25 pb-9.25">
        <div class="flex">
            <section id="footer-nutivo" class="pr-25 pt-8 gap-4 flex flex-col">
                <h2 class="font-belgrano text-4xl">Nutivo</h2>
                <p class="font-poppins text-xs text-[#E3E3E3] max-w-74">
                    Platform kesehatan digital yang membantu Anda mencapai berat badan ideal dan gaya hidup sehat melalui program diet
                </p>
            </section>
            <section id="navigation-menu" class="ml-56.5 pt-12.25 gap-3.5 flex flex-col">
                <h2 class="font-bold font-nunito">NAVIGATION</h2>
                <div class="flex flex-col gap-2 font-poppins text-xs text-[#E3E3E3]">
                    <a href="">Home</a>
                    <a href="">About</a>
                    <a href="">Features</a>
                    <a href="">Program</a>
                    <a href="">Dashboard</a>
                </div>
            </section>
            <section id="dietprograms-menu" class="ml-22.25 pt-12.25 gap-3.5 flex flex-col">
                <h2 class="font-bold font-nunito min-w-33.25">DIET PROGRAMS</h2>
                <div class="flex flex-col gap-2 font-poppins text-xs text-[#E3E3E3]">
                    <a href="">Diet Ringan</a>
                    <a href="">Diet Standar</a>
                    <a href="">Diet Ketat</a>
                </div>
            </section>
            <section id="socialmedia-menu" class="ml-24.75 pt-12.25 flex flex-col">
                <h2 class="font-bold font-nunito mb-3.5">SOCIAL MEDIA</h2>
                <p class="font-poppins text-xs text-[#E3E3E3] max-w-74 mb-3">
                    Dapatkan tips diet dan nutrisi lainnya dengan mengunjungi sosial media kami
                </p>
                <div class="flex flex-row gap-3">
                </div>
            </section>
        </div>
        <hr class="mt-15.25 mb-2 border-[#E3E3E3]">
        <div class="px-130 text-center text-xs font-poppins text-[#E3E3E3]">
            &copy; 2026 Nutivo. All rights reserved
        </div>
    </footer>
</body>
</html>