@extends('layouts.base')
@section('content')
    <div class="container mx-auto">
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
            <div class="bg-white px-8 py-4 border-2 rounded-2xl border-[#616161] drop-shadow">
                <h1 class="font-bold text-4xl mb-4">{{ $task->name }} </h1>
                <p class="text-sm">Open: {{ \Carbon\Carbon::parse($task['created_at'])->format('d F Y') }} </p>
                <p class="text-sm">Due: {{ \Carbon\Carbon::parse($task['due date'])->format('d F Y') }}</p>
            </div>

            <button type="submit" class="rounded-lg bg-white border border-gray-300 text-[#00AFE7] px-5 py-3">
                <p class="text-sm">Mark As Done</p>
            </button>
            <button type="submit" class="rounded-lg bg-white border border-gray-300 text-[#00AFE7] px-5 py-3">
                <a href="{{ route('tasks.edit', ['id' => $task->id]) }}" class="text-sm">Edit</a>
            </button>
            <div>{!! $task->description !!}</div>

            </form>
        </div>
    </div>
    </div>

    @include('components.dateLogic')
@endsection