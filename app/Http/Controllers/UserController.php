<?php

namespace App\Http\Controllers;

use App\user;
use App\user_detail;

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
        $id = Auth::user()->email_address;
        
        $user_detail = new user_detail;
        $user_detail = $user_detail::find($id);
        
        return view('users.profile')->with('user_details',$user_detail);
    }

    #profile

    #update profile

    public function update_profile(Request $request)

    {

        if( $user_detail = user_detail::forceCreate($request->except('_token')) )
        {
            return back();
        }
        else
        {
            return 'Error';
        }

    }

    #update profile

    
}
