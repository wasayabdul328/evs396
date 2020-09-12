<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/users', 'UsersController@getAllUSers');          // Fetch All Users
$router->post('/users', 'UsersController@addUser');             // For Add User
$router->get('/users/{id}', 'UsersController@getSingleUser');         // Fetch Single User
$router->put('/users/{id}', 'UsersController@updateUser');          // Update User
$router->delete('/users/{id}', 'UsersController@deleteSingleUser');
