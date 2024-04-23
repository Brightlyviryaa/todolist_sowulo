{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.base')
@section('content')
    <div class="container mx-auto px-4">
        <nav class="bg-white flex md:justify-between justify-center items-center mt-11 md:flex-row flex-col">
            <div class="sm:mb-0 mb-4">
                <h1 class="text-4xl font-bold md:text-start text-center">To-do List</h1>
                <h2 class="text-lg md:text-start text-center">By Gerda SOWULO</h2>
            </div>
            <p id="dateContainer" class="md:mr-4 mr-0 sm:p-5 text-lg text-center sm:mb-0 mb-4">Now: Thu, 28 Maret 2024</p>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-[#00AFE7] text-white px-5 py-3 rounded-lg sm:p-5 text-lg">Log Out</button>
            </form>
        </nav>

        <div class="mt-6">
            <div class="flex justify-between">
                <div class="flex items-center gap-5">
                    <button class="bg-black rounded-full p-3">
                        <img src={{ asset('images/plus.svg') }}>
                    </button>
                    <h1 class="text-xl font-medium">Add more task</h1>
                    <h1 class="text-white bg-[#FD9A71] rounded-full p-3 ml-9 text-xl">4</h1>
                </div>
            </div>
        </div>

        <div class="mt-12 sm:mr-0 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="flex justify-center">
                <div class="p-5 bg-[#FD9A71] rounded-3xl px-5 py-4 w-64 h-64 flex justify-between flex-col">
                    <h3 class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, magni.</h3>
                    <div class="mt-14 flex gap-12 items-center">
                        <p class="text-base">29 March, 2024</p>
                        <button class="bg-black rounded-full p-3">
                            <img src={{ asset('images/pencil.svg') }}>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="p-5 bg-[#FEC870] rounded-3xl px-5 py-4 w-64 h-64 flex justify-between flex-col">
                    <h3 class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, magni.</h3>
                    <div class="mt-14 flex gap-12 items-center">
                        <p class="text-base">29 March, 2024</p>
                        <button class="bg-black rounded-full p-3">
                            <img src={{ asset('images/pencil.svg') }}>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="p-5 bg-[#E3ED8D] rounded-3xl px-5 py-4 w-64 h-64 flex justify-between flex-col">
                    <h3 class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, magni.</h3>
                    <div class="mt-14 flex gap-12 items-center">
                        <p class="text-base">29 March, 2024</p>
                        <button class="bg-black rounded-full p-3">
                            <img src={{ asset('images/pencil.svg') }}>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="p-5 bg-[#E3ED8D] rounded-3xl px-5 py-4 w-64 h-64 flex justify-between flex-col">
                    <h3 class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, magni.</h3>
                    <div class="mt-14 flex gap-12 items-center">
                        <p class="text-base">29 March, 2024</p>
                        <button class="bg-black rounded-full p-3">
                            <img src={{ asset('images/pencil.svg') }}>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Now: Thu, 28 Maret 2024
        let date = new Date();

        const dateContainer = document.querySelector("#dateContainer");

        let day
        switch (date.getDay()) {
            case 0:
                day = "Minggu"
                break
            case 1:
                day = "Senin"
                break
            case 2:
                day = "Selasa"
                break
            case 3:
                day = "Rabu"
                break
            case 4:
                day = "Kamis"
                break
            case 5:
                day = "Jumat"
                break
            case 6:
                day = "Sabtu"
                break
        }

        let month
        switch (date.getMonth()) {
            case 0:
                month = "Januari"
                break
            case 1:
                month = "Februari"
                break
            case 2:
                month = "Maret"
                break
            case 3:
                month = "April"
                break
            case 4:
                month = "Mei"
                break
            case 5:
                month = "Juni"
                break
            case 6:
                month = "Juli"
                break
            case 7:
                month = "Agustus"
                break
            case 8:
                month = "September"
                break
            case 9:
                month = "Oktober"
                break
            case 10:
                month = "November"
                break
            case 11:
                month = "Desember"
                break
        }

        let dateString = "Now: " + day + ", " + date.getDate() + " " + month + " " + date.getFullYear();
        dateContainer.innerHTML = dateString;
    </script>
@endsection
