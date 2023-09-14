<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;

class RegisterController extends Controller
{
    public function index(): View
    {
        //
    }

    public function store(): View
    {
        // Проверяем данные и закидываем в бд
        // ... 

        
        Route::redirect('/login');
    }
}
