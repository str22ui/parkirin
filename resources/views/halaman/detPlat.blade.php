@extends('micro/nav')


@section('konten')
    <div class="mx-auto">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ URL('images/margo1.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Margo City</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Jl. Margonda No.358, Kemiri Muka, Kecamatan
                    Beji, Kota Depok, Jawa Barat 16423</p>

                <ul>
                    <div class="flex gap-2">
                        <li>Date : </li>
                        <li>27 oktober 2023</li>
                    </div>
                </ul>

                <ul>
                    <div class="flex gap-2">
                        <li>Type : </li>
                        <li>Motor</li>
                    </div>
                </ul>
                <ul>
                    <div class="flex gap-2">
                        <li>In : </li>
                        <li>11.00 am</li>
                    </div>
                </ul>
                <ul>
                    <div class="flex gap-2">
                        <li>Out : </li>
                        <li>11.00 am</li>
                    </div>
                </ul>

            </div>
        </div>
        <button type="button"
            class=" w-96 text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Estimated
            total payment</button>
    </div>
@endsection
