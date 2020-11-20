<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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


// index
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

// show
Route::get('/todos/{id}', [TodoController::class, 'show'])->name('todos.show');
// create
Route::get('/create', [TodoController::class, 'create'])->name('todos.create');
// store data
Route::post('/create', [TodoController::class, 'store'])->name('todos.store');
// edit data
Route::get('/todos/{id}/edit', [TodoController::class, 'edit'])->name('todos.edit');

// update data
Route::put('/todos/{id}/edit', [TodoController::class, 'update'])->name('todos.update');

//delete todo
Route::get('/todos/{id}/delete', [TodoController::class, 'destroy'])->name('todos.delete');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
