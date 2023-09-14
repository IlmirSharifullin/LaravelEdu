<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    public function index(): View 
    {
        
    }

    public function store(): View
    {
        // Проверяем данные для входа и редирект на /
        // ...

        Route::redirect('/');
    }
}
