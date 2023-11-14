@extends('layout/aplikasi')

<div>
    <nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 ">
            <a href="{{ route('halaman.index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <i class="fa-solid fa-arrow-left"></i>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Margo City<span>
            </a>
            <div class="hidden md:flex space-x-4">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <li class="flex items-center space-x-2">
                        <i class="fa-solid fa-compass"></i>
                        <a href="{{ route('halaman.index') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Explore</a>
                    </li>

                    <li class="flex items-center space-x-2">
                        <i class="fa-solid fa-calendar-days"></i>
                        <a href="{{ route('plat.plat') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Plat</a>
                    </li>

                    <li class="flex items-center space-x-2">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <a href="{{ route('history.history') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">History</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    {{-- <nav class="hidden md:flex space-x-4">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <i class="fa-solid fa-arrow-left"></i>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Margo City<span>
            </a>
            
        </div>
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <i class="fa-solid fa-arrow-left"></i>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Margo City<span>
        </a>
       
    </nav> --}}

    <nav class="md:hidden border-t pt-4 pb-2 fixed bottom-0 w-full z-50 bg-blue">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex flex-col items-center justify-start ml-5">
                <i class="fa-solid fa-compass text-xl"></i>
                <a href="{{ route('halaman.index') }}"
                    class="text-xl block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Explore</a>
            </div>
            <div class="flex flex-col items-center justify-center">
                <i class="fa-solid fa-calendar-days text-xl"></i>
                <a href="{{ route('plat.plat') }}"
                    class="text-xl block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Plat</a>
            </div>
            <div class="flex flex-col items-center justify-end mr-5">
                <i class="fa-solid fa-clock-rotate-left text-xl"></i>
                <a href="{{ route('history.history') }}"
                    class="text-xl block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">History</a>
            </div>
        </div>
    </nav>

</div>

@yield('nav2')
