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

</head>

<body class="font-[Poppins] overflow-x-hidden bg-white">
    @livewireScripts
    <div class="w-full min-h-screen">

        <!-- NAVBAR -->

        <nav
            class="absolute top-0 left-0 w-full z-50">

            <div
                class="flex justify-between items-center px-20 py-10">

                <!-- LOGO -->

                <h1
                    class="text-[32px] font-semibold tracking-wide text-white">

                    HOME SUITE HOTELS

                </h1>

                

                <div
                    class="flex items-center gap-14">


                    <a href="/"wire:navigate class="relative text-white text-[15px] font-medium group pb-2">
                         HOME
                        <span class="absolute left-0 bottom-0 w-0 h-[3px] bg-yellow-400 rounded-full transition-all duration-500 ease-in-out group-hover:w-full">
                        </span>

                    </a>

                    <a href="#locations" class="relative text-white text-[15px] font-medium group pb-2">
                         LOCATION

                        <span
                            class="absolute left-0 bottom-0 w-0 h-[3px] bg-yellow-400 rounded-full transition-all duration-500 ease-in-out group-hover:w-full">
                        </span>

                    </a>

                  

                    <a href="/suites"wire:navigate class="relative text-white text-[15px] font-medium group pb-2">

                        EVENTS
                        <span class="absolute left-0 bottom-0 w-0 h-[3px] bg-yellow-400 rounded-full transition-all duration-500 ease-in-out group-hover:w-full">
                        </span>

                    </a>

                    <!-- CONTACT -->

                    <a href="/suites"
                        class="relative text-white text-[15px] font-medium group pb-2">

                        CONTACT US

                        <span
                            class="absolute left-0 bottom-0 w-0 h-[3px] bg-yellow-400 rounded-full transition-all duration-500 ease-in-out group-hover:w-full">
                        </span>

                    </a>

                    <!-- LOGIN / USER -->

                    @auth

                        <!-- USER BADGE -->

                        <div
                            class="border border-white/50
                                   backdrop-blur-md
                                   bg-white/10
                                   px-5 py-3
                                   rounded-full
                                   flex items-center gap-3
                                   shadow-xl">

                            <!-- AVATAR -->

                            @if(auth()->user()->avatar)

                                <img
                                    src="{{ auth()->user()->avatar }}"
                                    class="w-10 h-10 rounded-full border-2 border-white object-cover">

                            @else

                                <div
                                    class="w-10 h-10 rounded-full bg-yellow-400 flex items-center justify-center font-bold text-black">

                                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                                </div>

                            @endif

                            <!-- USERNAME -->

                            <span
                                class="text-white font-medium text-[15px]">

                                {{ auth()->user()->name }}

                            </span>

                        </div>

                    @else

                        <!-- LOGIN -->

                        <a href="/login"
                            class="relative text-white font-semibold text-[15px] group pb-2">

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

</body>

</html>