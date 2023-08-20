<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TodoController::class, 'index'])->name("todo.index");
Route::get('/todos/create', [TodoController::class, 'create'])->name("todo.create");
Route::post('/todos', [TodoController::class, 'store'])->name("todo.store");
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name("todo.show");
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name("todo.edit");
Route::put('/todos/{todo}/update', [TodoController::class, 'update'])->name("todo.update");
Route::delete('/todos/{todo}', [TodoController::class, 'delete'])->name("todo.delete");
Route::get('/todos/{todo}/completed', [TodoController::class, 'completed'])->name("todo.completed");
