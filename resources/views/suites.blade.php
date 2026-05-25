@extends('layouts.app')

@section('content')

<div class="bg-zinc-100 p-10 pt-40">

    <h1 class="text-center text-3xl font-semibold mb-10">

        HOME AND SUITES

    </h1>

    <div class="grid grid-cols-2 gap-10">

        <!-- CARD 1 -->

        <div>

            <div class="relative">

                <img
                    src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1200"
                    class="rounded-3xl h-[300px] w-full object-cover"
                >

                <div class="absolute bottom-0 right-0 bg-zinc-800 text-white px-6 py-4 rounded-tl-2xl rounded-br-3xl">

                    1.250.000

                </div>

            </div>

            <h2 class="text-2xl font-bold mt-5">
                DELUXE ROOM
            </h2>

            <p class="text-zinc-600 mt-4 leading-7">

                Enjoy the perfect blend of modern comfort and contemporary luxury. Our Deluxe Rooms are designed with a warm color palette and expansive windows offering stunning city views, providing a tranquil setting for your rest.

            </p>

            <div class="border-t mt-8 pt-5">

                <h3 class="font-bold text-lg">
                    DETAIL ROOM
                </h3>

                <p class="text-zinc-600 mt-4 leading-7">
                    Facilities that can be found in the Premium Suites room
                </p>

                <div class="space-y-4 mt-5">

                    <p class="flex items-center gap-3">
                        <i class="fa-solid fa-bed text-zinc-800"></i>
                        Large Size Room
                    </p>
                
                    <p class="flex items-center gap-3">
                        <i class="fa-solid fa-crown text-zinc-800"></i>
                        King Size Bed
                    </p>
                
                    <p class="flex items-center gap-3">
                        <i class="fa-solid fa-wifi text-zinc-800"></i>
                        Fast Internet
                    </p>

                </div>

            </div>

        </div>

        <!-- CARD 2 -->

        <div>

            <div class="relative">

                <img
                    src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=1200"
                    class="rounded-3xl h-[300px] w-full object-cover"
                >

                <div class="absolute bottom-0 right-0 bg-zinc-800 text-white px-6 py-4 rounded-tl-2xl rounded-br-3xl">

                    2.150.000

                </div>

            </div>

            <h2 class="text-2xl font-bold mt-5">
                Premium Suites Room
            </h2>

            <p class="text-zinc-600 mt-4 leading-7">

                Enjoy the perfect blend of modern comfort and contemporary luxury. Our Deluxe Rooms are designed with a warm color palette and expansive windows offering stunning city views, providing a tranquil setting for your rest.

            </p>

            <div class="border-t mt-8 pt-5">

                <h3 class="font-bold text-lg">
                    DETAIL ROOM
                </h3>

                <p class="text-zinc-600 mt-4 leading-7">
                    Facilities that can be found in the Premium Suites room
                </p>

                <div class="space-y-4 mt-5">

                    <p class="flex items-center gap-3">
                        <i class="fa-solid fa-bed text-zinc-800"></i>
                        Extra Large Room
                    </p>
                
                    <p class="flex items-center gap-3">
                        <i class="fa-solid fa-crown text-zinc-800"></i>
                        Extra King Size Bed
                    </p>
                
                    <p class="flex items-center gap-3">
                        <i class="fa-solid fa-wifi text-zinc-800"></i>
                        Super Fast Internet
                    </p>
                
                    <p class="flex items-center gap-3">
                        <i class="fa-solid fa-couch text-zinc-800"></i>
                        Big Living Room
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection