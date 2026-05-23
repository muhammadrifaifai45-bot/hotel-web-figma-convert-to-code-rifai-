<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home Suite Hotels</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

    <style>
        html {
            scroll-behavior: smooth
        }
    </style>

</head>

<body class="font-[Poppins] overflow-x-hidden bg-white">
    @livewireScripts
    <div class="w-full min-h-screen">

        <!-- NAVBAR -->

        <nav class="absolute top-0 left-0 w-full z-50">

            <div class="flex justify-between items-center px-20 py-10">

                <!-- LOGO -->

                <h1 class="text-[32px] font-semibold tracking-wide text-white">

                    HOME SUITE HOTELS

                </h1>



                <div class="flex items-center gap-14">


                    <a href="/"wire:navigate class="relative text-white text-[15px] font-medium group pb-2">
                        HOME
                        <span
                            class="absolute left-0 bottom-0 w-0 h-[3px] bg-yellow-400 rounded-full transition-all duration-500 ease-in-out group-hover:w-full">
                        </span>

                    </a>

                    <a href="#locations" class="relative text-white text-[15px] font-medium group pb-2">
                        LOCATION

                        <span
                            class="absolute left-0 bottom-0 w-0 h-[3px] bg-yellow-400 rounded-full transition-all duration-500 ease-in-out group-hover:w-full">
                        </span>

                    </a>



                    <a href="/suites"wire:navigate class="relative text-white text-[15px] font-medium group pb-2">

                        SUITES
                        <span
                            class="absolute left-0 bottom-0 w-0 h-[3px] bg-yellow-400 rounded-full transition-all duration-500 ease-in-out group-hover:w-full">
                        </span>

                    </a>

                    <!-- CONTACT -->

                    <a href="#contact" class="relative text-white text-[15px] font-medium group pb-2">

                        CONTACT US

                        <span
                            class="absolute left-0 bottom-0 w-0 h-[3px] bg-yellow-400 rounded-full transition-all duration-500 ease-in-out group-hover:w-full">
                        </span>

                    </a>

                    <!-- LOGIN / USER -->

                    @auth

                        <!-- USER BADGE -->

                        <div
                            class="border border-white/50 backdrop-blur-md bg-white/10  px-5 py-3 rounded-full flex items-center gap-3 shadow-xl">

                            <!-- AVATAR -->

                            @if (auth()->user()->avatar)
                                <img src="{{ auth()->user()->avatar }}"
                                    class="w-10 h-10 rounded-full border-2 border-white object-cover">
                            @else
                                <div
                                    class="w-10 h-10 rounded-full bg-yellow-400 flex items-center justify-center font-bold text-black">

                                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                                </div>
                            @endif

                            <!-- USERNAME -->

                            <span class="text-white font-medium text-[15px]">

                                {{ auth()->user()->name }}

                            </span>

                            <i class="fa-solid fa-chevron-down text-white-[12px]"></i>



                        </div>

                        


                        <form action="{{ route('logout') }}" method="POST"
                            onsubmit="return confirm('Apakah Anda yakin ingin logout?')">
                            @csrf

                            <button type="submit" class="w-full flex items-center gap-3 px-5 py-4 text-red-500 hover:bg-red-50 transition-all duration-300">
                                <i class="fa-solid fa-right-from-bracket text-[16px]"></i>
                                <span class="font-medium">
                                    logout
                                </span>
                            </button>
                            </form>
                        @else
                        
                            <!-- LOGIN -->

                            <a href="/login" class="relative text-white font-semibold text-[15px] group pb-2">

                                LOGIN

                                <span
                                    class="absolute left-0 bottom-0 w-0 h-[3px] bg-yellow-400 rounded-full transition-all duration-500 ease-in-out group-hover:w-full">
                                </span>

                            </a>

                        @endauth

                </div>

            </div>

        </nav>



        @yield('content')

    </div>


    @if(session('login_required'))

<div
    id="loginModal"
    class="fixed inset-0 bg-black/60 z-[999]
           flex items-center justify-center">

    <div
        class="bg-white w-[420px] rounded-3xl p-8 shadow-2xl
               text-center animate-bounce">

        <!-- ICON -->

        <div
            class="w-20 h-20 mx-auto rounded-full
                   bg-red-100 flex items-center justify-center mb-5">

            <i class="fa-solid fa-lock text-red-500 text-3xl"></i>

        </div>

        <!-- TITLE -->

        <h1 class="text-2xl font-bold text-gray-800">

            Akses Ditolak

        </h1>

        <!-- MESSAGE -->

        <p class="text-gray-500 mt-3 leading-relaxed">

            Maaf, Anda harus login terlebih dahulu
            untuk mengakses halaman suites.

        </p>

        <!-- BUTTON -->

        <div class="mt-7 flex justify-center gap-4">

            <!-- CLOSE -->

            <button
                onclick="document.getElementById('loginModal').style.display='none'"
                class="px-6 py-3 rounded-xl bg-gray-100 hover:bg-gray-200 transition-all">

                Nanti

            </button>

            <!-- LOGIN -->

            <a href="/login"
                class="px-6 py-3 rounded-xl bg-yellow-400
                       hover:bg-yellow-300 transition-all
                       font-semibold">

                Login Sekarang

            </a>

        </div>

    </div>

</div>

@endif


@if(session('success_login'))

<div
    id="successPopup"
    class="fixed top-10 right-10 z-[999]">

    <div
        class="bg-green-500 text-white
               px-6 py-4 rounded-2xl
               shadow-2xl flex items-center gap-3">

        <i class="fa-solid fa-circle-check text-2xl"></i>

        <div>

            <h1 class="font-bold">
                Login Berhasil
            </h1>

            <p class="text-sm text-white/80">
                Selamat datang kembali.
            </p>

        </div>

    </div>

</div>

<script>

setTimeout(() => {

    document.getElementById('successPopup')
        .style.display = 'none';

}, 3000);

</script>

@endif
</body>

</html>
