<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class UsersPageController extends ViewComposingController
{

    public function getRegistrationPage(){


        $this->viewdata['name'] = 'Registration Form Title';
        $this->viewdata['name1'] = 'EVS2';

        return $this->buildPage('registration');
    }


    public function getAboutPage(){
        $this->viewdata['name'] = 'Aboutus Form';
        $this->viewdata['name1'] = 'EVS2';


// Keyword services

        return $this->buildPage('about-us');
    }


    public function addToUSer(Request $request){


        // if(empty($request->get('name'))){
        //     return 'Name is required';
        // }


        // if(strlen($request->get('name')) < 5){
        //     return '5 Char required';
        // }
        // checkdate()

        // $image_size = getimagesize($_FILES['image']['tmp_name']);
        // dd($image_size);
        //     dd($_FILES);
        $rules = [
            'name' => 'required|min:3',
            'user_name' => 'required|alpha_num',
            'email' => 'required|email',
            'password' => 'required',
            'retype-password' => 'required|same:password',
            'gender' => 'required',
            'dob' => 'required|date',
            'country' => 'required',
            'image' => 'required|mimes:png',
        ];

        $messages = [
            // 'name.required' => 'Name is required',
            // 'name.min' => 'min 3',
        ];

        // dd($request->all());

        $validator = Validator::make($request->all() ,$rules ,$messages);

        dd($validator->messages()->all());





        dd($request->all());
    }
}
