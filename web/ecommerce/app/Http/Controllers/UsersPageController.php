<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Image;

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
            'image' => 'required|mimes:png,jpeg,jpg',
        ];

        $messages = [
            // 'name.required' => 'Name is required',
            // 'name.min' => 'min 3',
        ];

        // dd($request->all());


        $validator = Validator::make($request->all() ,$rules ,$messages);


        if(!empty($validator->messages()->all())){
            die('asd'); // pending
        }

        $image_laravel  = $request->file('image'); // Laravel
        $image  = Image::make($request->file('image'));  // Intervention



        if(!is_dir(public_path('/users'))){
            mkdir(public_path('/users'));
        }

        if(!is_dir(public_path('/users/'.$request->get('user_name')))){
            mkdir(public_path('/users/'.$request->get('user_name')));
        }

        $des_path = public_path('/users/'.$request->get('user_name'));

        $image_name = $request->get('user_name') . '.' . $image_laravel->getClientOriginalExtension();



        // Laravel Image upload
        // $upload = $image->move($des_path , $image_name);

        // $image->resize(100,60);


        $watermark = Image::make(public_path('/img/police.png'))->opacity(50);

        $image->insert($watermark, 'bottom-right');

        // dd($watermark);
        $image->save($des_path . '/' . $image_name);
        dd($image);

        // Intervention Image Upload



        // dd($upload);
        dd($image);






        dd($request->all());
    }
}
