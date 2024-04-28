@extends('layouts.base')
@section('content')
    <div class="container mx-auto ">
        <nav class="bg-white flex md:justify-between justify-center items-center mt-11 md:flex-row flex-col md:p-5">
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
        <div class="container mx-auto mt-20 p-5 lg:px-96 lg:pt-52 lg:pb-80 lg:mt-0">
            <div class="mt-6">
                <div class="flex justify-between items-center gap-5">
                    <div class="flex items-center gap-5">
                        <button class="bg-black rounded-full p-2">
                            <img src={{ asset('images/pencil.svg') }}>
                        </button>
                        <h1 class="text-sm">Edit Task</h1>
                    </div>
                </div>
            </div>
            <h1 class="text-4xl font-bold text-start mt-6">{{ $task->name }}</h1>
            <p class="text-sm mt-2">Open: {{ \Carbon\Carbon::parse($task['created_at'])->format('d F Y') }}</p>
            <p class="text-sm mt-1">Due: {{ \Carbon\Carbon::parse($task['due date'])->format('d F Y') }}</p>

            <div class="mt-6">
                <div class="flex justify-between items-center gap-5">
                    <div class="flex items-center gap-5">
                        <form method="POST" action="{{ route('tasks.destroy', ['id' => $task->id]) }}">
                            @csrf
                            <button type="submit" class="rounded-lg bg-white border border-gray-300 text-[#00AFE7] px-5 py-3">
                                <p class="text-sm">Mark As Done</p>
                            </button>
                        </form>

                        <form method="POST" action="{{ route('tasks.destroy', ['id' => $task->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="rounded-full">
                                <img src={{ asset('images/trash_can.svg') }}>
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <span><br>{!! $task->description !!}</span>

            <div class="col-span-1 mt-3 flex items-center justify-center">
                <div class="px-auto rounded-[10px] bg-[#00AFE7]">
                    <form method="GET" action="{{ route('tasks.edit', ['id' => $task->id]) }}">
                        <button type="submit" class="rounded-lg bg-[#00AFE7] px-4 py-2 text-white">
                            <p class="px-3 py-1 text-lg">Edit Task</p>
                        </button>
                    </form>
                </div>
            </div>


        </div>
    </div>
    </div>

    @include('components.dateLogic')
@endsection