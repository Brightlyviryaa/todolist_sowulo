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
@extends("layouts.base")
@section("content")
    <div class="container mx-auto">
        <nav class="bg-white flex justify-between items-center mt-11">
            <div>
                <h1 class="text-3xl font-bold">To-do List</h1>
                <h2 class="text-md">By Gerda SOWULO</h2>    
            </div>    
            <p class="mr-4">Now: Thu, 28 Maret 2024</p>
            <button class="bg-blue-400 text-white px-4 py-2 rounded-md">Log Out</button>  
        </nav>

        <div class="mt-10">
            <div class="flex justify-between">
                <div class="flex items-center gap-2">
                    <button class="bg-black rounded-full p-3">
                        <img src={{asset("images/plus.svg")}}>
                    </button>
                    <h1 class="text-2xl font-medium">Add more task</h1>
                    <h1 class="text-white bg-[#FD9A71] rounded-full p-3 aspect-square ml-9 text-lg font-medium">4</h1>
                </div>
            </div>
        </div>

        <div class="mt-12 grid grid-cols-4 gap-8">
            <div class="p-5 bg-[#FD9A71] rounded-3xl px-5 py-4 w-64 h-64 flex justify-between flex-col">
                <h3 class="text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, magni.</h3>
                <div class="mt-14 flex gap-12 items-center">
                    <p class="text-sm">29 March, 2024</p>
                    <button class="bg-black rounded-full p-3">
                        <img src={{asset("images/pencil.svg")}}>
                    </button> 
                </div>
            </div>
            <div class="p-5 bg-[#FEC870] rounded-3xl px-5 py-4 w-64 h-64 flex justify-between flex-col">
                <h3 class="text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, magni.</h3>
                <div class="mt-14 flex gap-12 items-center">
                    <p class="text-sm">29 March, 2024</p>
                    <button class="bg-black rounded-full p-3">
                        <img src={{asset("images/pencil.svg")}}>
                    </button> 
                </div>
            </div>
            <div class="p-5 bg-[#E3ED8D] rounded-3xl px-5 py-4 w-64 h-64 flex justify-between flex-col">
                <h3 class="text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, magni.</h3>
                <div class="mt-14 flex gap-12 items-center">
                    <p class="text-sm">29 March, 2024</p>
                    <button class="bg-black rounded-full p-3">
                        <img src={{asset("images/pencil.svg")}}>
                    </button> 
                </div>
            </div>
            <div class="p-5 bg-[#E3ED8D] rounded-3xl px-5 py-4 w-64 h-64 flex justify-between flex-col">
                <h3 class="text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, magni.</h3>
                <div class="mt-14 flex gap-12 items-center">
                    <p class="text-sm">29 March, 2024</p>
                    <button class="bg-black rounded-full p-3">
                        <img src={{asset("images/pencil.svg")}}>
                    </button> 
                </div>
            </div>
        </div>
    </div>    
@endsection