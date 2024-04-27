<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all tasks for the currently authenticated user
        $tasks = Task::where('User ID', Auth::id())->orderBy('due date')->get();

        return view('dashboard', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-to-do');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
        ]);

        $task = new Task;
        $task->name = $request->name;
        $task->description = $request->description;
        $task['due date'] = $request->due_date;
        $task['User ID'] = Auth::id(); // Set the user ID for the currently authenticated user
        $task->save();

        return redirect()->route('dashboard')->with('success', 'Task added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);

        // Check if the task belongs to the currently authenticated user
        if ($task['User ID'] !== Auth::id()) {
            abort(403, 'Unauthorized');
        }

        return view('view-to-do', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);

        // Check if the task belongs to the currently authenticated user
        if ($task['User ID'] !== Auth::id()) {
            abort(403, 'Unauthorized');
        }

        return view('edit-to-do', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
        ]);

        $task = Task::findOrFail($id);

        // Check if the task belongs to the currently authenticated user
        if ($task['User ID'] !== Auth::id()) {
            abort(403, 'Unauthorized');
        }

        $task->name = $request->name;
        $task->description = $request->description;
        $task['due date'] = $request->due_date;
        $task->save();

        return redirect()->route('dashboard')->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::destroy($id);

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
