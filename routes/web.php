<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::redirect('/', '/home');

Route::view('/home', 'welcome');


Route::get('/greeting', function () {
    return 'Hello world';
});


Route::get('register', [RegisterController::class, 'index'])->name('register');

Route::post('register', [RegisterController::class, 'store'])->name('register.store');


Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login', [LoginController::class, 'store'])->name('login.store');


Route::prefix('user')->group(function() {
    // CRUD (create, read, update, delete)
    Route::get('posts', [PostController::class, 'index'])->name('posts');

    Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');

    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');

    Route::post('posts/create', [PostController::class, 'store'])->name('posts.store');

    Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

    Route::put('posts/{id}', [PostController::class, 'update'])->name('posts.update');

    Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
});



Route::fallback(function() {
    return "Fallback";
});