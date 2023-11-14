@extends('micro/nav2')

@section('konten')
    <div class="z-0 overflow-y-auto">
        {{-- <nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Margo City<span>
                </a>

            </div>
        </nav> --}}


        <div id="indicators-carousel" class="relative h-56 overflow-hidden rounded-lg md:h-96 mx-5" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ URL('images/margo1.jpg') }}" class="absolute block w-full h-full object-cover" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ URL('images/margo2.jpeg') }}" class="absolute block w-full h-full object-cover"
                        alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ URL('images/margo3.jpg') }}" class="absolute block w-full h-full object-cover"
                        alt="...">
                </div>
                {{-- <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-4.svg"
                    class="absolute block w-full h-full object-cover" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-5.svg"
                    class="absolute block w-full h-full object-cover" alt="...">
            </div> --}}
            </div>

            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                {{-- <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button> --}}
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <div class="mt-5 mx-4">
            <div class="flex items-center space-x-1 mb-2 ml-2">
                <i class="fa-solid fa-location-dot"></i>
                <label for="small-input" class="block  text-sm font-medium text-gray-900 dark:text-white">Address</label>
            </div>

            <div class="relative">

                <textarea id="message" rows="3"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>


                <!-- Add an icon (e.g., a search icon) to the right of the input -->
                <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <i class="fa-regular fa-copy" style="color: gray"></i>
                </span>
            </div>
        </div>

        <div class="mt-5 mx-4">
            <div class="flex items-center space-x-1 mb-2 ml-2">
                <i class="fa-regular fa-clock"></i>
                <label for="small-input" class="block  text-sm font-medium text-gray-900 dark:text-white">Open
                    hours</label>
            </div>

            <div class="relative">
                <input type="text" id="small-input"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <!-- Add an icon (e.g., a search icon) to the right of the input -->
                <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <i class="fa-solid fa-chevron-down" style="color: gray"></i>
                </span>
            </div>
        </div>

        <div class="mt-5 mx-4">
            <div class="flex items-center space-x-1 mb-2 ml-2">
                <i class="fa-solid fa-phone"></i>
                <label for="small-input" class="block  text-sm font-medium text-gray-900 dark:text-white">Call</label>
            </div>

            <div class="relative">
                <input type="text" id="small-input"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <!-- Add an icon (e.g., a search icon) to the right of the input -->
                <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <i class="fa-solid fa-phone" style="color: gray"></i>
                </span>
            </div>
        </div>
        <div class="ml-3 mt-3 flex">
            <button type="button"
                class="w-24 text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Car</button>
            <button type="button"
                class="w-24 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-red-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Motor</button>
        </div>


        <div class="mt-5 mx-4">
            <div class="flex items-center space-x-1 mb-2 ml-2">
                <i id="car-icon" class="fa-solid fa-car-side"></i>
                {{-- <i id="motor-icon" class="fa-solid fa-motorcycle hidden"></i> --}}
                <label for="small-input" class="block  text-sm font-medium text-gray-900 dark:text-white">Quotas</label>
            </div>

            <div class="relative">
                <input type="text" id="small-input"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <!-- Add an icon (e.g., a search icon) to the right of the input -->
                <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <i class="fa-solid fa-rotate" style="color: gray"></i>
                </span>
            </div>
        </div>

        <div class="mt-5 mx-4">
            <div class="flex items-center space-x-1 mb-2 ml-2">
                <i class="fa-solid fa-money-bill"></i>
                <label for="small-input" class="block  text-sm font-medium text-gray-900 dark:text-white">Fee</label>
            </div>

            <div class="relative">
                <input type="text" id="small-input"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>



    </div>

    </div>
    @vite('resources/js/app.js')
@endsection
