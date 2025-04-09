<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiController;

use Illuminate\Support\Facades\Route;

Route::get("/", [ApiController::class, 'home'])->name('home');

// Create new task
Route::get('/api/create', [ApiController::class,'create'])->name('create');
Route::post('/api/createPost', [ApiController::class,'createPost'])->name('createPost');

// Read all tasks or a specific task
Route::get('/api/read', [ApiController::class,'read'])->name('read');
Route::get('/api/read/{id}', [ApiController::class, 'readById'])->name('readById');

// Update a task
Route::get('/api/update/{id}', [ApiController::class, 'update'])->name('update');
Route::post('/api/updatePost/{id}', [ApiController::class, 'updatePost'])->name('updatePost');
// Route::post('/api/editPost/{id}', [ApiController::class,'editPost'])->name('editPost');

// Delete a task
Route::get('/api/delete/{id}', [ApiController::class,'delete'])->name('delete');


Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::get("/register", [AuthController::class, 'register'])->name('register');

