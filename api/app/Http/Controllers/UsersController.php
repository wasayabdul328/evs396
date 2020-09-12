<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function addUser(Request $request)
    {
        // var_dump(md5('#ZD#@#$F2')); // 32bit
        // var_dump(sha1('saqib')); // 40bit
        // dd('asdasd');

        // dd($request->all());
        echo 'add User';
    }


    public function getSingleUser(){
        echo 'Get Single User';
    }

    public function getAllUSers(){
        echo 'Get All User';

    }


    public function deleteSingleUser(){
        echo 'delete user';
    }

    public function updateUser(){
        echo 'update user';
    }

    //
}
