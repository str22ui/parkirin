<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    @vite('resources/css/app.css')
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans">
    <header class=" p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-semibold text-black">Parkirin</h1>
            <nav class="hidden md:flex space-x-4">
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
            </nav>
        </div>
    </header>

    <nav class="md:hidden border-t p-4 fixed bottom-0 w-full">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex flex-col items-center justify-start ml-5">
                <i class="fa-solid fa-compass text-xl"></i>
                <label for="small-input" class="text-xl font-medium text-gray-900 dark:text-white">Explore</label>
            </div>
            <div class="flex flex-col items-center justify-center">
                <i class="fa-solid fa-calendar-days text-xl"></i>
                <label for="small-input" class="text-xl font-medium text-gray-900 dark:text-white">Plat</label>
            </div>
            <div class="flex flex-col items-center justify-end mr-5">
                <i class="fa-solid fa-clock-rotate-left text-xl"></i>
                <label for="small-input" class="text-xl font-medium text-gray-900 dark:text-white">History</label>
            </div>
        </div>
    </nav>


    @vite('resources/js/app.js')
</body>

</html>
