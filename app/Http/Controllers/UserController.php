<?php

namespace App\Http\Controllers;

use App\User;

Class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id')->get();

        return view('user.index', compact('user'));
    }
}
