<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserModel;
use DB;

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

    public function addUser(Request $request, UserModel $userObj)
    {

        $result = array();

        $params = array(
            'name' => $request->get('name'),
            'user_name' => $request->get('user_name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'gender' => $request->get('gender'),
            'dob' => $request->get('dob'),
            'country' => $request->get('country'),
            'profile_image' => $request->get('image'),
        );

        $isInsert = UserModel::insert($params);

        if(!$isInsert){
            $result['status'] = 404;
            $result['message'] = 'User not registered please try again.';

        }


        $result['status'] = 200;
        $result['message'] = 'User successfully registered.';

        return json_encode($result);
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
