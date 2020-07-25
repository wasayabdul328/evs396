<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function getHome()
    {
        return view('home');
    }

    public function getAboutUs(){

        return view('a');

    }
}
