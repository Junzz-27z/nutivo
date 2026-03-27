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
        <h2 class="font-belgrano text-3xl text-primary font-semibold">Nutivo</h2>
        <nav class="nav-menu items-center gap-6 font-nunito bg-white w-auto flex-row mt-0">
            <a href="">Home</a>
            <a href="#about">About</a>
            <a href="#features">Features</a>
            <a href="#program">Program</a>
        </nav>
        <div class="auth-group gap-6 font-nunito w-auto mt-0">
            <x-button class="px-3 py-2 rounded-lg">Login</x-button>
            <x-button variant="outline" class="px-3 py-2 rounded-lg">Register</x-button>
        </div>
    </header>
    <main class="font-inter">
        {{--<section>
            gambarnya
        </section>--}}
        <section id="about" class="bg-background p-20 tracking-[-0.5px] scroll-mt-26.5">
            <h2 class="text-4xl text-center text-black font-bold mb-4 leading-10">Tentang Nutivo</h2>
            <p class="text-xl text-center text-text-dark leading-7 w-178.75 mx-auto">
                Kami hadir untuk membantu Anda mencapai gaya hidup sehat melalui tracking nutrisi yang akurat dan program yang disesuaikan dengan kebutuhan individual
            </p>
            <div class="flex justify-center items-start shrink-0 gap-8 mx-8 mt-16">
                <div class="bg-white rounded-xl text-center px-11.75 pt-8 pb-7.5 w-96 group hover:bg-primary hover:shadow-[0_4px_6px_0_rgba(0,0,0,0.25),0_10px_15px_0_rgba(0,0,0,0.25)]">
                    <div class="bg-primary rounded-full w-16 h-16 flex justify-center items-center mx-auto mb-6.5 px-5 py-4 text-white group-hover:bg-white group-hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="21" viewBox="0 0 24 21" fill="currentColor">
                            <path d="M3 1.5C3 0.670312 2.32969 0 1.5 0C0.670312 0 0 0.670312 0 1.5V17.25C0 19.3219 1.67812 21 3.75 21H22.5C23.3297 21 24 20.3297 24 19.5C24 18.6703 23.3297 18 22.5 18H3.75C3.3375 18 3 17.6625 3 17.25V1.5ZM22.0594 5.55938C22.6453 4.97344 22.6453 4.02188 22.0594 3.43594C21.4734 2.85 20.5219 2.85 19.9359 3.43594L15 8.37656L12.3094 5.68594C11.7234 5.1 10.7719 5.1 10.1859 5.68594L4.93594 10.9359C4.35 11.5219 4.35 12.4734 4.93594 13.0594C5.52188 13.6453 6.47344 13.6453 7.05938 13.0594L11.25 8.87344L13.9406 11.5641C14.5266 12.15 15.4781 12.15 16.0641 11.5641L22.0641 5.56406L22.0594 5.55938Z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl text-black font-semibold mb-4 leading-7 group-hover:text-white">Tracking Akurat</h3>
                    <p class="text-text-dark leading-6 group-hover:text-white">Pantau kalori, makronutrien, dan konsumsi air dengan database makanan yang lengkap dan akurat.</p>
                </div>
                <div class="bg-white rounded-xl text-center px-11.75 pt-8 pb-7.5 w-96 group hover:bg-primary hover:shadow-[0_4px_6px_0_rgba(0,0,0,0.25),0_10px_15px_0_rgba(0,0,0,0.25)]">
                    <div class="bg-primary rounded-full w-16 h-16 flex justify-center items-center mx-auto mb-6.5 px-5 py-4 text-white group-hover:bg-white group-hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6.9375 20.5875L6.34687 21.9703C5.47031 21.525 4.66406 20.9766 3.93281 20.3344L4.99687 19.2703C5.58281 19.7812 6.23438 20.2266 6.9375 20.5875ZM1.50469 12.3516H0C0.065625 13.3453 0.253125 14.3063 0.548438 15.2156L1.94531 14.6578C1.71563 13.9219 1.56094 13.1484 1.50469 12.3516ZM1.50469 10.8516C1.57031 9.97031 1.74844 9.11719 2.025 8.31562L0.642188 7.725C0.290625 8.70938 0.0703125 9.75937 0 10.8516H1.50469ZM2.61563 6.9375C2.98125 6.23906 3.42188 5.5875 3.93281 4.99219L2.86875 3.92813C2.22656 4.65938 1.67344 5.46563 1.23281 6.34219L2.61563 6.9375ZM18.2109 19.2703C17.5594 19.8328 16.8328 20.3156 16.05 20.6953L16.6078 22.0922C17.5781 21.6281 18.4734 21.0328 19.275 20.3297L18.2109 19.2703ZM4.99219 3.93281C5.64375 3.37031 6.37031 2.8875 7.15313 2.50781L6.59531 1.11094C5.625 1.575 4.72969 2.17031 3.93281 2.87344L4.99219 3.93281ZM20.5875 16.2656C20.2219 16.9641 19.7812 17.6156 19.2703 18.2109L20.3344 19.275C20.9766 18.5438 21.5297 17.7328 21.9703 16.8609L20.5875 16.2656ZM21.6984 12.3516C21.6328 13.2328 21.4547 14.0859 21.1781 14.8875L22.5609 15.4781C22.9125 14.4891 23.1328 13.4391 23.1984 12.3469H21.6984V12.3516ZM14.6578 21.2578C13.9219 21.4922 13.1484 21.6422 12.3516 21.6984V23.2031C13.3453 23.1375 14.3063 22.95 15.2156 22.6547L14.6578 21.2578ZM10.8516 21.6984C9.97031 21.6328 9.11719 21.4547 8.31562 21.1781L7.725 22.5609C8.71406 22.9125 9.76406 23.1328 10.8563 23.1984V21.6984H10.8516ZM21.2578 8.54531C21.4922 9.28125 21.6422 10.0547 21.6984 10.8516H23.2031C23.1375 9.85781 22.95 8.89687 22.6547 7.9875L21.2578 8.54531ZM3.93281 18.2109C3.37031 17.5594 2.8875 16.8328 2.50781 16.05L1.11094 16.6078C1.575 17.5781 2.17031 18.4734 2.87344 19.275L3.93281 18.2109ZM12.3516 1.50469C13.2328 1.57031 14.0813 1.74844 14.8875 2.025L15.4781 0.642188C14.4938 0.290625 13.4438 0.0703125 12.3516 0V1.50469ZM8.54531 1.94531C9.28125 1.71094 10.0547 1.56094 10.8516 1.50469V0C9.85781 0.065625 8.89687 0.253125 7.9875 0.548438L8.54531 1.94531ZM20.3344 3.92813L19.2703 4.99219C19.8328 5.64375 20.3156 6.37031 20.7 7.15313L22.0969 6.59531C21.6328 5.625 21.0375 4.72969 20.3344 3.92813ZM18.2109 3.93281L19.275 2.86875C18.5438 2.22656 17.7375 1.67344 16.8609 1.23281L16.2703 2.61563C16.9641 2.98125 17.6203 3.42188 18.2109 3.93281Z"/>
                            <path d="M11.9624 14.2266H11.2124C10.903 14.2266 10.6499 13.9734 10.6499 13.6641C10.6499 10.3359 14.278 10.6687 14.278 8.61094C14.278 7.67344 13.4436 6.72656 11.5874 6.72656C10.2233 6.72656 9.5108 7.17656 8.81236 8.07187C8.62955 8.30625 8.29205 8.35313 8.05298 8.18438L7.43892 7.75312C7.17642 7.57031 7.11548 7.2 7.31705 6.94687C8.3108 5.67187 9.49205 4.85156 11.592 4.85156C14.0436 4.85156 16.1577 6.24844 16.1577 8.61094C16.1577 11.7797 12.5295 11.5875 12.5295 13.6641C12.5249 13.9734 12.2717 14.2266 11.9624 14.2266Z"/>
                            <path d="M11.6775 17.8516C12.4023 17.8516 12.99 17.2639 12.99 16.5391C12.99 15.8142 12.4023 15.2266 11.6775 15.2266C10.9526 15.2266 10.365 15.8142 10.365 16.5391C10.365 17.2639 10.9526 17.8516 11.6775 17.8516Z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl text-black font-semibold mb-4 leading-7 group-hover:text-white">Program yang Dipersonalisasi</h3>
                    <p class="text-text-dark leading-6 group-hover:text-white">Program diet dan bulking yang disesuaikan dengan goals, berat badan, dan tinggi badan Anda.</p>
                </div>
                <div class="bg-white rounded-xl text-center px-11.75 pt-8 pb-7.5 w-96 group hover:bg-primary hover:shadow-[0_4px_6px_0_rgba(0,0,0,0.25),0_10px_15px_0_rgba(0,0,0,0.25)]">
                    <div class="bg-primary rounded-full w-16 h-16 flex justify-center items-center mx-auto mb-6.5 px-4.25 py-4 text-white group-hover:bg-white group-hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24" fill="currentColor">
                            <path d="M6.75 0C7.74456 0 8.69839 0.395088 9.40165 1.09835C10.1049 1.80161 10.5 2.75544 10.5 3.75C10.5 4.74456 10.1049 5.69839 9.40165 6.40165C8.69839 7.10491 7.74456 7.5 6.75 7.5C5.75544 7.5 4.80161 7.10491 4.09835 6.40165C3.39509 5.69839 3 4.74456 3 3.75C3 2.75544 3.39509 1.80161 4.09835 1.09835C4.80161 0.395088 5.75544 0 6.75 0ZM24 0C24.9946 0 25.9484 0.395088 26.6516 1.09835C27.3549 1.80161 27.75 2.75544 27.75 3.75C27.75 4.74456 27.3549 5.69839 26.6516 6.40165C25.9484 7.10491 24.9946 7.5 24 7.5C23.0054 7.5 22.0516 7.10491 21.3484 6.40165C20.6451 5.69839 20.25 4.74456 20.25 3.75C20.25 2.75544 20.6451 1.80161 21.3484 1.09835C22.0516 0.395088 23.0054 0 24 0ZM0 14.0016C0 11.2406 2.24062 9 5.00156 9H7.00312C7.74844 9 8.45625 9.16406 9.09375 9.45469C9.03281 9.79219 9.00469 10.1438 9.00469 10.5C9.00469 12.2906 9.79219 13.8984 11.0344 15C11.025 15 11.0156 15 11.0016 15H0.998437C0.45 15 0 14.55 0 14.0016ZM18.9984 15C18.9891 15 18.9797 15 18.9656 15C20.2125 13.8984 20.9953 12.2906 20.9953 10.5C20.9953 10.1438 20.9625 9.79688 20.9062 9.45469C21.5438 9.15938 22.2516 9 22.9969 9H24.9984C27.7594 9 30 11.2406 30 14.0016C30 14.5547 29.55 15 29.0016 15H18.9984ZM10.5 10.5C10.5 9.30653 10.9741 8.16193 11.818 7.31802C12.6619 6.47411 13.8065 6 15 6C16.1935 6 17.3381 6.47411 18.182 7.31802C19.0259 8.16193 19.5 9.30653 19.5 10.5C19.5 11.6935 19.0259 12.8381 18.182 13.682C17.3381 14.5259 16.1935 15 15 15C13.8065 15 12.6619 14.5259 11.818 13.682C10.9741 12.8381 10.5 11.6935 10.5 10.5ZM6 22.7484C6 19.2984 8.79844 16.5 12.2484 16.5H17.7516C21.2016 16.5 24 19.2984 24 22.7484C24 23.4375 23.4422 24 22.7484 24H7.25156C6.5625 24 6 23.4422 6 22.7484Z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl text-black font-semibold mb-4 leading-7 group-hover:text-white">Komunitas Supportif</h3>
                    <p class="text-text-dark leading-6 group-hover:text-white">Bergabung dengan komunitas yang saling mendukung dalam perjalanan menuju hidup sehat.</p>
                </div>
            </div>
        </section>
        <section id="features" class="bg-primary px-20 pt-11.75 pb-21.5 tracking-[-0.5px] scroll-mt-26.5">
            <h2 class="text-4xl text-center text-white font-bold mb-2.75 leading-10 w-123.5 mx-auto">Semua Yang Kamu Butuhkan Dalam Satu Aplikasi</h2>
            <p class="text-xl text-center text-text-light leading-7 w-135.25 mx-auto">
                Dari tracking hingga monitoring perkembangan, Nutivo hadir sebagai teman setia perjalanan sehatmu
            </p>
            <div class="flex flex-col shrink-0 gap-7.5">
                <div class="flex justify-center items-start gap-8 mx-8 mt-16">
                    <div class="bg-white rounded-xl px-10.25 py-7.25 w-96">
                        <div class="bg-primary rounded-full w-16 h-16 flex justify-center items-center px-4.25 py-4 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24" fill="currentColor">
                                <path d="M6.75 0C7.74456 0 8.69839 0.395088 9.40165 1.09835C10.1049 1.80161 10.5 2.75544 10.5 3.75C10.5 4.74456 10.1049 5.69839 9.40165 6.40165C8.69839 7.10491 7.74456 7.5 6.75 7.5C5.75544 7.5 4.80161 7.10491 4.09835 6.40165C3.39509 5.69839 3 4.74456 3 3.75C3 2.75544 3.39509 1.80161 4.09835 1.09835C4.80161 0.395088 5.75544 0 6.75 0ZM24 0C24.9946 0 25.9484 0.395088 26.6516 1.09835C27.3549 1.80161 27.75 2.75544 27.75 3.75C27.75 4.74456 27.3549 5.69839 26.6516 6.40165C25.9484 7.10491 24.9946 7.5 24 7.5C23.0054 7.5 22.0516 7.10491 21.3484 6.40165C20.6451 5.69839 20.25 4.74456 20.25 3.75C20.25 2.75544 20.6451 1.80161 21.3484 1.09835C22.0516 0.395088 23.0054 0 24 0ZM0 14.0016C0 11.2406 2.24062 9 5.00156 9H7.00312C7.74844 9 8.45625 9.16406 9.09375 9.45469C9.03281 9.79219 9.00469 10.1438 9.00469 10.5C9.00469 12.2906 9.79219 13.8984 11.0344 15C11.025 15 11.0156 15 11.0016 15H0.998437C0.45 15 0 14.55 0 14.0016ZM18.9984 15C18.9891 15 18.9797 15 18.9656 15C20.2125 13.8984 20.9953 12.2906 20.9953 10.5C20.9953 10.1438 20.9625 9.79688 20.9062 9.45469C21.5438 9.15938 22.2516 9 22.9969 9H24.9984C27.7594 9 30 11.2406 30 14.0016C30 14.5547 29.55 15 29.0016 15H18.9984ZM10.5 10.5C10.5 9.30653 10.9741 8.16193 11.818 7.31802C12.6619 6.47411 13.8065 6 15 6C16.1935 6 17.3381 6.47411 18.182 7.31802C19.0259 8.16193 19.5 9.30653 19.5 10.5C19.5 11.6935 19.0259 12.8381 18.182 13.682C17.3381 14.5259 16.1935 15 15 15C13.8065 15 12.6619 14.5259 11.818 13.682C10.9741 12.8381 10.5 11.6935 10.5 10.5ZM6 22.7484C6 19.2984 8.79844 16.5 12.2484 16.5H17.7516C21.2016 16.5 24 19.2984 24 22.7484C24 23.4375 23.4422 24 22.7484 24H7.25156C6.5625 24 6 23.4422 6 22.7484Z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl text-black font-semibold mt-5.75 mb-5.75 leading-7">Komunitas Supportif</h3>
                        <p class="text-text-dark leading-6">Bergabung dengan komunitas yang saling mendukung dalam perjalanan menuju hidup sehat.</p>
                    </div>
                    <div class="bg-white rounded-xl px-10.25 py-7.25 w-96">
                        <div class="bg-primary rounded-full w-16 h-16 flex justify-center items-center px-4.25 py-4 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24" fill="currentColor">
                                <path d="M6.75 0C7.74456 0 8.69839 0.395088 9.40165 1.09835C10.1049 1.80161 10.5 2.75544 10.5 3.75C10.5 4.74456 10.1049 5.69839 9.40165 6.40165C8.69839 7.10491 7.74456 7.5 6.75 7.5C5.75544 7.5 4.80161 7.10491 4.09835 6.40165C3.39509 5.69839 3 4.74456 3 3.75C3 2.75544 3.39509 1.80161 4.09835 1.09835C4.80161 0.395088 5.75544 0 6.75 0ZM24 0C24.9946 0 25.9484 0.395088 26.6516 1.09835C27.3549 1.80161 27.75 2.75544 27.75 3.75C27.75 4.74456 27.3549 5.69839 26.6516 6.40165C25.9484 7.10491 24.9946 7.5 24 7.5C23.0054 7.5 22.0516 7.10491 21.3484 6.40165C20.6451 5.69839 20.25 4.74456 20.25 3.75C20.25 2.75544 20.6451 1.80161 21.3484 1.09835C22.0516 0.395088 23.0054 0 24 0ZM0 14.0016C0 11.2406 2.24062 9 5.00156 9H7.00312C7.74844 9 8.45625 9.16406 9.09375 9.45469C9.03281 9.79219 9.00469 10.1438 9.00469 10.5C9.00469 12.2906 9.79219 13.8984 11.0344 15C11.025 15 11.0156 15 11.0016 15H0.998437C0.45 15 0 14.55 0 14.0016ZM18.9984 15C18.9891 15 18.9797 15 18.9656 15C20.2125 13.8984 20.9953 12.2906 20.9953 10.5C20.9953 10.1438 20.9625 9.79688 20.9062 9.45469C21.5438 9.15938 22.2516 9 22.9969 9H24.9984C27.7594 9 30 11.2406 30 14.0016C30 14.5547 29.55 15 29.0016 15H18.9984ZM10.5 10.5C10.5 9.30653 10.9741 8.16193 11.818 7.31802C12.6619 6.47411 13.8065 6 15 6C16.1935 6 17.3381 6.47411 18.182 7.31802C19.0259 8.16193 19.5 9.30653 19.5 10.5C19.5 11.6935 19.0259 12.8381 18.182 13.682C17.3381 14.5259 16.1935 15 15 15C13.8065 15 12.6619 14.5259 11.818 13.682C10.9741 12.8381 10.5 11.6935 10.5 10.5ZM6 22.7484C6 19.2984 8.79844 16.5 12.2484 16.5H17.7516C21.2016 16.5 24 19.2984 24 22.7484C24 23.4375 23.4422 24 22.7484 24H7.25156C6.5625 24 6 23.4422 6 22.7484Z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl text-black font-semibold mt-5.75 mb-5.75 leading-7">Komunitas Supportif</h3>
                        <p class="text-text-dark leading-6">Bergabung dengan komunitas yang saling mendukung dalam perjalanan menuju hidup sehat.</p>
                    </div>
                    <div class="bg-white rounded-xl px-10.25 py-7.25 w-96">
                        <div class="bg-primary rounded-full w-16 h-16 flex justify-center items-center px-4.25 py-4 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24" fill="currentColor">
                                <path d="M6.75 0C7.74456 0 8.69839 0.395088 9.40165 1.09835C10.1049 1.80161 10.5 2.75544 10.5 3.75C10.5 4.74456 10.1049 5.69839 9.40165 6.40165C8.69839 7.10491 7.74456 7.5 6.75 7.5C5.75544 7.5 4.80161 7.10491 4.09835 6.40165C3.39509 5.69839 3 4.74456 3 3.75C3 2.75544 3.39509 1.80161 4.09835 1.09835C4.80161 0.395088 5.75544 0 6.75 0ZM24 0C24.9946 0 25.9484 0.395088 26.6516 1.09835C27.3549 1.80161 27.75 2.75544 27.75 3.75C27.75 4.74456 27.3549 5.69839 26.6516 6.40165C25.9484 7.10491 24.9946 7.5 24 7.5C23.0054 7.5 22.0516 7.10491 21.3484 6.40165C20.6451 5.69839 20.25 4.74456 20.25 3.75C20.25 2.75544 20.6451 1.80161 21.3484 1.09835C22.0516 0.395088 23.0054 0 24 0ZM0 14.0016C0 11.2406 2.24062 9 5.00156 9H7.00312C7.74844 9 8.45625 9.16406 9.09375 9.45469C9.03281 9.79219 9.00469 10.1438 9.00469 10.5C9.00469 12.2906 9.79219 13.8984 11.0344 15C11.025 15 11.0156 15 11.0016 15H0.998437C0.45 15 0 14.55 0 14.0016ZM18.9984 15C18.9891 15 18.9797 15 18.9656 15C20.2125 13.8984 20.9953 12.2906 20.9953 10.5C20.9953 10.1438 20.9625 9.79688 20.9062 9.45469C21.5438 9.15938 22.2516 9 22.9969 9H24.9984C27.7594 9 30 11.2406 30 14.0016C30 14.5547 29.55 15 29.0016 15H18.9984ZM10.5 10.5C10.5 9.30653 10.9741 8.16193 11.818 7.31802C12.6619 6.47411 13.8065 6 15 6C16.1935 6 17.3381 6.47411 18.182 7.31802C19.0259 8.16193 19.5 9.30653 19.5 10.5C19.5 11.6935 19.0259 12.8381 18.182 13.682C17.3381 14.5259 16.1935 15 15 15C13.8065 15 12.6619 14.5259 11.818 13.682C10.9741 12.8381 10.5 11.6935 10.5 10.5ZM6 22.7484C6 19.2984 8.79844 16.5 12.2484 16.5H17.7516C21.2016 16.5 24 19.2984 24 22.7484C24 23.4375 23.4422 24 22.7484 24H7.25156C6.5625 24 6 23.4422 6 22.7484Z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl text-black font-semibold mt-5.75 mb-5.75 leading-7">Komunitas Supportif</h3>
                        <p class="text-text-dark leading-6">Bergabung dengan komunitas yang saling mendukung dalam perjalanan menuju hidup sehat.</p>
                    </div>
                </div>
                <div class="flex justify-center items-start gap-8 mx-8">
                    <div class="bg-white rounded-xl px-10.25 py-7.25 w-96">
                        <div class="bg-primary rounded-full w-16 h-16 flex justify-center items-center px-4.25 py-4 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24" fill="currentColor">
                                <path d="M6.75 0C7.74456 0 8.69839 0.395088 9.40165 1.09835C10.1049 1.80161 10.5 2.75544 10.5 3.75C10.5 4.74456 10.1049 5.69839 9.40165 6.40165C8.69839 7.10491 7.74456 7.5 6.75 7.5C5.75544 7.5 4.80161 7.10491 4.09835 6.40165C3.39509 5.69839 3 4.74456 3 3.75C3 2.75544 3.39509 1.80161 4.09835 1.09835C4.80161 0.395088 5.75544 0 6.75 0ZM24 0C24.9946 0 25.9484 0.395088 26.6516 1.09835C27.3549 1.80161 27.75 2.75544 27.75 3.75C27.75 4.74456 27.3549 5.69839 26.6516 6.40165C25.9484 7.10491 24.9946 7.5 24 7.5C23.0054 7.5 22.0516 7.10491 21.3484 6.40165C20.6451 5.69839 20.25 4.74456 20.25 3.75C20.25 2.75544 20.6451 1.80161 21.3484 1.09835C22.0516 0.395088 23.0054 0 24 0ZM0 14.0016C0 11.2406 2.24062 9 5.00156 9H7.00312C7.74844 9 8.45625 9.16406 9.09375 9.45469C9.03281 9.79219 9.00469 10.1438 9.00469 10.5C9.00469 12.2906 9.79219 13.8984 11.0344 15C11.025 15 11.0156 15 11.0016 15H0.998437C0.45 15 0 14.55 0 14.0016ZM18.9984 15C18.9891 15 18.9797 15 18.9656 15C20.2125 13.8984 20.9953 12.2906 20.9953 10.5C20.9953 10.1438 20.9625 9.79688 20.9062 9.45469C21.5438 9.15938 22.2516 9 22.9969 9H24.9984C27.7594 9 30 11.2406 30 14.0016C30 14.5547 29.55 15 29.0016 15H18.9984ZM10.5 10.5C10.5 9.30653 10.9741 8.16193 11.818 7.31802C12.6619 6.47411 13.8065 6 15 6C16.1935 6 17.3381 6.47411 18.182 7.31802C19.0259 8.16193 19.5 9.30653 19.5 10.5C19.5 11.6935 19.0259 12.8381 18.182 13.682C17.3381 14.5259 16.1935 15 15 15C13.8065 15 12.6619 14.5259 11.818 13.682C10.9741 12.8381 10.5 11.6935 10.5 10.5ZM6 22.7484C6 19.2984 8.79844 16.5 12.2484 16.5H17.7516C21.2016 16.5 24 19.2984 24 22.7484C24 23.4375 23.4422 24 22.7484 24H7.25156C6.5625 24 6 23.4422 6 22.7484Z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl text-black font-semibold mt-5.75 mb-5.75 leading-7">Komunitas Supportif</h3>
                        <p class="text-text-dark leading-6">Bergabung dengan komunitas yang saling mendukung dalam perjalanan menuju hidup sehat.</p>
                    </div>
                    <div class="bg-white rounded-xl px-10.25 py-7.25 w-96">
                        <div class="bg-primary rounded-full w-16 h-16 flex justify-center items-center px-4.25 py-4 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24" fill="currentColor">
                                <path d="M6.75 0C7.74456 0 8.69839 0.395088 9.40165 1.09835C10.1049 1.80161 10.5 2.75544 10.5 3.75C10.5 4.74456 10.1049 5.69839 9.40165 6.40165C8.69839 7.10491 7.74456 7.5 6.75 7.5C5.75544 7.5 4.80161 7.10491 4.09835 6.40165C3.39509 5.69839 3 4.74456 3 3.75C3 2.75544 3.39509 1.80161 4.09835 1.09835C4.80161 0.395088 5.75544 0 6.75 0ZM24 0C24.9946 0 25.9484 0.395088 26.6516 1.09835C27.3549 1.80161 27.75 2.75544 27.75 3.75C27.75 4.74456 27.3549 5.69839 26.6516 6.40165C25.9484 7.10491 24.9946 7.5 24 7.5C23.0054 7.5 22.0516 7.10491 21.3484 6.40165C20.6451 5.69839 20.25 4.74456 20.25 3.75C20.25 2.75544 20.6451 1.80161 21.3484 1.09835C22.0516 0.395088 23.0054 0 24 0ZM0 14.0016C0 11.2406 2.24062 9 5.00156 9H7.00312C7.74844 9 8.45625 9.16406 9.09375 9.45469C9.03281 9.79219 9.00469 10.1438 9.00469 10.5C9.00469 12.2906 9.79219 13.8984 11.0344 15C11.025 15 11.0156 15 11.0016 15H0.998437C0.45 15 0 14.55 0 14.0016ZM18.9984 15C18.9891 15 18.9797 15 18.9656 15C20.2125 13.8984 20.9953 12.2906 20.9953 10.5C20.9953 10.1438 20.9625 9.79688 20.9062 9.45469C21.5438 9.15938 22.2516 9 22.9969 9H24.9984C27.7594 9 30 11.2406 30 14.0016C30 14.5547 29.55 15 29.0016 15H18.9984ZM10.5 10.5C10.5 9.30653 10.9741 8.16193 11.818 7.31802C12.6619 6.47411 13.8065 6 15 6C16.1935 6 17.3381 6.47411 18.182 7.31802C19.0259 8.16193 19.5 9.30653 19.5 10.5C19.5 11.6935 19.0259 12.8381 18.182 13.682C17.3381 14.5259 16.1935 15 15 15C13.8065 15 12.6619 14.5259 11.818 13.682C10.9741 12.8381 10.5 11.6935 10.5 10.5ZM6 22.7484C6 19.2984 8.79844 16.5 12.2484 16.5H17.7516C21.2016 16.5 24 19.2984 24 22.7484C24 23.4375 23.4422 24 22.7484 24H7.25156C6.5625 24 6 23.4422 6 22.7484Z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl text-black font-semibold mt-5.75 mb-5.75 leading-7">Komunitas Supportif</h3>
                        <p class="text-text-dark leading-6">Bergabung dengan komunitas yang saling mendukung dalam perjalanan menuju hidup sehat.</p>
                    </div>
                    <div class="bg-white rounded-xl px-10.25 py-7.25 w-96">
                        <div class="bg-primary rounded-full w-16 h-16 flex justify-center items-center px-4.25 py-4 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24" fill="currentColor">
                                <path d="M6.75 0C7.74456 0 8.69839 0.395088 9.40165 1.09835C10.1049 1.80161 10.5 2.75544 10.5 3.75C10.5 4.74456 10.1049 5.69839 9.40165 6.40165C8.69839 7.10491 7.74456 7.5 6.75 7.5C5.75544 7.5 4.80161 7.10491 4.09835 6.40165C3.39509 5.69839 3 4.74456 3 3.75C3 2.75544 3.39509 1.80161 4.09835 1.09835C4.80161 0.395088 5.75544 0 6.75 0ZM24 0C24.9946 0 25.9484 0.395088 26.6516 1.09835C27.3549 1.80161 27.75 2.75544 27.75 3.75C27.75 4.74456 27.3549 5.69839 26.6516 6.40165C25.9484 7.10491 24.9946 7.5 24 7.5C23.0054 7.5 22.0516 7.10491 21.3484 6.40165C20.6451 5.69839 20.25 4.74456 20.25 3.75C20.25 2.75544 20.6451 1.80161 21.3484 1.09835C22.0516 0.395088 23.0054 0 24 0ZM0 14.0016C0 11.2406 2.24062 9 5.00156 9H7.00312C7.74844 9 8.45625 9.16406 9.09375 9.45469C9.03281 9.79219 9.00469 10.1438 9.00469 10.5C9.00469 12.2906 9.79219 13.8984 11.0344 15C11.025 15 11.0156 15 11.0016 15H0.998437C0.45 15 0 14.55 0 14.0016ZM18.9984 15C18.9891 15 18.9797 15 18.9656 15C20.2125 13.8984 20.9953 12.2906 20.9953 10.5C20.9953 10.1438 20.9625 9.79688 20.9062 9.45469C21.5438 9.15938 22.2516 9 22.9969 9H24.9984C27.7594 9 30 11.2406 30 14.0016C30 14.5547 29.55 15 29.0016 15H18.9984ZM10.5 10.5C10.5 9.30653 10.9741 8.16193 11.818 7.31802C12.6619 6.47411 13.8065 6 15 6C16.1935 6 17.3381 6.47411 18.182 7.31802C19.0259 8.16193 19.5 9.30653 19.5 10.5C19.5 11.6935 19.0259 12.8381 18.182 13.682C17.3381 14.5259 16.1935 15 15 15C13.8065 15 12.6619 14.5259 11.818 13.682C10.9741 12.8381 10.5 11.6935 10.5 10.5ZM6 22.7484C6 19.2984 8.79844 16.5 12.2484 16.5H17.7516C21.2016 16.5 24 19.2984 24 22.7484C24 23.4375 23.4422 24 22.7484 24H7.25156C6.5625 24 6 23.4422 6 22.7484Z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl text-black font-semibold mt-5.75 mb-5.75 leading-7">Komunitas Supportif</h3>
                        <p class="text-text-dark leading-6">Bergabung dengan komunitas yang saling mendukung dalam perjalanan menuju hidup sehat.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="program" class="bg-background p-20 tracking-[-0.5px] scroll-mt-26.5">
            <h2 class="text-4xl text-center text-black font-bold mb-4.5 leading-10">Program Tersedia</h2>
            <p class="text-xl text-center text-text-dark leading-7">
                Pilih program yang sesuai dengan target kesehatan Anda
            </p>
            <div class="flex justify-center items-start shrink-0 gap-8 mx-8 mt-16">
                <div class="bg-white rounded-2xl p-8 w-148 shadow-[0_4px_6px_0_rgba(0,0,0,0.10),0_10px_15px_0_rgba(0,0,0,0.10)]">
                    <div class="inline-flex items-center">
                        <div class="bg-primary rounded-lg w-12 h-12 flex justify-center items-center mb-6.5 px-3.5 py-2.5 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M5 6.875C5 5.54892 5.52678 4.27715 6.46447 3.33947C7.40215 2.40178 8.67392 1.875 10 1.875C11.3261 1.875 12.5979 2.40178 13.5355 3.33947C14.4732 4.27715 15 5.54892 15 6.875C15 8.20108 14.4732 9.47285 13.5355 10.4105C12.5979 11.3482 11.3261 11.875 10 11.875C8.67392 11.875 7.40215 11.3482 6.46447 10.4105C5.52678 9.47285 5 8.20108 5 6.875ZM15.3047 2.5C14.043 0.972656 12.1367 0 10 0C7.86328 0 5.95703 0.972656 4.69531 2.5H2.5C1.12109 2.5 0 3.62109 0 5V17.5C0 18.8789 1.12109 20 2.5 20H17.5C18.8789 20 20 18.8789 20 17.5V5C20 3.62109 18.8789 2.5 17.5 2.5H15.3047ZM11.5625 8.75C11.5625 8.33594 11.4023 7.96094 11.1367 7.67969L12.4492 4.62109C12.5859 4.30469 12.4375 3.9375 12.1211 3.80078C11.8047 3.66406 11.4375 3.8125 11.3008 4.12891L9.98828 7.1875C9.12891 7.19141 8.4375 7.89062 8.4375 8.75C8.4375 9.61328 9.13672 10.3125 10 10.3125C10.8633 10.3125 11.5625 9.61328 11.5625 8.75Z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl text-black font-semibold ml-4 mt-2 mb-8.5 leading-7">Program Diet</h3>
                    </div>
                    <p class="text-text-dark leading-6">Program khusus untuk menurunkan berat badan dengan defisit kalori yang sehat dan berkelanjutan.</p>
                    <ul class="flex flex-col justify-center items-start gap-3 mt-5.5 mb-8">
                        <li class="flex flex-row justify-center items-start text-primary gap-3 leading-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" class="my-1.25">
                                <path d="M13.7066 0.292969C14.0973 0.683594 14.0973 1.31797 13.7066 1.70859L5.70664 9.70859C5.31602 10.0992 4.68164 10.0992 4.29102 9.70859L0.291016 5.70859C-0.0996094 5.31797 -0.0996094 4.68359 0.291016 4.29297C0.681641 3.90234 1.31602 3.90234 1.70664 4.29297L5.00039 7.58359L12.2941 0.292969C12.6848 -0.0976562 13.3191 -0.0976562 13.7098 0.292969H13.7066Z"/>
                            </svg>
                            <span class="text-text-dark">Target kalori harian yang disesuaikan</span>
                        </li>
                        <li class="flex flex-row justify-center items-start text-primary gap-3 leading-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" class="my-1.25">
                                <path d="M13.7066 0.292969C14.0973 0.683594 14.0973 1.31797 13.7066 1.70859L5.70664 9.70859C5.31602 10.0992 4.68164 10.0992 4.29102 9.70859L0.291016 5.70859C-0.0996094 5.31797 -0.0996094 4.68359 0.291016 4.29297C0.681641 3.90234 1.31602 3.90234 1.70664 4.29297L5.00039 7.58359L12.2941 0.292969C12.6848 -0.0976562 13.3191 -0.0976562 13.7098 0.292969H13.7066Z"/>
                            </svg>
                            <span class="text-text-dark">Menu makanan sehat dan bergizi</span>
                        </li>
                        <li class="flex flex-row justify-center items-start text-primary gap-3 leading-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" class="my-1.25">
                                <path d="M13.7066 0.292969C14.0973 0.683594 14.0973 1.31797 13.7066 1.70859L5.70664 9.70859C5.31602 10.0992 4.68164 10.0992 4.29102 9.70859L0.291016 5.70859C-0.0996094 5.31797 -0.0996094 4.68359 0.291016 4.29297C0.681641 3.90234 1.31602 3.90234 1.70664 4.29297L5.00039 7.58359L12.2941 0.292969C12.6848 -0.0976562 13.3191 -0.0976562 13.7098 0.292969H13.7066Z"/>
                            </svg>
                            <span class="text-text-dark">Monitoring progres mingguan</span>
                        </li>
                    </ul>
                    <button class="bg-primary text-white border-2 border-primary font-semibold rounded-lg w-132 py-3.5 leading-5 hover:bg-white hover:text-primary hover:border-2 hover:border-primary hover:opacity-90">Pilih Program Diet</button>
                </div>
                <div class="relative bg-white rounded-2xl p-8 w-148 shadow-[0_4px_6px_0_rgba(0,0,0,0.10),0_10px_15px_0_rgba(0,0,0,0.10)]">
                    <div class="absolute inset-0 bg-comingsoon opacity-50 rounded-2xl z-20 shadow-[0_4px_6px_0_rgba(0,0,0,0.10),0_10px_15px_0_rgba(0,0,0,0.10)]"></div>
                    <div class="inline-flex items-center">
                        <div class="bg-primary rounded-lg w-12 h-12 flex justify-center items-center mb-6.5 px-3.5 py-2.5 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" viewBox="0 0 25 18" fill="currentColor">
                                <path d="M3.75 1.25C3.75 0.558594 4.30859 0 5 0H6.25C6.94141 0 7.5 0.558594 7.5 1.25V7.5V10V16.25C7.5 16.9414 6.94141 17.5 6.25 17.5H5C4.30859 17.5 3.75 16.9414 3.75 16.25V13.75H2.5C1.80859 13.75 1.25 13.1914 1.25 12.5V10C0.558594 10 0 9.44141 0 8.75C0 8.05859 0.558594 7.5 1.25 7.5V5C1.25 4.30859 1.80859 3.75 2.5 3.75H3.75V1.25ZM21.25 1.25V3.75H22.5C23.1914 3.75 23.75 4.30859 23.75 5V7.5C24.4414 7.5 25 8.05859 25 8.75C25 9.44141 24.4414 10 23.75 10V12.5C23.75 13.1914 23.1914 13.75 22.5 13.75H21.25V16.25C21.25 16.9414 20.6914 17.5 20 17.5H18.75C18.0586 17.5 17.5 16.9414 17.5 16.25V10V7.5V1.25C17.5 0.558594 18.0586 0 18.75 0H20C20.6914 0 21.25 0.558594 21.25 1.25ZM16.25 7.5V10H8.75V7.5H16.25Z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl text-black font-semibold ml-4 mt-2 mb-8.5 leading-7">Program Bulking</h3>
                    </div>
                    <div class="absolute top-0 right-0 bg-primary text-2xl text-white font-bold rounded-tr-2xl rounded-bl-2xl w-48.25 px-2.5 py-4.25 leading-8">COMING SOON</div>
                    <p class="text-text-dark leading-6">Program untuk menambah massa otot dan berat badan dengan surplus kalori yang terukur.</p>
                    <ul class="flex flex-col justify-center items-start gap-3 mt-5.5 mb-8">
                        <li class="flex flex-row justify-center items-start text-primary gap-3 leading-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" class="my-1.25">
                                <path d="M13.7066 0.292969C14.0973 0.683594 14.0973 1.31797 13.7066 1.70859L5.70664 9.70859C5.31602 10.0992 4.68164 10.0992 4.29102 9.70859L0.291016 5.70859C-0.0996094 5.31797 -0.0996094 4.68359 0.291016 4.29297C0.681641 3.90234 1.31602 3.90234 1.70664 4.29297L5.00039 7.58359L12.2941 0.292969C12.6848 -0.0976562 13.3191 -0.0976562 13.7098 0.292969H13.7066Z"/>
                            </svg>
                            <span class="text-text-dark">Surplus kalori yang optimal</span>
                        </li>
                        <li class="flex flex-row justify-center items-start text-primary gap-3 leading-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" class="my-1.25">
                                <path d="M13.7066 0.292969C14.0973 0.683594 14.0973 1.31797 13.7066 1.70859L5.70664 9.70859C5.31602 10.0992 4.68164 10.0992 4.29102 9.70859L0.291016 5.70859C-0.0996094 5.31797 -0.0996094 4.68359 0.291016 4.29297C0.681641 3.90234 1.31602 3.90234 1.70664 4.29297L5.00039 7.58359L12.2941 0.292969C12.6848 -0.0976562 13.3191 -0.0976562 13.7098 0.292969H13.7066Z"/>
                            </svg>
                            <span class="text-text-dark">Fokus pada protein tinggi</span>
                        </li>
                        <li class="flex flex-row justify-center items-start text-primary gap-3 leading-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" class="my-1.25">
                                <path d="M13.7066 0.292969C14.0973 0.683594 14.0973 1.31797 13.7066 1.70859L5.70664 9.70859C5.31602 10.0992 4.68164 10.0992 4.29102 9.70859L0.291016 5.70859C-0.0996094 5.31797 -0.0996094 4.68359 0.291016 4.29297C0.681641 3.90234 1.31602 3.90234 1.70664 4.29297L5.00039 7.58359L12.2941 0.292969C12.6848 -0.0976562 13.3191 -0.0976562 13.7098 0.292969H13.7066Z"/>
                            </svg>
                            <span class="text-text-dark">Panduan timing nutrisi</span>
                        </li>
                    </ul>
                    <button class="bg-primary text-white border-2 border-primary font-semibold rounded-lg w-132 py-3.5 leading-5 hover:bg-white hover:text-primary hover:border-2 hover:border-primary hover:opacity-90">Pilih Program Bulking</button>
                </div>
            </div>
        </section>
        <section id="mulai" class="bg-primary px-68 py-20 tracking-[-0.5px] scroll-mt-26.5">
            <h2 class="text-4xl text-center text-white font-bold leading-10">Mulai Perjalanan Sehat Anda Hari Ini</h2>
            <p class="text-xl text-center text-text-light mt-7 mb-7.5 leading-7 w-187.25 mx-auto">
                Bergabung dengan ribuan pengguna yang telah mencapai goals kesehatan mereka bersama Nutivo
            </p>
            <div class="flex justify-center items-center text-lg text-center font-semibold shrink-0 gap-4 w-auto">
                    <x-button size="lg" variant="white" class='w-64.75 h-16'>Daftar Gratis Sekarang</x-button>
                    <x-button size="lg" variant="outline-white" class='w-64.75 h-16'>Pelajari Lebih Lanjut</x-button>
            </div>
        </section>
    </main>
    <footer class="bg-secondary text-white px-25 pb-9.25">
        <div class="flex">
            <section id="footer-nutivo" class="pr-25 pt-8 gap-4 flex flex-col">
                <h2 class="text-4xl font-belgrano">Nutivo</h2>
                <p class="font-poppins text-xs text-text-light w-74">
                    Platform kesehatan digital yang membantu Anda mencapai berat badan ideal dan gaya hidup sehat melalui program diet
                </p>
            </section>
            <section id="navigation-menu" class="ml-56.5 pt-12.25 gap-3.5 flex flex-col">
                <h2 class="font-bold font-nunito">NAVIGATION</h2>
                <div class="flex flex-col gap-2 font-poppins text-xs text-text-light">
                    <a href="">Home</a>
                    <a href="#about">About</a>
                    <a href="#features">Features</a>
                    <a href="#program">Program</a>
                    <a href="">Dashboard</a>
                </div>
            </section>
            <section id="dietprograms-menu" class="ml-22.25 pt-12.25 gap-3.5 flex flex-col">
                <h2 class="font-bold font-nunito w-33.25">DIET PROGRAMS</h2>
                <div class="flex flex-col gap-2 font-poppins text-xs text-text-light">
                    <a href="">Diet Ringan</a>
                    <a href="">Diet Standar</a>
                    <a href="">Diet Ketat</a>
                </div>
            </section>
            <section id="socialmedia-menu" class="ml-24.75 pt-12.25 flex flex-col">
                <h2 class="font-bold font-nunito mb-3.5">SOCIAL MEDIA</h2>
                <p class="font-poppins text-xs text-text-light w-74 mb-3">
                    Dapatkan tips diet dan nutrisi lainnya dengan mengunjungi sosial media kami
                </p>
                {{--<div class="flex flex-row gap-3">
                    logo social media
                </div>--}}
            </section>
        </div>
        <hr class="mt-15.25 mb-2 border-text-light">
        <div class="px-130 text-center text-xs font-poppins text-text-light">
            &copy; 2026 Nutivo. All rights reserved
        </div>
    </footer>
</body>
</html>