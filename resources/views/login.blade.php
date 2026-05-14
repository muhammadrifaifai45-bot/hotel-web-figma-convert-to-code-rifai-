<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class=" min-h-screen flex items-center justify-center p-10">

    <div class="w-full max-w-[1400px] h-[800px] bg-white rounded-[40px] overflow-hidden shadow-2xl flex">

        <!-- LEFT SIDE -->

        <div class="w-1/2 bg-zinc-100 px-20 py-16 flex flex-col justify-center">

            <h1 class="text-5xl font-light tracking-wide text-zinc-800">
                HOME SUITE HOTEL
            </h1>

            <h2 class="text-6xl font-bold mt-8 leading-tight text-zinc-900">
                GET STARTED
            </h2>

            <p class="mt-6 text-zinc-500 text-lg leading-relaxed max-w-[500px]">
                Welcome to Home Suite Hotel, enjoy luxury hospitality and premium comfort experience.
            </p>

            <!-- FORM -->

            <form method="POST" action="/login" class="mt-12">

                @csrf

                <!-- EMAIL -->

                <div class="mb-6">

                    <input
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                        class="w-full h-[65px] rounded-full px-8 bg-white border border-zinc-300 focus:outline-none focus:ring-4 focus:ring-yellow-300 text-lg shadow-sm">

                </div>

                <!-- PASSWORD -->

                <div>

                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        class="w-full h-[65px] rounded-full px-8 bg-white border border-zinc-300 focus:outline-none focus:ring-4 focus:ring-yellow-300 text-lg shadow-sm">

                </div>

                <!-- BUTTON AREA -->

                <div class="flex gap-5 mt-10">

                    <!-- LOGIN BUTTON -->

                    <button
                        type="submit"
                        class="flex-1 h-[65px] bg-yellow-400 hover:bg-yellow-500 transition-all duration-300 rounded-2xl text-xl font-bold shadow-lg">

                        LOGIN

                    </button>

                    <!-- GOOGLE BUTTON -->

                    <a href="/auth/google" class="flex-1">

                        <button
                            type="button"
                            class="w-full h-[65px] bg-white border border-zinc-300 hover:bg-zinc-100 transition-all duration-300 rounded-2xl text-lg font-semibold flex items-center justify-center gap-4 shadow-md">

                            <!-- GOOGLE ICON -->

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 48 48"
                                class="w-7 h-7">

                                <path fill="#FFC107"
                                    d="M43.6 20.5H42V20H24v8h11.3C33.7 32.7 29.3 36 24 36c-6.6 0-12-5.4-12-12s5.4-12 12-12c3 0 5.7 1.1 7.8 3l5.7-5.7C34.1 6.1 29.3 4 24 4 12.9 4 4 12.9 4 24s8.9 20 20 20 20-8.9 20-20c0-1.3-.1-2.7-.4-3.5z" />

                                <path fill="#FF3D00"
                                    d="M6.3 14.7l6.6 4.8C14.7 16 19 12 24 12c3 0 5.7 1.1 7.8 3l5.7-5.7C34.1 6.1 29.3 4 24 4 16.3 4 9.7 8.3 6.3 14.7z" />

                                <path fill="#4CAF50"
                                    d="M24 44c5.2 0 10-2 13.5-5.3l-6.2-5.2C29.2 35.1 26.7 36 24 36c-5.3 0-9.7-3.3-11.3-8l-6.5 5C9.5 39.5 16.2 44 24 44z" />

                                <path fill="#1976D2"
                                    d="M43.6 20.5H42V20H24v8h11.3c-1.1 3-3.4 5.4-6.5 6.9l.1-.1 6.2 5.2C39.6 36.4 44 30.7 44 24c0-1.3-.1-2.7-.4-3.5z" />

                            </svg>

                            Google

                        </button>

                    </a>

                </div>

            </form>

        </div>

        <!-- RIGHT SIDE -->

        <div
            class="w-1/2 relative bg-cover bg-center"
            style="background-image:url('https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1400')">

            <!-- OVERLAY -->

            <div class="absolute inset-0 bg-black/30"></div>

            <!-- CONTENT -->

            <div class="relative z-10 h-full flex items-center justify-center px-16">

                <div>

                    <h1 class="text-7xl font-bold leading-[90px] text-white">

                        WELCOME TO

                        <br>

                        <span class="text-yellow-300">

                            HOME SUITES HOTEL

                        </span>

                    </h1>

                    <p class="mt-8 text-white/80 text-xl leading-relaxed max-w-[500px]">

                        Discover elegant rooms, luxury suites, and unforgettable hospitality experience.

                    </p>

                </div>

            </div>

        </div>

    </div>

</body>

</html>