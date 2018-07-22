<?php

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
