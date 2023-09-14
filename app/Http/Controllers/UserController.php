<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    //

    public function show(string $id): View
    {
        $user = User::findOrFail($id);
        echo $user;
        if ($user) {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);}
        else {
            return 'Юзера нет';
        }
    }
    public function index(): View
    {
        return view('user.profile');
    }
}
