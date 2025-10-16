<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\StepController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes da task
Route::middleware(['TaskExists'])->group(function() {
    Route::get('task/form', [TaskController::class, 'edit'])->name('task.edit');
    Route::patch('task/form', [TaskController::class, 'update'])->name('task.update');
    Route::delete('task/form', [TaskController::class, 'delete'])->name('task.remove');
});

// Routes do board
Route::middleware(['BoardExists','EditPermission'])->group(function() {
    Route::patch('board/form',[BoardController::class, 'create'])->name('board.create');
    Route::get('board/form',[BoardController::class, 'edit'])->name('board.edit');
    Route::delete('board/form',[BoardController::class, 'delete'])->name('board.delete');
});

// Routes do step
Route::middleware(['TaskExists','StepExists'])->group(function() {
    Route::patch('step/form',[StepController::class, 'create'])->name('step.create');
    Route::get('step/form',[StepController::class, 'edit'])->name('step.edit');
    Route::delete('step/form',[StepController::class, 'delete'])->name('step.delete');
});

// Routes do attach
Route::middleware(['TaskExists','AttachExists'])->group(function() {
    Route::patch('board/form',[BoardController::class, 'create'])->name('board.create');
    Route::get('board/form',[BoardController::class, 'edit'])->name('board.edit');
    Route::delete('board/form',[BoardController::class, 'delete'])->name('board.delete');
});

// Routes do comment
Route::middleware(['TaskExists','CommentExists'])->group(function() {
    Route::patch('board/form',[BoardController::class, 'create'])->name('board.create');
    Route::get('board/form',[BoardController::class, 'edit'])->name('board.edit');
    Route::delete('board/form',[BoardController::class, 'delete'])->name('board.delete');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
