<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/',[TodoController::class, 'homepage'])->name('Home');
Route::get('/all-todos', [TodoController::class, 'todos'])->name('Todos');
Route::post('/store', [TodoController::class, 'storeTodo'])->name('store');
Route::get('/delete/{id}', [TodoController::class, 'deleteTodo'])->name('delete');