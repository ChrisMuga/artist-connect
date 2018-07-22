<?php

namespace App\Http\Controllers;

use App\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    #home
    public function home(Request $request)
    {
        return view('users.home');
    }
    #home

    #welcome
    public function welcome()
    {
        return view('users.welcome');
    }
    #welcome
}
