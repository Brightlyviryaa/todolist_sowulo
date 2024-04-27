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
        <nav class="mt-11 flex flex-col items-center justify-center bg-white md:flex-row md:justify-between">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-center text-4xl font-bold md:text-start">To-do List</h1>
                <h2 class="text-center text-lg md:text-start">By Gerda SOWULO</h2>
            </div>
            <p id="dateContainer" class="mb-4 mr-0 text-center text-lg sm:mb-0 sm:p-5 md:mr-4">Now: Thu, 28 Maret 2024</p>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="rounded-lg bg-[#00AFE7] px-5 py-3 text-lg text-white sm:p-5">Log Out</button>
            </form>
        </nav>

        <div class="mt-6">
            <div class="flex justify-between">
                <div class="flex items-center gap-5">
                    <button class="rounded-full bg-black p-3">
                        <img src={{ asset('images/plus.svg') }}>
                    </button>
                    <h1 class="text-xl font-medium">Add more task</h1>
                    <h1 class="ml-9 rounded-full bg-[#FD9A71] p-3 text-xl text-white">4</h1>
                </div>
            </div>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-8 sm:mr-0 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex justify-center">
                <div class="flex h-64 w-64 flex-col justify-between rounded-3xl bg-[#FD9A71] p-5 px-5 py-4">
                    <h3 class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, magni.</h3>
                    <div class="mt-14 flex items-center gap-12">
                        <p class="text-base">29 March, 2024</p>
                        <button class="rounded-full bg-black p-3">
                            <img src={{ asset('images/pencil.svg') }}>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="flex h-64 w-64 flex-col justify-between rounded-3xl bg-[#FEC870] p-5 px-5 py-4">
                    <h3 class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, magni.</h3>
                    <div class="mt-14 flex items-center gap-12">
                        <p class="text-base">29 March, 2024</p>
                        <button class="rounded-full bg-black p-3">
                            <img src={{ asset('images/pencil.svg') }}>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="flex h-64 w-64 flex-col justify-between rounded-3xl bg-[#E3ED8D] p-5 px-5 py-4">
                    <h3 class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, magni.</h3>
                    <div class="mt-14 flex items-center gap-12">
                        <p class="text-base">29 March, 2024</p>
                        <button class="rounded-full bg-black p-3">
                            <img src={{ asset('images/pencil.svg') }}>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="flex h-64 w-64 flex-col justify-between rounded-3xl bg-[#E3ED8D] p-5 px-5 py-4">
                    <h3 class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, magni.</h3>
                    <div class="mt-14 flex items-center gap-12">
                        <p class="text-base">29 March, 2024</p>
                        <button class="rounded-full bg-black p-3">
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
