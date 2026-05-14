@extends('layouts.app')

@section('content')

    <div class="relative w-full h-screen bg-cover bg-center"
        style="background-image:url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=1600')">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative z-10 h-full flex flex-col justify-center items-center text-center px-6">

            <h1
                class="font-[Poppins] font-bold text-[#C44545]
                   text-[95px]
                   leading-[110px]
                   max-w-[1000px]">

                WELCOME HOME SUITES HOTEL

            </h1>

            <p
                class="mt-8
                   text-white
                   font-medium
                   text-[24px]
                   leading-[42px]
                   max-w-[950px]">

                A boutique hotel experience at our Cape Town hotel and Johannesburg hotel,
                where hearty home comforts meet world-class luxury hospitality.

            </p>

          

            <div class="mt-14 flex items-center gap-5">

                <div
                    class="w-[650px]
                       h-[75px]
                       bg-white/70
                       backdrop-blur-md
                       rounded-full
                       flex
                       items-center
                       px-8
                       shadow-2xl">

                    <!-- ICON -->

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-zinc-700" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />

                    </svg>

                    <!-- INPUT -->

                    <input type="text" placeholder="Search luxury hotels..."
                        class="flex-1 h-full bg-transparent outline-none px-5 text-[20px] text-zinc-800 placeholder:text-zinc-500">

                </div>

                <!-- BUTTON -->

                <button
                    class="w-[220px]
                       h-[75px]
                       bg-[#C44545]
                       hover:bg-[#b13d3d]
                       transition-all
                       duration-300
                       rounded-[22px]
                       text-white
                       text-[22px]
                       font-semibold
                       shadow-2xl">

                    Search

                </button>

            </div>

        </div>

    </div>

    <x-our-locations :locations="$lokasi_hotel" />
    <x-our-contact-us/>
    <script>

        let currentSlide = 0;
    
        const slider = document.getElementById('slider');
    
        const dots = document.querySelectorAll('.dot');
    
        function updateSlider() {
    
            slider.style.transform =
                `translateX(-${currentSlide * 100}%)`;
    
            dots.forEach((dot, index) => {
    
                if(index === currentSlide){
    
                    dot.classList.remove('bg-gray-300');
    
                    dot.classList.add('bg-yellow-400','w-10');
    
                } else {
    
                    dot.classList.remove('bg-yellow-400','w-10');
    
                    dot.classList.add('bg-gray-300');
                }
                
    
            });
    
        }
    
        function goToSlide(index){
    
            currentSlide = index;
    
            updateSlider();
        }
    
        updateSlider();
    
    </script>
@endsection


