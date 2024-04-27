@props(['task'])

{{-- tes dulu --}}
{{-- @php
    if ($duedate === 'today') {
        $color = 'bg-[#FD9A71]';
    } elseif ($duedate === 'tomorrow') {
        $color = 'bg-[#FEC870]';
    } elseif ($duedate === 'thisweek' || $duedate === 'nextweek') {
        $color = 'bg-[#E3ED8D]';
    }
@endphp --}}

@php
$taskColor = 'bg-[#FD9A71]';

$dueDate = \Carbon\Carbon::parse($task['due date'])->format('d F, Y');
@endphp

<div class="flex justify-center">
    <div class="{{ $taskColor }}  p-5 rounded-3xl px-5 py-4 w-64 h-64 flex justify-between flex-col">
        <h3 class="text-xl">{{ $task->description }}</h3>
        <div class="mt-14 flex gap-12 items-center">
            <p class="text-base">{{ $dueDate }}</p>
            <button class="bg-black rounded-full p-3 ms-4">
                <img src={{asset("images/pencil.svg")}}>
            </button> 
        </div>
    </div>
</div>