<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersPageController extends Controller
{
    //

    public function getRegistrationPage(){

        $data = array();
        $data['name'] = 'Registration Form';
        $data['name1'] = 'EVS2';

        // return view('registration', ['name' => 'EVS']);
        return view('registration', $data);

    }

}
