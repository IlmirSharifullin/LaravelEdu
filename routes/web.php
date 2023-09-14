<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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

Route::view('/', 'welcome');

Route::get('/greeting', function () {
    return 'Hello world';
});

Route::get('/users/{id}', [UserController::class, 'show']);
// Route::resource('user', UserController::class);

Route::resource('posts', PostController::class);

Route::fallback(function() {
    return "Fallback";
});