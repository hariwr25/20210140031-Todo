<?php

use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
// use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/todo', [TodoController::class,'view'])->name('todo.view');

Route::get('/user', [UserController::class,'index'])->name('user.index');
require __DIR__.'/auth.php';