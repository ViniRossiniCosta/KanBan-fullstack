<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\BoardController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes da task
Route::middleware(['',''])->group(function() {
    Route::get('task/form', [TaskController::class, 'edit'])->name('task.edit');
    Route::patch('task/form', [TaskController::class, 'update'])->name('task.update');
    Route::delete('task/form', [TaskController::class, 'delete'])->name('task.remove');
});

// Routes do board
Route::middleware(['',''])->group(function() {
    Route::patch('board/form',[BoardController::class, 'create'])->name('board.create');
    Route::get('board/form',[BoardController::class, 'edit'])->name('board.edit');
    Route::delete('board/form',[BoardController::class, 'delete'])->name('board.delete');
});

// 

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
