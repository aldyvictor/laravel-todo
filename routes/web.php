<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\TodoController::class, 'index'])->name('todo.index');
Route::get('/todo/create', [App\Http\Controllers\TodoController::class, 'create'])->name('todo.create');
Route::post('/home', [App\Http\Controllers\TodoController::class, 'store'])->name('todo.store');
Route::get('/todo/edit/{id}', [App\Http\Controllers\TodoController::class, 'edit'])->name('todo.edit');
Route::put('/home/{id}', [App\Http\Controllers\TodoController::class, 'update'])->name('todo.update');
Route::delete('/home/{id}', [App\Http\Controllers\TodoController::class, 'destroy'])->name('todo.delete');
