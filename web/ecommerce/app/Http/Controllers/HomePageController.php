<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends ViewComposingController
{

    public function getHome()
    {

        return $this->buildPage('home');
    }

    public function getAboutUs(){

        return view('a');

    }
}
