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
    <header class="flex justify-between items-center px-25 pt-9 pb-6.75 sticky top-0 bg-white flex-nowrap z-50">
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
    <main class="font-inter">
        {{--<section>
            gambarnya
        </section>--}}
        <section id="about-nutivo" class="bg-primary-50 p-20 tracking-[-0.5px]">
            <h2 class="text-4xl text-center text-primary-text-250 font-bold mb-4 leading-10">Tentang Nutivo</h2>
            <p class="text-xl text-center text-primary-text-50 leading-7 w-178.75 mx-auto">
                Kami hadir untuk membantu Anda mencapai gaya hidup sehat melalui tracking nutrisi yang akurat dan program yang disesuaikan dengan kebutuhan individual
            </p>
            <div class="flex justify-center items-start shrink-0 gap-8 mx-8 mt-16">
                <div class="bg-primary-100 rounded-xl text-white text-center px-11.75 pt-8 pb-7.5 w-96 shadow-[0_4px_6px_0_rgba(0,0,0,0.25),0_10px_15px_0_rgba(0,0,0,0.25)]">
                    <div class="bg-primary-home rounded-full w-16 h-16 flex justify-center items-center mx-auto mb-6.5 px-5 py-4">
                        {{-- icon --}}
                    </div>
                    <h3 class="text-xl font-semibold mb-4 leading-7">Tracking Akurat</h3>
                    <p class="leading-6">Pantau kalori, makronutrien, dan konsumsi air dengan database makanan yang lengkap dan akurat.</p>
                </div>
                <div class="bg-primary-home rounded-xl text-center px-11.75 pt-8 pb-7.5 w-96">
                    <div class="bg-primary-100 rounded-full w-16 h-16 flex justify-center items-center mx-auto mb-6.5 px-5 py-4">
                        {{-- icon --}}
                    </div>
                    <h3 class="text-xl text-primary-text-250 font-semibold mb-4 leading-7">Program yang Dipersonalisasi</h3>
                    <p class="text-primary-text-50 leading-6">Program diet dan bulking yang disesuaikan dengan goals, berat badan, dan tinggi badan Anda.</p>
                </div>
                <div class="bg-primary-home rounded-xl text-center px-11.75 pt-8 pb-7.5 w-96">
                    <div class="bg-primary-100 rounded-full w-16 h-16 flex justify-center items-center mx-auto mb-6.5 px-4.25 py-4">
                        {{-- icon --}}
                    </div>
                    <h3 class="text-xl text-primary-text-250 font-semibold mb-4 leading-7">Komunitas Supportif</h3>
                    <p class="text-primary-text-50 leading-6">Bergabung dengan komunitas yang saling mendukung dalam perjalanan menuju hidup sehat.</p>
                </div>
            </div>
        </section>
        <section id="features-nutivo" class="bg-primary-100 px-20 pt-11.75 pb-21.5 tracking-[-0.5px]">
            <h2 class="text-4xl text-center text-white font-bold mb-2.75 leading-10 w-123.5 mx-auto">Semua Yang Kamu Butuhkan Dalam Satu Aplikasi</h2>
            <p class="text-xl text-center text-primary-text leading-7 w-135.25 mx-auto">
                Dari tracking hingga monitoring perkembangan, Nutivo hadir sebagai teman setia perjalanan sehatmu
            </p>
            <div class="flex flex-col shrink-0 gap-7.5">
                <div class="flex justify-center items-start gap-8 mx-8 mt-16">
                    <div class="bg-primary-home rounded-xl px-10.25 py-7.25 w-96">
                        <div class="bg-primary-250 rounded-full w-16 h-16 flex justify-center items-center px-5.75 py-3.75">
                            {{-- icon --}}
                        </div>
                        <h3 class="text-xl text-primary-text-250 font-semibold mt-5.75 mb-5.75 leading-7">Komunitas Supportif</h3>
                        <p class="text-primary-text-50 leading-6">Bergabung dengan komunitas yang saling mendukung dalam perjalanan menuju hidup sehat.</p>
                    </div>
                    <div class="bg-primary-home rounded-xl px-10.25 py-7.25 w-96">
                        <div class="bg-primary-250 rounded-full w-16 h-16 flex justify-center items-center px-5.75 py-3.75">
                            {{-- icon --}}
                        </div>
                        <h3 class="text-xl text-primary-text-250 font-semibold mt-5.75 mb-5.75 leading-7">Komunitas Supportif</h3>
                        <p class="text-primary-text-50 leading-6">Bergabung dengan komunitas yang saling mendukung dalam perjalanan menuju hidup sehat.</p>
                    </div>
                    <div class="bg-primary-home rounded-xl px-10.25 py-7.25 w-96">
                        <div class="bg-primary-250 rounded-full w-16 h-16 flex justify-center items-center px-5.75 py-3.75">
                            {{-- icon --}}
                        </div>
                        <h3 class="text-xl text-primary-text-250 font-semibold mt-5.75 mb-5.75 leading-7">Komunitas Supportif</h3>
                        <p class="text-primary-text-50 leading-6">Bergabung dengan komunitas yang saling mendukung dalam perjalanan menuju hidup sehat.</p>
                    </div>
                </div>
                <div class="flex justify-center items-start gap-8 mx-8">
                    <div class="bg-primary-home rounded-xl px-10.25 py-7.25 w-96">
                        <div class="bg-primary-250 rounded-full w-16 h-16 flex justify-center items-center px-5.75 py-3.75">
                            {{-- icon --}}
                        </div>
                        <h3 class="text-xl text-primary-text-250 font-semibold mt-5.75 mb-5.75 leading-7">Komunitas Supportif</h3>
                        <p class="text-primary-text-50 leading-6">Bergabung dengan komunitas yang saling mendukung dalam perjalanan menuju hidup sehat.</p>
                    </div>
                    <div class="bg-primary-home rounded-xl px-10.25 py-7.25 w-96">
                        <div class="bg-primary-250 rounded-full w-16 h-16 flex justify-center items-center px-5.75 py-3.75">
                            {{-- icon --}}
                        </div>
                        <h3 class="text-xl text-primary-text-250 font-semibold mt-5.75 mb-5.75 leading-7">Komunitas Supportif</h3>
                        <p class="text-primary-text-50 leading-6">Bergabung dengan komunitas yang saling mendukung dalam perjalanan menuju hidup sehat.</p>
                    </div>
                    <div class="bg-primary-home rounded-xl px-10.25 py-7.25 w-96">
                        <div class="bg-primary-250 rounded-full w-16 h-16 flex justify-center items-center px-5.75 py-3.75">
                            {{-- icon --}}
                        </div>
                        <h3 class="text-xl text-primary-text-250 font-semibold mt-5.75 mb-5.75 leading-7">Komunitas Supportif</h3>
                        <p class="text-primary-text-50 leading-6">Bergabung dengan komunitas yang saling mendukung dalam perjalanan menuju hidup sehat.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="program-nutivo" class="bg-primary-50 p-20 tracking-[-0.5px]">
            <h2 class="text-4xl text-center text-primary-text-250 font-bold mb-4.5 leading-10">Program Tersedia</h2>
            <p class="text-xl text-center text-primary-text-50 leading-7">
                Pilih program yang sesuai dengan target kesehatan Anda
            </p>
            <div class="flex justify-center items-start shrink-0 gap-8 mx-8 mt-16">
                <div class="bg-white rounded-2xl p-8 w-148 shadow-[0_4px_6px_0_rgba(0,0,0,0.10),0_10px_15px_0_rgba(0,0,0,0.10)]">
                    <div class="inline-flex items-center">
                        <div class="bg-primary-100 rounded-lg w-12 h-12 flex justify-center items-center mb-6.5 px-3.5 py-2.5">
                            {{-- icon --}}
                        </div>
                        <h3 class="text-xl text-primary-text-250 font-semibold ml-4 mt-2 mb-8.5 leading-7">Program Diet</h3>
                    </div>
                    <p class="text-primary-text-50 leading-6">Program khusus untuk menurunkan berat badan dengan defisit kalori yang sehat dan berkelanjutan.</p>
                    <ul class="flex flex-col justify-center items-start gap-3 mt-5.5 mb-8">
                        <li class="flex flex-col justify-center items-start text-primary-text-100 gap-3 leading-5">
                            {{-- ikon --}}
                            Target kalori harian yang disesuaikan
                        </li>
                        <li class="flex flex-col justify-center items-start text-primary-text-100 gap-3 leading-5">
                            {{-- ikon --}}
                            Menu makanan sehat dan bergizi
                        </li>
                        <li class="flex flex-col justify-center items-start text-primary-text-100 gap-3 leading-5">
                            {{-- ikon --}}
                            Monitoring progress mingguan
                        </li>
                    </ul>
                    <button class="bg-primary-100 text-white font-semibold rounded-lg w-132 py-3.5 leading-5">Pilih Program Diet</button>
                </div>
                <div class="relative bg-white rounded-2xl p-8 w-148 shadow-[0_4px_6px_0_rgba(0,0,0,0.10),0_10px_15px_0_rgba(0,0,0,0.10)]">
                    <div class="absolute inset-0 bg-primary-home-50 opacity-50 rounded-2xl z-20 shadow-[0_4px_6px_0_rgba(0,0,0,0.10),0_10px_15px_0_rgba(0,0,0,0.10)]"></div>
                    <div class="inline-flex items-center">
                        <div class="bg-primary-100 rounded-lg w-12 h-12 flex justify-center items-center mb-6.5 px-3.5 py-2.5">
                            {{-- icon --}}
                        </div>
                        <h3 class="text-xl text-primary-text-250 font-semibold ml-4 mt-2 mb-8.5 leading-7">Program Bulking</h3>
                    </div>
                    <div class="absolute top-0 right-0 bg-primary-100 text-2xl text-white font-bold rounded-tr-2xl rounded-bl-2xl w-48.25 px-2.5 py-4.25 leading-8">COMING SOON</div>
                    <p class="text-primary-text-50 leading-6">Program untuk menambah massa otot dan berat badan dengan surplus kalori yang terukur.</p>
                    <ul class="flex flex-col justify-center items-start gap-3 mt-5.5 mb-8">
                        <li class="flex flex-col justify-center items-start text-primary-text-100 gap-3 leading-5">
                            {{-- ikon --}}
                            Surplus kalori yang optimal
                        </li>
                        <li class="flex flex-col justify-center items-start text-primary-text-100 gap-3 leading-5">
                            {{-- ikon --}}
                            Focus pada protein tinggi
                        </li>
                        <li class="flex flex-col justify-center items-start text-primary-text-100 gap-3 leading-5">
                            {{-- ikon --}}
                            Panduan timing nutrisi
                        </li>
                    </ul>
                    <button class="bg-primary-100 text-white font-semibold rounded-lg w-132 py-3.5 leading-5">Pilih Program Bulking</button>
                </div>
            </div>
        </section>
        <section id="mulai-nutivo" class="bg-primary-100 px-68 py-20 tracking-[-0.5px]">
            <h2 class="text-4xl text-center text-white font-bold leading-10">Mulai Perjalanan Sehat Anda Hari Ini</h2>
            <p class="text-xl text-center text-primary-text mt-7 mb-7.5 leading-7 w-187.25 mx-auto">
                Bergabung dengan ribuan pengguna yang telah mencapai goals kesehatan mereka bersama Nutivo
            </p>
            <div class="flex justify-center items-center text-lg text-center font-semibold shrink-0 gap-4 py-5.25 w-auto">
                <x-button variant='white'>Daftar Gratis Sekarang</x-button>
                <x-button variant='outline-white'>Pelajari Lebih Lanjut</x-button>
            </div>
        </section>
    </main>
    <footer class="bg-primary-250 text-white px-25 pb-9.25">
        <div class="flex">
            <section id="footer-nutivo" class="pr-25 pt-8 gap-4 flex flex-col">
                <h2 class="font-belgrano text-4xl">Nutivo</h2>
                <p class="font-poppins text-xs text-primary-text w-74">
                    Platform kesehatan digital yang membantu Anda mencapai berat badan ideal dan gaya hidup sehat melalui program diet
                </p>
            </section>
            <section id="navigation-menu" class="ml-56.5 pt-12.25 gap-3.5 flex flex-col">
                <h2 class="font-bold font-nunito">NAVIGATION</h2>
                <div class="flex flex-col gap-2 font-poppins text-xs text-primary-text">
                    <a href="">Home</a>
                    <a href="">About</a>
                    <a href="">Features</a>
                    <a href="">Program</a>
                    <a href="">Dashboard</a>
                </div>
            </section>
            <section id="dietprograms-menu" class="ml-22.25 pt-12.25 gap-3.5 flex flex-col">
                <h2 class="font-bold font-nunito w-33.25">DIET PROGRAMS</h2>
                <div class="flex flex-col gap-2 font-poppins text-xs text-primary-text">
                    <a href="">Diet Ringan</a>
                    <a href="">Diet Standar</a>
                    <a href="">Diet Ketat</a>
                </div>
            </section>
            <section id="socialmedia-menu" class="ml-24.75 pt-12.25 flex flex-col">
                <h2 class="font-bold font-nunito mb-3.5">SOCIAL MEDIA</h2>
                <p class="font-poppins text-xs text-primary-text w-74 mb-3">
                    Dapatkan tips diet dan nutrisi lainnya dengan mengunjungi sosial media kami
                </p>
                {{--<div class="flex flex-row gap-3">
                    logo social media
                </div>--}}
            </section>
        </div>
        <hr class="mt-15.25 mb-2 border-primary-text">
        <div class="px-130 text-center text-xs font-poppins text-primary-text">
            &copy; 2026 Nutivo. All rights reserved
        </div>
    </footer>
</body>
</html>