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
            <p id="dateContainer" class="md:mr-4 sm:p-5 text-lg text-center sm:mb-0 mb-4">Now: Thu, 28 Maret 2024</p>
            @if (Route::has('login'))
                <nav class="-mx-auto flex justify-end">
                    @auth
                    @else
                        <button onclick="window.location='{{ route('login') }}'"
                            class="bg-white text-[#00AFE7] px-5 py-3 mx-4 rounded-lg sm:p-5 text-lg">
                            Log in
                        </button>

                        @if (Route::has('register'))
                            <button onclick="window.location='{{ route('register') }}'"
                                class="bg-[#00AFE7] text-white px-5 py-3  rounded-lg sm:p-5 text-lg">
                                Register
                            </button>
                        @endif
                    @endauth
                </nav>
            @endif
        </nav>

        <div class="mt-12 flex justify-center">
            <div class="flex flex-col items-center mb-8">
                <button class="p-3 mt-12">
                    <img src={{ asset('images/simcard.svg') }}>
                </button>
                <h1 class="text-xl font-bold mt-3 text-center">Login before you can use this page</h1>

            </div>
        </div>
    </div>

    @include('components.dateLogic')
@endsection
