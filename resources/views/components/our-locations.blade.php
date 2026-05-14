
<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<section id="locations" class="w-full bg-[#f7f7f7] py-24 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <div class="text-center mb-16">

            <h2 class="text-4xl font-bold uppercase mb-6">
                OUR LOCATIONS
            </h2>

            <p class="max-w-3xl mx-auto text-gray-500 leading-relaxed">
                With prime locations in Cape Town and Johannesburg, Home Suite Hotels is your premier Cape Town hotel and Johannesburg hotel 
                for both work and play. Embrace a sleek, contemporary vibe with curated spaces, cutting-edge amenities, and personalized service designed for today’s discerning traveler. Enjoy local flavors, premium amenities, and a fresh perspective on hospitality that feels like 
                                                                  a true home-away-from-home experience in both cities.
            </p>

        </div>

        {{-- Slider --}}
        <div class="relative overflow-hidden">

            {{-- Slides Container --}}
            <div id="slider" data-aos="fade-right" data-aos-duration="10000" class="flex transition-all duration-700 ease-in-out">

                @foreach ($locations as $location)
                    <div class="min-w-full">

                        <div
                            class="bg-white rounded-2xl
                    p-10 flex flex-col lg:flex-row
                    items-center gap-12 shadow-lg">

                            {{-- Left --}}
                            <div class="flex-1">

                                <p class="font-semibold mb-4">
                                    {{ $location['kota'] }}
                                </p>

                                <h1 class="text-5xl font-bold leading-tight mb-6">
                                    {{ $location['title'] }}
                                </h1>

                                <p class="text-gray-500 leading-relaxed mb-8">
                                    {{ $location['description'] }}
                                </p>

                                {{-- <button 
                            class="bg-yellow-400 hover:bg-yellow-500
                            transition duration-300 px-8 py-4 font-semibold">

                                EXPLORE THIS HOTEL

                            </button> --}}

                                <a href="/suites"
                                    class="bg-yellow-400 hover:bg-yellow-500 transition duration-300px-8 py-4 font-semibold inline-block">

                                    EXPLORE THIS HOTEL

                                </a>

                            </div>

                            {{-- Right --}}
                            <div class="flex-1">

                                <img src="{{ asset($location['image']) }}"
                                    class="w-full h-[400px]
                            object-cover rounded-xl
                            hover:scale-105
                            transition duration-500">

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

            {{-- Navigation Dots --}}
            <div class="flex justify-center gap-4 mt-10">

                @foreach ($locations as $index => $location)
                    <button onclick="goToSlide({{ $index }})"
                        class="dot w-4 h-4 rounded-full
                bg-gray-300 transition-all duration-300">

                    </button>
                @endforeach

            </div>

        </div>

    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</section>
