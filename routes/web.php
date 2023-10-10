<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

// Route::get('/tasks', [TaskController::class, 'index'])->name('task.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('task.store');
Route::get('/tasks/{id}', [TaskController::class, 'create'])->name('task.show');
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::match(['put', 'patch'], '/tasks/{id}', [TaskController::class, 'update'])->name('task.update');
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('task.destroy');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login_action'])->name('auth.login_action');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register_action'])->name('auth.register_action');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
