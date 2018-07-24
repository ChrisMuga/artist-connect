<?php

namespace App\Http\Controllers;

use App\user;
use App\user_detail;
use App\post;
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
        $posts = new post;
        $posts = $posts::all();
        $user_details = new user_detail;
        $user_details = $user_details::all();
        return view('users.home')   ->with('users' , $users)
                                    ->with('posts' , $posts)
                                    ->with('user_details' , $user_details);
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
        $user = new user;
        $user = $user::where('email_address',$id)->first();
        
        
        return view('users.profile')    ->with('user_details',$user_detail)
                                        ->with('user',$user);
    }

    #profile

    #update profile

    public function update_profile(Request $request)

    {
        $user_detail = new user_detail;
        $user_detail = $user_detail::find($request->id);

        if( empty( $user_detail ) )
        {
            $user_detail = new user_detail;
        }

        #assign

            $user_detail->id = $request->id;
            $user_detail->nationality = $request->nationality;
            $user_detail->location = $request->location;
            $user_detail->gender = $request->gender;
            $user_detail->bio = $request->bio;

        #assign

        #save

            if( $user_detail->save())
            {
                return back();
            }
            else
            {
                return 'Error';
            }

        #save

        

    }

    #update profile


    #post


    public function post(Request $request)
    {

        if ( $post = post::forceCreate( $request->except('_token') ) )
        {
            return back();
        }
        else
        {
            return 0;
        }
    }

    #post

    
}
