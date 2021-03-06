<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomePageControllers@getHome');

Route::get('/registration', 'UsersPageController@getRegistrationPage');
Route::get('/aboutus' , 'UsersPageController@getAboutPage');

Route::post('/registration', 'UsersPageController@addToUSer');
