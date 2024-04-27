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
                    <a href="{{ route('tasks.create') }}" class="bg-black rounded-full p-3">
                        <img src={{asset("images/plus.svg")}}>
                    </a>
                    <h1 class="text-xl font-medium">Add more task</h1>
                    <h1 class="text-white bg-[#FD9A71] p-1 px-2 rounded-full text-xl ">
                        {{ count($tasks) }}
                    </h1>
                </div>
            </div>
        </div>

        <div class="mt-12 sm:mr-0 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($tasks as $task)
                <x-task-item :task="$task" />
            @endforeach
        </div>
    </div>
    
    @include('components.dateLogic')
@endsection
