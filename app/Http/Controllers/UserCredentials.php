<?php

namespace App\Http\Controllers;

use App\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;

class UserCredentials extends Controller
{

   #user registration 
   public function register_user(Request $request)
   {
        $user = new user;
        $user->id = uniqid();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->email_address = $request->email_address;
        $user->password = Hash::make($request->password_1);
        
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
}
