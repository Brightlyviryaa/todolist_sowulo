@props(['task'])

@php
    $currentDate = \Carbon\Carbon::now();
    $dueDate = \Carbon\Carbon::parse($task['due date']);
    $daysRemaining = $currentDate->diffInDays($dueDate);

    if($daysRemaining < 3) {
        $taskColor = 'bg-[#FD9A71]';
    } else if($daysRemaining < 7) {
        $taskColor = 'bg-[#FEC870]';
    } else {
        $taskColor = 'bg-[#E3ED8D]';
    }

    $dueDate = \Carbon\Carbon::parse($task['due date'])->format('d F, Y');

    $task->name = Str::limit($task->name, 120);
    $task->name = wordwrap($task->name, 20, "<br>", true);
@endphp

<div class="flex justify-center">
    <div class="{{ $taskColor }}  p-5 rounded-3xl px-5 py-4 w-64 h-64 flex justify-between flex-col">
        <p class="text-xl break-all">{!! $task->name !!}</p>
        <div class="mt-auto flex gap-12 items-center">
            <p class="text-base">{{ $dueDate }}</p>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}" class="bg-black rounded-full p-3 ms-4">
                <img src="{{ asset('images/pencil.svg') }}">
            </a> 
            </a> 
        </div>
    </div>
</div>