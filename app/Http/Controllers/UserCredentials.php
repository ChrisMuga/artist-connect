<?php

namespace App\Http\Controllers;

use App\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserCredentials extends Controller
{
   public function register_user(Request $request)
   {
        $user = new user;
        $user->id = uniqid();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->email_address = $request->email_address;
        $user->password = Hash::make($request->password_1);
        
        if ($user->save())
        {
           return $user->first_name." has been successfully registered";
        }
        else
        {
            return "something went wrong...";
        }
      
        
   }
}
