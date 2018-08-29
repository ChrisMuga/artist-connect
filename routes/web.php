<?php

use App\user;
use App\post;
use App\user_detail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','UserController@welcome');
Route::any('register_user','UserCredentials@register_user');
Route::any('login','UserCredentials@login');
Route::post('auth_user','UserCredentials@authenticate_user');
Route::get('home','UserController@home');
Route::get('logout','UserCredentials@logout');
Route::get('profile','UserController@profile');
Route::post('update_profile','UserController@update_profile');
Route::post('post','UserController@post');
// Route::any('{id}', function ($id) 
                            
//                             {

//                                 $user = user::find($id);
//                                 $posts = post::where('user_id',$id)->get();
//                                 $user_detail = user_detail::find($user->email_address);
                                
//                                 return view('users.user_profile')     
//                                         ->with('user',$user)
//                                         ->with('posts', $posts)
//                                         ->with('user_details',$user_detail);

//                             }

//                         );

Route::get('typeahead','UserController@typeahead');
Route::get('fetch','UserController@fetch');
