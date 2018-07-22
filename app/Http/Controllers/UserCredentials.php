<?php

namespace App\Http\Controllers;

use App\user;

use Illuminate\Http\Request;
use Hash;
use Illuminate\Database\QueryException;
use Auth;


class UserCredentials extends Controller
{

   #user registration 
   public function register_user(Request $request)
   {
        $user = new user;
        $user->id = rand(100,100000);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->email_address = $request->email_address;
        $user->password = Hash::make($request->password_1);
        $user->remember_token = $request->_token;
        
        try
        {

            $user->save();
            $msg = $user->first_name." has been successfully registered";
            return response()->json(["code"=>1, "msg" => $msg]);
            
        }

        catch(QueryException $e)

        {
            $msg = "something went wrong...";
            return response()->json(["code"=>0, "msg" => $msg]);

        }
      
        
   }
   #user registration


   #user login

   public function login(Request $request)
   {
       return view('users.login');
   }

   #user login

   #user authentication
   public function authenticate_user(Request $request)
   {

        $credentials = $request->only('email_address','password');

        if (Auth::attempt($credentials))
        {
            return response()->json(['code'=>1,'msg'=>'Welcome, '.Auth::user()->first_name]);
        }
        else
        {
            return response()->json(['code'=>0,'msg'=>'Something went wrong, check your credentials']);
        }

   }
   #user authentication

   #logout
   public function logout(Request $request)
   {
        Auth::logout();
        return redirect('login');   
        
   }
   #logout
}
