<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('todo.createtodo');
});

Route::get('/dashboard', [TaskController::class, 'index'])
    ->name('dashboard')
    ->middleware(['auth', 'verified']);

// this middleware will check if the user is authenticated before allowing access to the routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'tasks', 'middleware' => 'auth'], function () {
    Route::get('create', [TaskController::class, 'create'])->name('tasks.create'); // Create form
    Route::post('/', [TaskController::class, 'store'])->name('tasks.store'); // Store task
    Route::get('{id}', [TaskController::class, 'show'])->name('tasks.show'); // Show task details
    Route::get('{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit'); // Edit form
    Route::put('{id}', [TaskController::class, 'update'])->name('tasks.update'); // Update task
    Route::delete('{id}', [TaskController::class, 'destroy'])->name('tasks.destroy'); // Delete task
});

require __DIR__.'/auth.php';
