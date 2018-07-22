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
        $users = new user;
        $users = $users::all();
        return view('users.home')->with('users',$users);
    }
    #home

    #welcome
    public function welcome()
    {
        return view('users.welcome');
    }
    #welcome

    #profile

    public function profile(Request $request)
    {
        return view('users.profile');
    }

    #profile

    
}
